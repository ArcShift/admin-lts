<?php

class Chat extends CI_Controller {

  public function index() {
    $this->load->view('container', array('content' => 'chat_view'));
  }
  public function send($message){
    if (!$this->input->is_ajax_request()||!isset($message)) {
      redirect('404');
    } else {
      $this->load->model('admin_lts_model');
      echo 'send';
//      $hasil = $this->kamus_Model->cari($kata);
//      echo json_encode($hasil);
    }
  }

}
