<?php

class Profile_ukuran_mdl extends CI_Model
{
  public function insert_profile_ukuran($data){
    $this->db->insert('profile_ukuran',$data);
    $id_profile = $this->db->insert_id();
    return $id_profile;
  }

  public function get_where_profile($id){
    return $this->db->get_where('profile_ukuran',$id)->result();
  }

  public function delete_profile_ukuran($data){
    $this->db->delete('profile_ukuran',$data);
  }
}
