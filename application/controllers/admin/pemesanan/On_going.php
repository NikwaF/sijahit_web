<?php 

class On_going extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('admin/pemesanan/pemesanan_mdl','pemesanan');
  }

	public function index()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/on_going_pemesanan',
				'on_going' => $this->pemesanan->get_on_going()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function halo($value='')
	{
		$data = array();
		$data2 = $this->pemesanan->get_on_going();


			
		// echo count($data2);
		for ($i=0; $i < count($data2)-1 ; $i++) { 
			$kode_pemesanan = $data2[$i]['kode_pemesanan'];
			$halo = $this->pemesanan->jumlah_detail_ongoing($kode_pemesanan);
			$halo3 = array_merge($data2,$halo);
			$data[] = $data+$halo3;

		}

		var_dump($data);
	}
}