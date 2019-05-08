<?php

class Auth Extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('admin/login_mdl','login');
  }
	
	public function index(){
		$this->load->view('Admin/Auth/Login_admin');
	}
	
  public function auth_action(){
    $post = $this->input->post();
    $this->form_validation->set_rules($this->userpassrules());
    $this->form_validation->set_message('required','%s harus diisi!');

    if($this->form_validation->run() == false){
        $this->load->view('Admin/Auth/Login_admin');

    } else{
      $username = $post['username'];
      $password = sha1($post['password']);
      $cek = $this->login->checkLogin($username,$password);

      if(sizeof($cek) == 1 ){
        $session_login = ['admin_id' => $cek[0]['id_admin']];
        $this->session->set_userdata($session_login);
        redirect('admin/dashboard');
      }else{
        setFlashData('alert-inv alert-inv-primary','Hey! password anda salah!','auth');
      }
    }
  }

  public function coba(){
		$this->load->view('Templates/Admin/master_dashboard');
	}
  
  public function userpassrules(){
    return [
      [
        'field' => 'username',
        'label' => 'Username',
        'rules' => 'trim|required'
      ],
      [
        'field' => 'password',
        'label'  => 'Password',
        'rules' => 'trim|required'
      ]
    ];
  }


  public function logout(){
    if(adminLoggedIn()){
      $this->session->set_userdata('admin_id','');
      setFlashData('alert-inv alert-inv-secondary','anda berhasil logout!','auth');
    } else{
      setFlashData('alert-inv alert-inv-primary','wah! ada yang salah! silahkan login','auth');
    }
  }
}
