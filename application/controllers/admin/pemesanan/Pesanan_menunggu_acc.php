<?php 

class Pesanan_menunggu_acc extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/pemesanan/pemesanan_mdl','pemesanan');
	}
	
	public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/pesanan_menunggu_acc',
				'isi_belum_acc' => $this->pemesanan->get_belum_acc()
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}

	public function detail_belum_acc($id){
		$id = ['kode_pesanan' => $id];
		$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/detail_pemesanan',
				'datas' => $this->pemesanan->get_detail_pemesanan($id)
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
	}

	public function halo(){

			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/detail_pemesanan',
				
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
	}
}