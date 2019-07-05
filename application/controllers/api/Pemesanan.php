<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pemesanan extends REST_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/pemesanan/profile_ukuran_mdl','ukuran');
	}

	public function index_post(){
    
  }
}
