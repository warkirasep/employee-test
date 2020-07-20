<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('user_model');
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
			'peserta' => $this->user_model->Ambil('order by id_user desc')->result_array(),
		);
		$this->load->view('user/index', $data);
	}

	public function create(){
		$this->ceklogin();
		 $data=array(
            'data_barang'=>$this->user_model->manualQuery("SELECT * from karyawan ")->result(),
        );

		$this->load->view('user/create', $data);
	}

	function get_detail_barang(){
		$this->ceklogin();
		$id=$this->input->post('nis');
		$data=array(
			'detail_barang'=>$this->user_model->getBarangById($id),
			);
		$this->load->view('ajax_peserta',$data);
	}

	 public function insert(){
    	$this->ceklogin();
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$level = $_POST['level'];

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'username' => $username,
			'pass' => $pass,
			'level' => $level,
			
			);

		$hasil = $this->user_model->Simpan('user', $data);

		if($hasil>=1){
			redirect('user');
		}
	}

	public function edit($kode = 0){
		$this->ceklogin();
		$data_soal = $this->user_model->Ambil("where id_user = '$kode'")->result_array();

		$data = array(
			'id_user' => $data_soal[0]['id_user'],
			'nis' => $data_soal[0]['nis'],
			'nama' => $data_soal[0]['nama'],
			'username' => $data_soal[0]['username'],
			'pass' => $data_soal[0]['pass'],
			'level' => $data_soal[0]['level'],
		);
		$this->load->view('user/edit', $data);
	}

	public function update(){
		$this->ceklogin();
		 $data = array(
		 	'id_user' => $this->input->post('id_user'),
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'pass' => $this->input->post('pass'), 
            'level' => $this->input->post('level'),
        );

        $this->user_model->Rubah($data);
        redirect('user');
	}

	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->user_model->Hapus('user',array('id_user' => $kode));
		if($hasil == 1){
			header('location:'.base_url().'user');
		}else{
			echo "maaf .. perintah yang anda masukan salah";
		}
	}
	public function cetakpes($kode = 0)
	{
		$this->ceklogin();
			$peserta = $this->user_model->Ambil("where id_user='$kode'")->result_array();
			
			$data = array(
			'id_user' => $peserta[0]['id_user'],
			'nis' => $peserta[0]['nis'],
			'nama' => $peserta[0]['nama'],
			'username' => $peserta[0]['username'],
			'pass' => $peserta[0]['pass'],
		);		
		$this->load->library('fpdf');	
		$this->load->view('user/cetakpes', $data);
	}

	public function logout(){
      $this->session->sess_destroy();
      session_start();
      session_destroy();
      header('location:'.base_url());
    }
}