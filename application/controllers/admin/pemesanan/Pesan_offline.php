<?php 

/**
 * 
 */
class Pesan_offline extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/pemesanan/pesanoffline_mdl','pesan_offline');
	}

	public function index()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/pesan_offline'
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
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
			'tanggal_minta' => $input['tanggal'],
			'ukuran' => $input['ukuran']
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
}