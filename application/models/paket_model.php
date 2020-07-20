<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_model extends Ci_Model {

  public function Ambil($where= "") {
      $data = $this->db->query('select * from paket '.$where);
      return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Lihat($paket,$data)
  {
    $this->db->where('id_paket',$paket);
    $this->db->update('paket',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function get_data()
  {
    $result = $this->db->query("SELECT id_paket, paket from paket");
    return $result->result();
  }

  public function first($id_paket)
  {
    $result = $this->db->query("SELECT * from paket WHERE id_paket='$id_paket'");
    return $result->row();
  }

}