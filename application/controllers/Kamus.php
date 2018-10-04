<?php

class Kamus extends CI_Controller {

  public function index() {
//    $this->load->model('kamus_Model');
//    $hasil = $this->kamus_Model->cari('kami');
    $this->load->view('container', array('content' => 'cari_kata'));
  }

  public function cari($kata) {
//    if (!$this->input->is_ajax_request()) {
//      redirect('404');
//    } else {
      $this->load->model('kamus_Model');
      
      $hasil = $this->kamus_Model->cari($kata);
//    $this->load->view('container', array('content' => 'cari_kata', 'words' => $hasil));
//      foreach ($hasil as $value) {
//	echo $value;
//      }
      echo json_encode($hasil);
    }
//  }

}
