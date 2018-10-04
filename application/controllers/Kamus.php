<?php

class Kamus extends CI_Controller {

  public function index() {
    $this->load->view('container', array('content' => 'cari_kata'));
  }

  public function cari($kata= null) {
    if (!$this->input->is_ajax_request()||!isset($kata)) {
      redirect('404');
    } else {
      $this->load->model('kamus_Model');
      $hasil = $this->kamus_Model->cari($kata);
      echo json_encode($hasil);
    }
  }

}
