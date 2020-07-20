<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban_model extends Ci_Model {

  protected $table = 'jawaban';

  public function Ambil() {
    $data = $this->db->query('select * from jawaban, karyawan where jawaban.id_karyawan=karyawan.id_karyawan');
    return $data;
  }

  public function AmbilNilai2($idmhs) {
    $data = $this->db->query("select * from jawaban, karyawan where jawaban.id_karyawan=karyawan.id_karyawan AND jawaban.id_karyawan='$idmhs'");
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

  public function UpdateTotalNilai($id_jawaban,$data)
  {
    $this->db->where('id_jawaban',$id_jawaban);
    $this->db->update('jawaban',$data);

  }

  public function cek_test($id_paket, $id_mhs){
    $result = $this->db->query('SELECT * FROM jawaban WHERE id_paket='.$id_paket.' AND id_karyawan='.$id_mhs.'');
    return $result->result();
  }

  public function insertJawaban($data){
    $res = $this->db->insert($this->table, $data);
    return $res;
  }
}