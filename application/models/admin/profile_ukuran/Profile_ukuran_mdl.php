<?php

class Profile_ukuran_mdl extends CI_Model
{
  public function insert_profile_ukuran($data){
    $this->db->insert('profile_ukuran',$data);
    $id_profile = $this->db->insert_id();
    return $id_profile;
  }
}
