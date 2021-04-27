<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='$u' AND pengguna_password=md5('$p')");
        return $hasil;
    }

}
