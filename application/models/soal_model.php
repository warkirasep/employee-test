<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal_model extends Ci_Model {

  public function Ambil($paket = '') {
    if(!empty($paket)){
      $data = $this->db->query('select * from soal where soal.status = "tampil" AND soal.paket = '.$paket.' order by RAND()');
    }else {
      $data = $this->db->query('select * from soal');
    }
    
    return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($soal,$data)
  {
    $this->db->where('id_soal',$soal);
    $this->db->update('soal',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function AmbilPaket2($kode = 0) {
    $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
    return $data[0]['paket'];
  } 

  public function AmbilJawaban($kode = 0) {
    $data = $this->db->query("select * from soal where id_soal = '$kode'")->result_array();
    return $data[0]['kunci'];
  }

  public function order_soal() {
    $data = $this->db->query('select * from soal order by id_soal asc');
    return $data;
  }

  public function edit($kode){
   $data = $this->db->query('select * from soal WHERE id_soal='.$kode.'');
    return $data->result_array;


  }
}