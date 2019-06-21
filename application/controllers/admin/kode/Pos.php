<?php 

class Pos extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/kode/pos_mdl', 'pos');
	}

	public function index()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kode/pos',
				'data_pos' => $this->pos->get()
			];
			
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function tambah_data()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kode/tambah'
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
			'kode_pos' => $input['kode_pos'],
			'biaya' => $input['biaya']
		];

		if ($this->pos->tambah($data)) {
			setFlashData('alert-inv alert-inv-success','Data berhasil ditambahkan','admin/kode/pos');
		}
	}
}