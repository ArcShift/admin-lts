<?php

class Beranda extends CI_Controller {

  public function index() {
    $this->load->view('container', array('content' => 'beranda_view'));
  }

}
