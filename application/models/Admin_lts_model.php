<?php
class Admin_lts_model extends CI_Model{
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
  public function send($message){
    return 'send';
//    return 10 last message;
  }
}
