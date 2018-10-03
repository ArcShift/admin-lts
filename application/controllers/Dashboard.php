<?php

class Dashboard extends CI_Controller {

  public function index() {
//    echo site_url();
//    echo '<br/>';
//    echo base_url();
    $this->load->view('admin-container');
  }

}
