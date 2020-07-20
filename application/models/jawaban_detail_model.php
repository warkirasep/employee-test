<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban_detail_model extends Ci_Model {  

	protected $table = 'jawaban_detail';

	public function Simpan($tabel, $data){
		$res = $this->db->insert($tabel, $data);
		return $res;
	}
	  
	public function AmbilHasilTes($where= "") {
		$data = $this->db->query('select * from jawaban_detail '.$where);
		return $data;
	}

	public function UpdateNilai($id_jawaban,$data)
	{
		$this->db->where('id_jawaban_detail',$id_jawaban);
		$this->db->update('jawaban_detail',$data);

	}

	public function insert_multiple($data){
		$res = $this->db->insert($this->table, $data);
		return $res;
	}

	public function hasil_test($id_jawaban)
	{
		$res = $this->db->query("SELECT * FROM $this->table 
				INNER JOIN soal ON jawaban_detail.id_soal=soal.id_soal
				WHERE id_jawaban='$id_jawaban'");
		return $res->result();
	}

	public function cekBenar($id_jawaban)
	{
		$result = $this->db->query("SELECT COUNT(*) as res FROM $this->table
					INNER JOIN soal ON jawaban_detail.id_soal=soal.id_soal
					WHERE jawaban_detail.id_jawaban='$id_jawaban'
					AND soal.kunci=jawaban_detail.jawaban");
		return $result->row();
	}

	public function cekSalah($id_jawaban)
	{
		$result = $this->db->query("SELECT COUNT(*) as res FROM $this->table
					INNER JOIN soal ON jawaban_detail.id_soal=soal.id_soal
					WHERE jawaban_detail.id_jawaban='$id_jawaban'
					AND soal.kunci<>jawaban_detail.jawaban");
		return $result->row();
	}

	public function hasilNilai($id_jawaban)
	{
		$result = $this->db->query("SELECT COUNT(*) as res FROM $this->table
					INNER JOIN soal ON jawaban_detail.id_soal=soal.id_soal
					WHERE jawaban_detail.id_jawaban='$id_jawaban'
					AND soal.kunci=jawaban_detail.jawaban");
		return $result->row();
	}
}