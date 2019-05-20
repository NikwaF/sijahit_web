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
				'isinya' => 'Admin/Dashboard/pemesanan/pesan_offline',
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
			setFlashData('alert-inv alert-inv-success','Data berhasil ditambahkan','admin/pemesanan/list_pemesanan_offline');
		}
	}
}