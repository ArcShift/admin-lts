<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kamus_Model
 *
 * @author Jelajah Tekno Indone
 */
class Kamus_Model extends CI_Model {

  public function __construct() {
    parent:: __construct();
    $config['hostname'] = 'localhost';
    $config['username'] = 'root';
    $config['password'] = '';
    $config['database'] = 'kbbi';
    $config['dbdriver'] = 'mysqli';
    $config['dbprefix'] = '';
    $config['pconnect'] = FALSE;
    $config['db_debug'] = TRUE;
    $config['cache_on'] = FALSE;
    $config['cachedir'] = '';
    $config['char_set'] = 'utf8';
    $config['dbcollat'] = 'utf8_general_ci';
    $this->load->database($config);
  }

  public function cari($kata) {
//    $sql = "SELECT * FROM `kata` WHERE `id` LIKE '%?%';";//doesnt work
//    $query=$this->db->query($sql, array($this->db->escape($kata)));
    $this->db->like('id', $kata);
    $query = $this->db->get('Kata');
//    echo $this->db->last_query().'<br>';
    $daftar_kata = array();
    foreach ($query->result() as $hasil) {
//      echo $hasil->id;
      $baris= array();
      array_push($baris, $hasil->id);
      array_push($daftar_kata, $baris);
    }
    return $daftar_kata;
  }

}
