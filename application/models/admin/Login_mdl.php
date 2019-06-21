<?php

class Login_mdl extends CI_Model{
  public function checkLogin($username){
    return $this->db->get_where('admin', ['username' => $username])->result_array();
  }
}
