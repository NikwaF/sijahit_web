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
				'kategori' => $this->kategori_option(),
				'kode_pemesanan' => $this->kode_pemesanan()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
	} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function kategori_option(){
		$kategori = $this->kategori->kategori_join();
		return $kategori;
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

	public function handlerpesanoffline(){
		if(isset($_POST['simpandatapesanan'])){
				$this->nambahpesanan();
				redirect(site_url('admin/pemesanan/pesan_offline/cart_penjahitan'));
			
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

		if(!$this->session->has_userdata('id_customer')){
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
		}
		

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
			}
			
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

					$this->go_tambah_lagi();
					}
					
				 else{
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

					$this->go_tambah_lagi();

					// return TRUE;
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
		$data = [
							'kategori' => $this->kategori_option(),
							'kode_pemesanan' => $this->kode_pemesanan(),
							'isinya' => 'Admin/Dashboard/pemesanan/tambah_lagi_offline'
						];

						$this->load->view('Templates/Admin/master_dashboard',$data);
	}

	public function coba(){
		 var_dump($this->session->userdata());
		//  echo '<br>';
		//  echo($_SESSION['id_profile_ukuran']);
		
	}

	public function batalkan_pesanan(){
		if($this->session->has_userdata('id_customer')){
			$this->load->model('admin/customer/customer_mdl','customer');
			$id_customer = ['id_customer' => $this->session->userdata('id_customer')];
			$delete = $this->customer->delete_customer($id_customer);
			if($delete){
				unset($_SESSION['id_customer']);
				unset($_SESSION['nama_pemesan']);
			}			
		}

		if($this->session->has_userdata('id_profile_ukuran')){
			unset($_SESSION['id_profile_ukuran']);
		}

		if($this->session->has_userdata('pemesanan_detail')){
			$this->unlink_gambar();
			$this->delete_id_profile_from_session();
			$this->unset_session();
		}
		setFlashData('alert alert-danger','Pesanan Dibatalkan!','admin/pemesanan/pesan_offline');
	}

	public function selesaikan_pesanan(){
		$pemesanan_status;
		$pemesanan_detail_status;

		if($this->session->has_userdata('pemesanan')){
			$insert = $this->pesan_offline->insert_pemesanan($_SESSION['pemesanan']);
			$pemesanan_status = $insert;
		}
		if($this->session->has_userdata('pemesanan_detail')){
			$jumlah_session = count($_SESSION['pemesanan_detail']);
			for($i=0; $i <= $jumlah_session-1 ; $i++){
				$insert = $this->pesan_offline->insert_pemesanan_detail($_SESSION['pemesanan_detail'][$i]);
				$pemesanan_detail_status = $insert;
			}
		}
		$this->unset_session();

		if($pemesanan_status && $pemesanan_detail_status){
			setFlashData('alert alert-success','Pemesanan Sukses di Inputkan','admin/pemesanan/pesan_offline');
		}
	}

	public function unset_session(){
		if(isset($_SESSION['id_customer'])){
			unset($_SESSION['id_customer']);
		}
		if(isset($_SESSION['nama_pemesan'])){
			unset($_SESSION['nama_pemesan']);
		}
		if(isset($_SESSION['id_profile_ukuran'])){
			unset($_SESSION['id_profile_ukuran']);
		}
		
		if(isset($_SESSION['pemesanan'])){
			unset($_SESSION['pemesanan']);
		}
		if(isset($_SESSION['pemesanan_detail'])){
			unset($_SESSION['pemesanan_detail']);
		}
		if(isset($_SESSION['id_profile_ukuran'])){
			unset($_SESSION['id_profile_ukuran']);
		}
	}

	public function delete_id_profile_from_session(){
		if($this->session->has_userdata('pemesanan_detail')){
			$jumlah_session = count($_SESSION['pemesanan_detail']);
			if($jumlah_session > 0){
				for($i=0 ; $i <= $jumlah_session-1 ; $i++){
					$id_profile_ukuran = $_SESSION['pemesanan_detail'][$i]['id_profile_ukuran'];
					$data = ['id_profile_ukuran' => $id_profile_ukuran];
					$this->load->model('admin/profile_ukuran/profile_ukuran_mdl','profile');
					$this->profile->delete_profile_ukuran($data);
				}
			}
		}
	}

	public function cek_gambar(){
		$tempat_gambar = realpath(APPPATH. '../assets/gambar/model_pesanan/');
		$nama_gambar = $_SESSION['pemesanan_detail'][1]['gambar_pesanan'];
		// echo $tempat_gambar.'/'.$nama_gambar;
		if(file_exists($tempat_gambar.'/'.$nama_gambar)){
			// if(unlink($tempat_gambar.'/'.$nama_gambar)){
			// 	echo 'berhasil menghapus';
			// } else {
			// 	echo 'tidak berhasil';
			// }
			echo 'ketemu';
		}
	}

	public function unlink_gambar(){
		if($this->session->has_userdata('pemesanan_detail')){
			$jumlah_session = count($_SESSION['pemesanan_detail']);
			if($jumlah_session > 0){
				for($i=0 ; $i <= $jumlah_session-1 ; $i++){
					$tempat_gambar = realpath(APPPATH. '../assets/gambar/model_pesanan/');
					$_SESSION['pemesanan_detail'][$i]['gambar_pesanan'];

					if(file_exists($tempat_gambar.'/'.$_SESSION['pemesanan_detail'][$i]['gambar_pesanan'])){
						if($_SESSION['pemesanan_detail'][$i]['gambar_pesanan'] == 'default.jpg'){
							echo 'haloo';
						
						} else {
								$halo = $tempat_gambar.'/'.$_SESSION['pemesanan_detail'][$i]['gambar_pesanan'];
							unlink($halo);
						}
					}
				}
			}
		}
	}

	public function go_tambah_lagi(){
		if(isset($_POST['nambahpesanan'])){
			$jumlah_pemesanan = count($_SESSION['pemesanan_detail'])-1;
			if(isset($_SESSION['pemesanan_detail'][$jumlah_pemesanan])){
				$data = [
					'kategori' => $this->kategori_option(),
					'kode_pemesanan' => $this->kode_pemesanan(),
					'isinya' => 'Admin/Dashboard/pemesanan/tambah_lagi_offline'
				];
				$this->load->view('Templates/Admin/master_dashboard',$data);
			} 	
		}
	}

	public function get_profile_ukuran(){
		$id = $this->input->post('idnya_profile');
		$this->load->model('admin/profile_ukuran/profile_ukuran_mdl','profile');
		$id = ['id_profile_ukuran' => $id];
		$get = $this->profile->get_where_profile($id);
		echo(json_encode($get));
	}

	public function cart_penjahitan(){
		$kategori_dong= [];
		if(isset($_SESSION['pemesanan_detail'])){
		for($i=0; $i <= sizeof($_SESSION['pemesanan_detail'])-1 ; $i++){
			$idnya = $_SESSION['pemesanan_detail'][$i]['id_kategori'];
			$halo = ['id_kategori' => $idnya];
			$kategori = $this->kategori->getwherekategori($halo);
			array_push($kategori_dong,$kategori);
		}
		}
		
		$data = [
			'isinya' => 'Admin/Dashboard/pemesanan/cart_penjahitan',
			'kategorinya' => $kategori_dong
		];

		$this->load->view('Templates/Admin/master_dashboard',$data);
	}

	public function tanggal(){
		echo $_SESSION['pemesanan']['tanggal_req'];
	}
}