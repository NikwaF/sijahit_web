<?php


class Pemesanan_mdl extends CI_Model{

  public function get_belum_acc(){
    $this->db->select('pemesanan.*,customer.nama_customer');
    $this->db->from('pemesanan');
    $this->db->join('customer','pemesanan.id_customer = customer.id_customer');
    $this->db->where(['is_accept' => 0,'sudah_ditolak' => 0]);
    return $this->db->get()->result_array();
  }

  public function get_detail_pemesanan($data){
    $this->db->select('pemesanan_detail.*,kategori_joinan.nama_tipe,kategori_joinan.nama_ukuran');
    $this->db->from('pemesanan_detail');
    $this->db->join('kategori_joinan','pemesanan_detail.id_kategori = kategori_joinan.id_kategori');
    $this->db->where($data);
    return $this->db->get()->result_array();
  }

  public function get_kode_pemesanan_blm_ukur($kode){
    return $this->db->call_function('getPemesanan_detail',$kode)->result_array();
  }

  public function get_belum_diukur(){
    return $this->db->get('get_belum_diukur')->result_array();
  }

  public function get_on_going(){
    return $this->db->get('get_ongoing')->result_array();
  }

  public function jumlah_detail_ongoing($kode)
  {
    $query = $this->db->query( "CALL get_jumlah_detail_pesanan(\"".$kode."\")");
    $hasil = $query->result_array();

    $query->next_result();
    $query->free_result();
    return $hasil;
  }

  public function update_ong_going($kode){
    $this->db->select('*');
    $this->db->from('pemesanan_detail');
    $this->db->join('kategori_joinan', 'pemesanan_detail.id_kategori = kategori_joinan.id_kategori');
    $this->db->where(['pemesanan_detail.kode_pesanan' => $kode]);
    return $this->db->get()->result_array();
  }

}