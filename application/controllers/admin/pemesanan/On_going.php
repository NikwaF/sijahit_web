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
				'data_on_going' => $this->get_value_belum_diukur()
			];

			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function get_value_belum_diukur()
	{
		$data = [];
		$data2 = $this->pemesanan->get_on_going();
			
		for ($i=0; $i <= count($data2)-1 ; $i++) { 
			$kode_pemesanan = $data2[$i]['kode_pemesanan'];
			$halo = $this->pemesanan->jumlah_detail_ongoing($kode_pemesanan);
			$halo3 = array_merge($data2[$i],$halo);
			$data[]=$halo3;
		}
		
		return $data;		
	}
}