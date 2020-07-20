<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan_model extends Ci_Model {

  public function Ambil($where= "") {
      $data = $this->db->query('select * from karyawan '.$where);
      return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($data)
  {
    $this->db->where('id_karyawan',$data['id_karyawan']);
    $this->db->update('karyawan',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function AmbilIdMhs($nip = '') {
    $data = $this->db->query("select * from karyawan where nip = '$nip'")->result_array();
    return $data[0]['id_karyawan'];
  }
}