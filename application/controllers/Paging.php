<?php

class Paging extends CI_Controller {

    public function index() {
	
    }
    public function page($page=null) {
	$this->load->library('pagination');
	$config['base_url'] = site_url('paging/page');
	$config['total_rows'] = 50;
	$config['per_page'] = 1;
	$this->pagination->initialize($config);
	echo $page.'<br/>';
	echo $this->pagination->create_links();
    }
}
