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

  public function getIdJawaban($id_paket, $idmhs){
    $result = $this->db->query('SELECT * FROM jawaban WHERE id_paket='.$id_paket.' AND id_karyawan='.$idmhs.'');
    return $result->row();
  }

  public function first($id_jawaban)
  {
    $result = $this->db->query("SELECT * FROM jawaban WHERE id_jawaban='$id_jawaban'");
    return $result->row();

  }

  public function hasilNilai($idmhs)
  {
    $result = $this->db->query("SELECT * FROM jawaban 
              INNER JOIN paket ON paket.id_paket=jawaban.id_paket
              WHERE id_karyawan='$idmhs'");
    return $result->result();
  }

  public function get_all()
  {
    $result = $this->db->query("SELECT * FROM $this->table
              INNER JOIN karyawan ON karyawan.id_karyawan=jawaban.id_karyawan
              INNER JOIN paket ON paket.id_paket=jawaban.id_paket
              ");
    return $result->result();
  }

  public function cetakNilai(){
    $result = $this->db->query("SELECT * FROM $this->table
              INNER JOIN karyawan ON karyawan.id_karyawan=jawaban.id_karyawan
              INNER JOIN paket ON paket.id_paket=jawaban.id_paket
              ");
    return $result->result();
  }
}