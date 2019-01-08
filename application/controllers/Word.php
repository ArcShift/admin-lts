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
//                        $tidyUrl = base_url('asset/exe/tidy.exe');
                        $shell = '"' . $tidyUrl . '" -o "' . $uploadData['file_path'] . 'extract/tidy.xml' . '" -xml -asxml --indent auto --indent-spaces 2 "' . $uploadData['file_path'] . 'extract/word/document.xml"';
                        $data['status_text'] = shell_exec($shell);
                        $data['status_text'] = $shell;
                    }
//                    $url=$uploadData['full_path'];
//                    unset($uploadData);
//                    unlink($url);//TODO: error
                    redirect(site_url("word/read"));
                } else {
                    $data['status_text'] = 'zip failed';
                }
                $zip->close();
            }
        }
        $this->load->view('container', array('content' => 'word', 'data' => $data));
    }

    public function read() {
        $br = '<br/>';
        $doc = new DOMDocument();
        $url = base_url("asset/document/extract/tidy.xml");
        $doc->load($url);
        $arrData = explode("PENETAPAN ANGKA KREDIT JABATAN FUNGSIONAL GURU", $doc->textContent);
//        echo $arrData[1];
        $arrDelimiter = array(
            array("delimiter" => "Nomor :", "key" => "nomor_surat"),
            
            array("delimiter" => "Masa Penilaian :", "key" => "masa_penilaian"),
            array("delimiter" => "I KETERANGAN PERSEORANGAN 1. Nama", "key" => "nama"),
            array("delimiter" => "2. NIP", "key" => "nip"),
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
            array("delimiter" => "II PENETAPAN ANGKA KREDIT LAMA BARU JUMLAH 1. Unsur Utama a. Pendidikan 1). Pendidikan Sekolah", "key" => "Kredit Pendidikan sekolah"),
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
            array("delimiter" => "Jumlah Unsur Utama dan Unsur Penunjang", "key" => "Jumlah Kredit Unsur Utama dan Unsur Penunjang"),
            array("delimiter" => "III Dapat dipertimbangkan untuk dinaikkan", "key" => ""),
            array("delimiter" => "Pada tanggal,", "key" => "tgl_surat"),
            array("delimiter" => " a.n. Kepala Dinas", "key" => ""),
//            array("delimiter" => "", "key" => ""),
//            array("delimiter" => "", "key" => ""),
        );
        foreach ($arrData as $page) {
            $page = preg_replace('/\s+/', ' ', $page); //remove excessive space
            echo $br . '===============' . $br;
            if (strpos($page, "KEPALA DINAS PENDIDIKAN PROVINSI JAWA TIMUR") !== FALSE) {
                $arrVal = array();
                for ($index = 0; $index < count($arrDelimiter); $index++) {
                    if ($arrDelimiter[$index]['key'] !== '') {
                        $begin = strpos($page, $arrDelimiter[$index]['delimiter']);
                        $end = strpos($page, $arrDelimiter[$index + 1]['delimiter'], $begin);
                        $val = substr($page, $begin, $end - $begin);
                        $val = substr($val, strlen($arrDelimiter[$index]['delimiter']));
                        $val = trim($val);
                        $arrVal[$arrDelimiter[$index]['key']] = $val;
//                        echo $arrDelimiter[$index]['key'] . '===' . $val . '===' . $br;
                    }
                }
                for ($index = 0; $index < count($arrDelimiter); $index++) {
                    if (strpos($arrDelimiter[$index]['key'], "Kredit") !== false) {
                        $kredit = explode(" ", $arrVal[$arrDelimiter[$index]['key']]);
                        $arrVal[$arrDelimiter[$index]['key']] = array(
                            "lama" => $kredit[0],
                            "baru" => $kredit[1],
                            "jumlah" => $kredit[2]
                        );
                    }
                }
                print_r($arrVal);
            } else {
                echo 'no data';
            }
        }
    }
    function to_pdf() {
        $source = 'D:\xampp\htdocs\admin-lte\asset\document\BERKAS_REKAP_NAIK_JABATAN_Kab__Sampang_18112017.docx';
//        $phpWord = new \PhpOffice\PhpWord\PhpWord();
//        $phpWordReader = \PhpOffice\PhpWord\IOFactory::createReader();
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
        print_r($phpWord);
//        if ($phpWordReader->canRead($source)) {
//            $phpWord = $phpWordReader->load($source);
//            print_r($phpWord);
//        }
    }
}
