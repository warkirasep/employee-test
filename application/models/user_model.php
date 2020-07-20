<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends Ci_Model {

  public function takeUser($username, $pass) 
  { 
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('pass', $pass);
    $this->db->where('status', 1);
    //$this->db->where('level', $level);
    $query = $this->db->get();
    return $query->num_rows(); 
  }

  public function Ambil($where= "") {
    $data = $this->db->query('select * from user '.$where);
    return $data;
  }


  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($data)
  {
    $this->db->where('id_user',$data['id_user']);
    $this->db->update('user',$data);

  }

  public function Hapus($table,$where){
    return $this->db->delete($table,$where);
  }

  public function manualQuery($q)
  {
      return $this->db->query($q);
  }

  public function AmbilLevel($username = '') {
    $data = $this->db->query("select * from user where username = '$username'")->result_array();
    return $data[0]['level'];
  }

  public function AmbilNis($username = '') {
    $data = $this->db->query("select * from user where username = '$username'")->result_array();
    return $data[0]['nis'];
  }

  public function UpdateStatusUser($username,$data)
  {
    $this->db->where('username',$username);
    $this->db->update('user',$data);

  } 

  public function userData($username) 
  { 
    $this->db->select('username'); 
    $this->db->select('nama'); 
    $this->db->where('username', $username); 
    $query = $this->db->get('user'); 
    return $query->row(); 
  }

  public function getBarangById($id){
        $this->db->where('nip',$id);
        $query = $this->db->get('karyawan');
        return $query->result();
    }

    
}