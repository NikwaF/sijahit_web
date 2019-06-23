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
				'isinya' => 'Admin/Dashboard/kategori/tambah_kategori.php',
        'dataUkuran' => $this->kategori->getukurantipe()
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

  public function insert_ukuran_range_harga(){
    if(adminLoggedIn()){
      $number_object = count($_POST['tipe_ukuran']);
      $sukseskah;
      for($i=0 ; $i < $number_object ; $i++){
        if(trim($_POST['tipe_ukuran'][$i]) != '' ||trim($_POST['hargamin'][$i]) != ''|| trim($_POST['hargamax'][$i]) != ''  ) {
          $data = [
            'id_tipe' => $_POST['tipe_kategori'],
            'id_ukuran' => $_POST['tipe_ukuran'][$i],
            'harga_min' => $_POST['hargamin'][$i],
            'harga_max' => $_POST['hargamax'][$i]
          ];
          $insert_kan = $this->kategori->insert_kategori($data);
          $sukseskah = $insert_kan;
        }
      } 
      echo json_encode($sukseskah);
    } else{
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
    }
  }
	
	public function getTipe(){
			$datanya = $this->kategori->gettipe();
			echo json_encode($datanya);		
	}

	public function ihaa(){
    var_dump($this->input->post());
	}

	public function view()
	{
		if(adminLoggedIn()){
			$data = [
				'isinya' => 'Admin/Dashboard/kategori/kategori_detail.php',
			];
			
			$this->load->view('Templates/Admin/master_dashboard',$data);
		} else {
			setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
		}
	}
	
	// public function ahay(){
		// $datanya = $this->kategori->getTipename();
		// var_dump($datanya);
	// }
}
