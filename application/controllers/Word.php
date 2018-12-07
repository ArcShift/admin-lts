<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Word extends CI_Controller {

    public function index() {
        $data = null;
        if ($this->input->post('submit')) {
            $config['upload_path'] = './asset/document';
            $config['allowed_types'] = 'doc|docx';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('word')) {
                $data['status'] = 'ERROR';
                $data['status_text'] = $this->upload->display_errors();
            } else {
                $data['status'] = 'SUKSES';
                $data['status_text'] = 'File berhasil di upload';
                $data['file'] = $this->upload->data();
                $data['fileName'] = $this->upload->data()['file_name'];
                //TODO: save to database
//		$this->model->insert();
            }
//            die(print_r($this->input->post()));
//            $this->load->library("PhpWord");
        }
//        $phpWord = new \PhpOffice\PhpWord\PhpWord();
//        $phpWord->getCompatibility()->setOoxmlVersion(14);
//        $phpWord->getCompatibility()->setOoxmlVersion(15);
        $this->load->view('container', array('content' => 'word', 'data' => $data));
    }

    public function read() {
//        $source = base_url('asset/document/').'Test.docx';
        $source = 'D:\xampp\htdocs\admin-lte\asset\document\ABCDEF.docx';
        echo date('H:i:s'), " Reading contents from `{$source}`", PHP_EOL;
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
//        print_r($phpWord);
//        $inputFileType = \PhpOffice\PhpWord\PHPWord_IOFactory::identify($source);
//        echo
        $phpWordReader = \PhpOffice\PhpWord\IOFactory::createReader();
// read source
        if ($phpWordReader->canRead($source)) {
            $phpWord = $phpWordReader->load($source);
            $arrWord=(array)$phpWord;
            foreach ($arrWord as $value) {
                echo '<br/>================<br/>';
                print_r($value);
            }
        }
    }

}
