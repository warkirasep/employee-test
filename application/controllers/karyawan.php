<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class karyawan extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('karyawan_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index(){
		$this->ceklogin();
		$data = array(
			'kry' => $this->karyawan_model->Ambil('order by id_karyawan desc')->result_array(),
		);
		$this->load->view('karyawan/index', $data);
	}	

	public function create(){
		$this->ceklogin();
		$this->load->view('karyawan/create');
	}

	public function insert(){
		$this->ceklogin();
		$id_karyawan = '';
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		
		$data = array(
			'id_karyawan' => $id_karyawan,
			'nip' => $nip,
			'nama' => $nama,
			'jk' => $jk,			
			);

		$hasil = $this->karyawan_model->Simpan('karyawan', $data);

		if($hasil>=1){
			redirect('karyawan');
		}
	}

	public function cetak($kode = 0)
	{
		$this->ceklogin();
			$mhs = $this->karyawan_model->Ambil("where id_karyawan='$kode'")->result_array();
			
			$data = array(
			'id_karyawan' => $mhs[0]['id_karyawan'],
			'nip' => $mhs[0]['nip'],
			'nama' => $mhs[0]['nama'],
			'jk' => $mhs[0]['jk'],
		);		
		$this->load->library('fpdf');	
		$this->load->view('karyawan/cetak', $data);
	}

	public function lihat($kode = 0){
		$this->ceklogin();
		$data_soal = $this->karyawan_model->Ambil("where id_karyawan = '$kode'")->result_array();

		$data = array(
			'id_karyawan' => $data_soal[0]['id_karyawan'],
			'nip' => $data_soal[0]['nip'],
			'nama' => $data_soal[0]['nama'],
			'jk' => $data_soal[0]['jk'],
		);
		$this->load->view('karyawan/lihat', $data);
	}

	public function edit($kode = 0){
		$this->ceklogin();
		$data_soal = $this->karyawan_model->Ambil("where id_karyawan = '$kode'")->result_array();

		$data = array(
			'id_karyawan' => $data_soal[0]['id_karyawan'],
			'nip' => $data_soal[0]['nip'],
			'nama' => $data_soal[0]['nama'],
			'jk' => $data_soal[0]['jk'],
		);
		$this->load->view('karyawan/edit', $data);
	}

	public function update(){
		$this->ceklogin();
		 $data = array(
		 	'id_karyawan' => $this->input->post('id_karyawan'),
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),

        );

      	$this->karyawan_model->Rubah($data);
      	if($res>=1){
      		header('location:'.base_url().'karyawan/karyawan/edit/1');
      	}else{
      		header('location:'.base_url().'karyawan/karyawan/edit/0');
      	
      }		
	}

	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->karyawan_model->Hapus('karyawan',array('id_karyawan' => $kode));
		if($hasil == 1){
			redirect('karyawan');
		}else{
			echo "ada yang salah broo";
		}
	}
}