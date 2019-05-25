<?php 


class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/kategori/kategori_mdl','kategori');
	}
	
	public function index(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kategori/table.php',
				'data_kategori' => $this->kategori->getKategori()
			];
			
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
	
	public function tambah_data(){
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kategori/tambah_kategori.php'
			];
			
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
	
	public function tambah_data_action(){
		if(adminLoggedIn()){
			$input = $this->input->post();
			$data = [
				'nama_kategori' => $input['namaKategori'],
				'harga_min' => $input['hargamin'],
				'harga_max' => $input['hargamax'],
				'ukuran' => $input['ukuran']
			];
			
			if($this->kategori->tambah($data)){
				setFlashData('alert-inv alert-inv-success','Data berhasil ditambahkan','admin/kategori/kategori');
			} else {
				setFlashData('alert-inv alert-inv-danger','Data tidak berhasil ditambahkan','admin/kategori/kategori');
			}
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
	
	public function insert_tipe(){
		if(adminLoggedIn()){
			$data = ['nama_tipe' => $this->input->post('nama_tipe')];
			
			$insert = $this->kategori->add_tipe($data);
			echo($insert);
		}
	  else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	
	}
	
	public function getTipe(){
			$datanya = $this->kategori->gettipe();
			echo json_encode($datanya);		
	}
	
	public function getUkuranTipe(){
			$datanya = $this->kategori->getukurantipe();
			echo json_encode($datanya);		
	}
	
	public function ihaa(){
		echo json_encode($this->input->post());
	}
	
	// public function ahay(){
		// $datanya = $this->kategori->getTipename();
		// var_dump($datanya);
	// }
}