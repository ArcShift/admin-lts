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
                $uploadData = $data['file'] = $this->upload->data();
//                print_r($uploadData);
                $zip = new ZipArchive();
                if ($zip->open($uploadData['full_path']) === TRUE) {
                    if ($zip->extractTo($uploadData['file_path'] . 'extract')) {
                        $tidyUrl = "D:\\xampp\\htdocs\\admin-lte\\asset\\exe\\tidy.exe";
                        $shell = $tidyUrl . ' -o "' . $uploadData['file_path'] . 'extract/tidy.xml' . '" -xml -asxml --indent auto --indent-spaces 2 "' . $uploadData['file_path'] . 'extract/word/document.xml"';
                        $data['status_text'] = shell_exec($shell);
                        $data['status_text'] = $shell;
                    }
//                    unlink($uploadData['full_path']);
//                    $zip->extractTo(base_url("asset/document/"));
                } else {
                    $data['status_text'] = 'zip failed';
                }
                $zip->close();
//                
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
        $source = 'D:\xampp\htdocs\admin-lte\asset\document\BERKAS_REKAP_NAIK_JABATAN_Kab__Sampang_18112017.docx';
//        echo date('H:i:s'), " Reading contents from `{$source}`", PHP_EOL;
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
//        $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
//        print_r($phpWord);
//        $inputFileType = \PhpOffice\PhpWord\PHPWord_IOFactory::identify($source);
//        echo
        $phpWordReader = \PhpOffice\PhpWord\IOFactory::createReader();
// read source
        if ($phpWordReader->canRead($source)) {
            $phpWord = $phpWordReader->load($source);
            $section = $phpWord->getSection(0);
            $element = $section->getElement(0);
            print_r($phpWord);
            $element = array_values((array) $element);
//            print_r($element[2][0]);
//            foreach ($element as $value) {
//                echo '<br/>================<br/>';
//                print_r($value);
//            }
//        if ($phpWordReader->canRead($source)) {
//            $phpWord = $phpWordReader->load($source);
//            $sections = $phpWord->getSections();
//            foreach ($sections as $section) {
//                $elements = $section->getElements();
//                foreach ($elements as $element) {
//                    echo '<br/>================<br/>';
//                    print_r($element);
//                }
//            }
//            $phpWord=(array)$phpWord;
//            $phpWord= array_values($phpWord);
//            $phpWord=$phpWord[0][0];
//            $phpWord=(array)$phpWord;
//            
//                echo '<br/>================<br/>';
//            print_r($phpWord->sections);
//            echo sizeof($arrWord);
//            print_r($arrWord['PhpOffice\\PhpWord\\PhpWordsections']);
//            foreach ($phpWord as $value) {
//                echo '<br/>================<br/>';
//                foreach ($value as $value2) {
//                echo '<br/>================++++++=<br/>';
//                print_r($value);
//                    
//                }
//                
//            }
        }
    }

    public function readxml() {
        $reader = new XMLReader();
        if (!$reader->open(base_url("/asset/document/ABCDEF.docx"))) {
            die("Failed to open 'data.xml'");
        }
        while ($reader->read()) {
            $node = $reader->expand();
            // process $node...
        }
        $reader->close();
    }

    public function read2() {
        $this->load->view('container', array('content' => 'wordjs'));
    }

    public function read3() {
        $url = base_url("asset/document/extract/tidy.xml");
//        $url = "D:\\xampp\\htdocs\\admin-lte\\asset\\document\\extract\\word\\settings.xml";
        $br = '<br/>';
        echo $url . $br;
//        if($xml=simplexml_load_file($url)){
//            print_r($xml);
//        }else{
//            echo 'load gagal'.$br;
//        }
//        $xml= new SimpleXMLElement($url,0,TRUE);
//        $xml= simplexml_load_string(file_get_contents($url));
//        print_r($xml);
        $strData = file_get_contents($url);
        $arrData = explode("PENETAPAN ANGKA KREDIT JABATAN FUNGSIONAL GURU", $strData);
//        echo $arrData[1];
        $arrDelimiter = array("Nomor :", "Masa Penilaian");
        foreach ($arrData as $page) {
            echo $br . '===============' . $br;
            if (strpos($page, "KEPALA DINAS PENDIDIKAN") !== FALSE) {
                foreach ($arrDelimiter as $value) {
                    $begin = strpos($page, $value);
                    $end = strpos($page, "</", $begin);
//                    echo 'strpos= '.$begin.' - '.($end-$begin).$br;
                    echo substr($page, $begin, $end - $begin) . $br;
                }
            } else {
                echo 'no data';
            }
        }
    }

    public function read4() {
        $br = '<br/>';
        $doc = new DOMDocument();
        $url = base_url("asset/document/extract/tidy.xml");
        $doc->load($url);
        $arrData = explode("PENETAPAN ANGKA KREDIT JABATAN FUNGSIONAL GURU", $doc->textContent);
        echo $arrData[1];
        $arrDelimiter = array(
            array("delimiter" => "Nomor :", "key" => "Nomor"),
            array("delimiter" => "Masa Penilaian :", "key" => "Masa Penilaian"),
            array("delimiter" => "I KETERANGAN PERSEORANGAN 1. Nama", "key" => "Nama"),
            array("delimiter" => "2. NIP", "key" => "NIP"),
            array("delimiter" => "3. Tempat dan Tanggal Lahir", "key" => "Tempat, Tgl Lahir"),
            array("delimiter" => "4. Jenis Kelamin", "key" => "Jenis Kelamin"),
            array("delimiter" => "5. Pendidikan yang telah diperhitungkan angka kreditnya", "key" => "Pendidikan"),
            array("delimiter" => "6. Pangkat / Golongan Ruang, TMT", "key" => "Pangkat / Golongan Ruang, TMT"),
            array("delimiter" => "7. Jabatan, TMT", "key" => "Jabatan, TMT"),
            array("delimiter" => '8. Masa Kerja Golongan Lama MERGEFIELD "THN_MK_LAMA"', "key" => "Masa kerja golongan lama"),
            array("delimiter" => " Baru", "key" => "Masa kerja golongan baru"),
            array("delimiter" => "9. Jenis Guru", "key" => "Jenis Guru"),
            array("delimiter" => "10. Tugas Mengajar", "key" => "Tugas Mengajar"),
            array("delimiter" => "11. Unit Kerja", "key" => "Unit Kerja"),
            array("delimiter" => "II PENETAPAN ANGKA KREDIT LAMA BARU JUMLAH 1. Unsur Utama a. Pendidikan 1). Pendidikan Sekolah", "key" => "Kredit Pendikan sekolah"),
            array("delimiter" => "2). Pelatihan Prajabatan", "key" => "Kredit Pelatihan Jabatan"),
            array("delimiter" => "b. Pembelajaran / bimbingan dan tugas tertentu 1). Proses pembelajaran", "key" => "Kredit Proses Pembelajaran"),
            array("delimiter" => "2). Proses bimbingan", "key" => "Kredit Proses Bimbingan"),
            array("delimiter" => "3). Tugas lainnya", "key" => "Kredit tugas lainnya"),
            array("delimiter" => "c. Pengembangan Keprofesian Berkelanjutan 1). Pengembangan diri", "key" => "Kredit Pengembangan diri"),
            array("delimiter" => "2). Publikasi ilmiah", "key" => "Kredit Publikasi Ilmiah"),
            array("delimiter" => "3). Karya inovatif", "key" => "Kredit Karya Inovatif"),
            array("delimiter" => "Jumlah unsur utama", "key" => " Jumlah unsur utama"),
            array("delimiter" => "2. Unsur Penunjang a. Ijazah yang tidak sesuai", "key" => "Kredit Ijazah yg tdk sesuai"),
            array("delimiter" => "b. Pendukung tugas guru", "key" => "Kredit tugas guru"),
            array("delimiter" => "c. Memperoleh penghargaan", "key" => "Kredit memperoleh penghargaan"),
            array("delimiter" => "Jumlah Unsur Utama dan Unsur Penunjang", "key" => "Jumlah Unsur Utama dan Unsur Penunjang"),
            array("delimiter" => "III Dapat dipertimbangkan untuk dinaikkan", "key" => "END OF LINE"),
//            array("delimiter" => "", "key" => ""),
        );
        foreach ($arrData as $page) {
            $page = preg_replace('/\s+/', ' ', $page); //remove excessive space
            echo $br . '===============' . $br;
            if (strpos($page, "KEPALA DINAS PENDIDIKAN PROVINSI JAWA TIMUR") !== FALSE) {
//                echo $page;
                for ($index = 0; $index < count($arrDelimiter) - 1; $index++) {
                    $begin = strpos($page, $arrDelimiter[$index]['delimiter']);
                    $end = strpos($page, $arrDelimiter[$index + 1]['delimiter'], $begin);
//                    echo 'strpos= '.$begin.' - '.($end-$begin).$br;
                    $val =substr($page, $begin, $end - $begin) . $br;
                    $val =substr($val, strlen($arrDelimiter[$index]['delimiter']));
                    $val = trim($val);
                    echo $arrDelimiter[$index]['key'].'='.$val;
                }
            } else {
                echo 'no data';
            }
        }
    }

}
