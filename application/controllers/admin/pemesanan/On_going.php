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

	public function update($kode)
	{
		if (adminLoggedIn()) {
			$data= [
				'isinya'=> 'admin/Dashboard/pemesanan/update_on_going',
				'update_on_going' => $this->pemesanan->update_ong_going($kode)
			];
			$this->load->view('Templates/Admin/master_dashboard', $data);
		}else{
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function detail_on_going($kode)
	{
		if(adminLoggedIn()){
			$data= [
				// 'isinya' => 'admin/Dashboard/pemesanan/detail_on_going',
				// 'detail_on_going' => $this->pemesanan->detail_on_going($kode),
				'pemesanan.kode_pemesanan' => $kode,
				'is_accept' => 1
			];
			$data2 = [
				'detail_on_going' => $this->pemesanan->detail_on_going($data),
				'isinya' => 'admin/Dashboard/pemesanan/detail_on_going'
			];
			// var_dump($data2);
			$this->load->view('Templates/Admin/master_dashboard', $data2);
		}else{
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	function hado($kode){
			$data= [
				'pemesanan.kode_pemesanan' => $kode,
				'is_accept' => 1
			];
			$hehe = $this->pemesanan->detail_on_going($data);

			var_dump($hehe);
	}
}