<?php

function setFlashData($kunci,$pesan,$url){
  $CI = get_instance();
  $CI->load->library('session');
  $CI->session->set_flashdata('kunci',$kunci);
  $CI->session->set_flashdata('pesan',$pesan);
  redirect($url);
}


function adminLoggedIn(){
  $CI = get_instance();
  $CI->load->library('session');

  if($CI->session->userdata('admin_id')){
    return TRUE;
  } else{
    return FALSE;
  }
}
