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

	public function terima_pesanan($kode){
		$data = [
			'is_accept' => 1
		];

		$terima = $this->update_pesanan($data,$kode);

		if($terima){
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','admin/pemesanan/pesanan_menunggu_acc');

		}

	}

	public function tolak_pesanan($kode){
		$data = [
			'sudah_ditolak' => 1
		];

		$tolak =$this->update_pesanan($data,$kode);

		if($tolak){
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','admin/pemesanan/pesanan_menunggu_acc');

		}
	}

	public function update_pesanan($data,$kode){
		$update = $this->pemesanan->update_pesanan($data,$kode);
		return $update;
	}

	public function halo(){

			$data = [
				'isinya' => 'Admin/Dashboard/pemesanan/detail_pemesanan',				
			];
			$this->load->view('Templates/Admin/master_dashboard',$data);
	}
}