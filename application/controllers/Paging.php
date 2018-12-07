<?php

class Paging extends CI_Controller {

    public function index() {
	
    }

    public function page($page = null) {
	if ($page == null) {
	    redirect(site_url('paging/page/0'));
	}
	$this->load->library('pagination');
	$config['base_url'] = site_url('paging/page');
	$config['total_rows'] = 50;
	$config['per_page'] = 1;
	$config['full_tag_open'] = '<div class="paging">';
	$config['full_tag_close'] = '</div>';
	$this->pagination->initialize($config);
	$data['content'] = 'paging_view';
	$data['paging_link'] = $this->pagination->create_links();
	$this->load->view('container', $data);
    }

}
