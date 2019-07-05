<?php

class Profile_ukuran_mdl extends CI_Model
{
  public function insert_profile_ukuran($data){
    $this->db->insert('profile_ukuran',$data);
    $id_profile = $this->db->insert_id();
    return $id_profile;
  }

  public function get_where_profile($id_customer = null, $id_profile_ukuran = null){
    if($id_customer != null && $id_profile_ukuran != null){
      $data = [
        'id_profile_ukuran' => $id_profile_ukuran,
        'id_customer' => $id_customer
      ];

      $this->db->where($data);
      return $this->db->get('profile_ukuran')->result_array();
    } else {
      $id = [
        'id_customer' => $id_customer
      ];
      return $this->db->get_where('profile_ukuran',$id)->result_array();
    }
  }

  public function update_ukuran($data,$id){
    return $this->db->update('profile_ukuran',$data,$id);
  }

  public function delete_profile_ukuran($data){
    return $this->db->delete('profile_ukuran',$data);
  }
}
