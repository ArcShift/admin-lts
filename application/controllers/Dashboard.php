<?php

class Dashboard extends CI_Controller {

  public function index() {
//    echo site_url();
//    echo '<br/>';
//    echo base_url();
//    $this->load->view('admin-container');
//    $content=$this->load->view('cari_kata');
  
    $this->load->view('container',array('content'=>'cari_kata'));
  }

}
