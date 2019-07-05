<?php

class Upload_mdl_test extends CI_Model{
  public function insert_image($data){
    return $this->db->insert('upload_test',$data);
  }
}