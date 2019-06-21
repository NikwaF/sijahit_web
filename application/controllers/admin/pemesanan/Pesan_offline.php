<?php 

class Pesan_offline extends CI_Controller
{
	private $hitungan = 0;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/pemesanan/pesanoffline_mdl','pesan_offline');
		$this->load->model('admin/kategori/kategori_mdl','kategori');
	}

	public function index()
	{
		if(adminLoggedIn()){
			
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/pesan_offline',
				'kategori' => $this->kategori->kategori_join(),
				'kode_pemesanan' => $this->kode_pemesanan()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
	} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function kode_pemesanan(){
		$jmlkode = count($this->pesan_offline->getKodePemesanan())+1;
		$kode = str_pad($jmlkode,4,"0", STR_PAD_LEFT);
		return $kode_pemesanan = "JHT".$kode ."1";
	}

	public function list_pemesanan_offline()
	{

		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/list_pemesanan_offline',
				'data_offline' => $this->pesan_offline->getoffline()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function tambah_data_action()
	{
		$input = $this->input->post();
		$data = [
			'nama_pemesan' => $input['namapemesan'],
			'alamat_pemesan' => $input['alamat'],
			'no_hp' => $input['nohppemesan'],
			'tanggal_minta' => $input['date'],
			'ukuran' => $input['ukuran'],
			'detail_ukuran' => $input['detail_ukuran']
		];

		if ($this->pesan_offline->tambah($data)) {
			setFlashData('alert-inv alert-inv-success','Data berhasil ditambahkan','admin/pemesanan/pesan_offline/list_pemesanan_offline');
		}
	}

	public function ahay(){
		$model = $this->load->model('admin/pemesanan/pesanoffline_mdl');
		$result = $this->pesan_offline->jumlah_offline()->result();

		// var_dump($result);
		echo $result[0]->halo;
	}	

	public function handlerpesanoffline(){
		if(isset($_POST['simpandatapesanan'])){
			$this->upload_gambar();
			if(!$this->upload->do_upload('uploadmodel')){
				$error = $this->upload->display_errors();
				echo $error;
			} else{
						$nama_file = $this->upload->data();
						var_dump($nama_file['file_name']);
			}
			// var_dump($_FILES['uploadmodel']);

			// echo $this->input->post('namapemesan');
		} 
		elseif(isset($_POST['nambahpesanan'])){
			$this->nambahpesanan();
		}
	}

	public function insert_customer($data_customer){
		$data = $data_customer;
		$this->load->model('admin/customer/customer_mdl','customer');
		$insert = $this->customer->insert_customer($data);
		return $insert;
	}

	public function insert_profile_ukuran($data_profile){
		$data = $data_profile;
		$this->load->model('admin/profile_ukuran/profile_ukuran_mdl','profile');
		$insert = $this->profile->insert_profile_ukuran($data);
		return $insert;
	}

	public function nambahpesanan(){
		$post = $this->input->post();
		$username = $post['namapemesan'];
		$tanggalreq = $post['reqtanggal'];
		$nohp = $post['nohp'];
		
		
		$data_customer = [
			'nama_customer' => $username,
			'no_hp' => $nohp,
			'on_or_off' => 1,
			'date_created' => date("Y-m-d H:i:s")
		];
		$id_customer = $this->insert_customer($data_customer);
		$this->session->set_userdata('id_customer',$id_customer);
		$this->session->set_userdata('nama_pemesan',$username);

		if($this->session->has_userdata('id_customer')){
			$data_profil_ukuran = [
				'nama_profile' => 'PU_'.$this->session->userdata('nama_pemesan'),
				'id_customer' => $this->session->userdata('id_customer'),
				'panjang_dada' => $post['panjang_dada'] ,
				'lingkar_dada' => $post['lingkar_dada'],
				'lebar_dada'=> $post['lebar_dada'],
				'lingkar_pinggang' => $post['lingkar_pinggang'],
				'panjang_lengan' => $post['panjang_lengan'],
				'lingkar_lengan' => $post['lingkar_lengan'],
				'lingkar_pinggul' => $post['lingkar_pinggul'],
				'panjang_celana' => $post['panjang_celana'],
				'lingkar_celana' => $post['lingkar_celana'],
				'lingkar_paha' => $post['lingkar_paha'],
				'panjang_bahu' => $post['panjang_bahu'],
				'panjang_punggung' => $post['panjang_punggung'],
				'jenis_kelamin' => $post['jenis_kelamin'],
			];

			$id_profile_ukuran = $this->insert_profile_ukuran($data_profil_ukuran);
		$this->session->set_userdata('id_profile_ukuran',$id_profile_ukuran);
		}


		if($this->session->has_userdata('id_customer') && $this->session->has_userdata('id_profile_ukuran')){
			if(!$this->session->has_userdata('pemesanan')){

				$pemesanan = array(
						'kode_pemesanan' => $this->kode_pemesanan(),
						'id_customer' => $this->session->userdata('id_customer'),
						'is_accept' => 1,
						'tanggal' => date("Y-m-d H:i:s"),
						'tanggal_req' => $tanggalreq,
						'method_order' => 2,
						'is_ukur' => 1,
						'sudah_ditolak' => 0
				);

				$_SESSION['pemesanan'] = $pemesanan;
			} else {
				if(!isset($_SESSION['pemesanan_detail'])){

					$items = array(
						'kode_pesanan' => $this->kode_pemesanan(),
						'id_profile_ukuran' => $this->session->userdata('id_profile_ukuran'),
						'id_kategori' => $post['kategori'],
						'jumlah' => $post['jumlah'],
						'gambar_pesanan' => '',
						'deskripsi_pesanan' => $post['deskripsi_pesanan']
					);
					$this->upload_gambar();

					if(!$this->upload->do_upload('uploadmodel')){
						$items['gambar_pesanan'] = 'default.jpg';
					} else {
						$nama_file = $this->upload->data();
						$items['gambar_pesanan'] = $nama_file['file_name'];
					}
					$_SESSION['pemesanan_detail'][0] = $items;
					
				} else{
					$this->upload_gambar();
					$jumlah_pemesanan = count($_SESSION['pemesanan_detail']);
					$items = array(
						'kode_pesanan' => $this->kode_pemesanan(),
						'id_profile_ukuran' => $this->session->userdata('id_profile_ukuran'),
						'id_kategori' => $post['kategori'],
						'jumlah' => $post['jumlah'],
						'gambar_pesanan' => '',
						'deskripsi_pesanan' => $post['deskripsi_pesanan']
					);
					if(!$this->upload->do_upload('uploadmodel')){
						$items['gambar_pesanan'] = 'default.jpg';
					} else {
						$nama_file = $this->upload->data();
						$items['gambar_pesanan'] = $nama_file['file_name'];
					}

					$_SESSION['pemesanan_detail'][$jumlah_pemesanan] = $items;
				}
			}
		}
	}

	public function upload_gambar(){
		$config['upload_path'] = realpath(APPPATH.'../assets/gambar/model_pesanan/');
		$config['allowed_types'] = 'JPG|JPEG|GIF|PNG|gif|jpg|png|jpeg|tft|TFT';
		$config['file_name'] = 'gm_'.time();

		$this->load->library('upload',$config);
	}

	public function getCountPemesananDetail(){
		$hitung = count($this->pesan_offline->getIdPemesananDetail());
		return $hitung;
	}

	public function halo2(){
		// echo $this->input->post('kategori');
		// echo(realpath(APPPATH. '../assets/gambar/model_pesanan/'));
		// echo "gm_".time().".jpg";
		// $this->session->unset_userdata('gambarnya');
		unset($_SESSION['pemesanan_detail'][0]);
		
	}

	public function coba(){
		 var_dump($this->session->userdata());
		
	}
}
