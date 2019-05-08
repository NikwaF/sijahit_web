<?php

class Auth Extends CI_Controller{
	
	public function index(){
		$this->load->view('Admin/Auth/Login_admin');
	}
	
		public function coba(){
		$this->load->view('Templates/Admin/master_dashboard');
	}
}