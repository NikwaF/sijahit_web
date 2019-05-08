<?php 

class Login_mdl extends CI_Model{
  public function checkLogin($username,$password){
    return $this->db->get_where('admin', ['username' => $username , 'password' => $password])->result_array();
  }
}
