<?php

class Menu extends CI_Controller {

    public function index() {
//        $this->load->view('menu');
    }
    function lists() {
        $this->load->view('rest/menu_list');
    }
}