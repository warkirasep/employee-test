<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model('soal_model');
	}
	
	function ceklogin(){
		if(!$this->session->userdata('isLogin')){
			header('location:'.base_url().'login');
			exit(0);
		}
	}

	public function index()
	{
		$this->ceklogin();
		$data = array(
			'soal'=>$this->soal_model->order_soal()->result_array(),			
		);  

		$this->load->view('soal/index', $data);
	}

	public function create()
	{
		$this->load->model('paket_model');
		$this->ceklogin();
		$data = array(
			'paket' => $this->paket_model->Ambil()->result_array(),
		);

		$this->load->view('soal/create', $data);
	}

	

	public function insert(){
		
		$config =array(
			'upload_path' => './images',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('file_upload');
			$upload_data = $this->upload->data();
		$this->ceklogin();
		$paket = $_POST['paket'];
		$soal = $_POST['soal'];
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$kunci = $_POST['kunci'];
		$status = $_POST['status'];
		$file_name = $upload_data['file_name'];

		$data = array(
			'paket' => $paket,
			'soal' => $soal,
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'd' => $d,
			'e' => $e,
			'kunci' => $kunci,
			'status' => $status,
		);

		$hasil = $this->soal_model->Simpan('soal', $data);

		if($hasil>=1){
			redirect('soal');
		}
	}

	public function edit($kode = 0){
		$this->ceklogin();
		$data_soal = $this->soal_model->Ambil("where id_soal = '$kode'")->result_array();
		$this->load->model('paket_model');

		$data = array(
			'paket' => $this->paket_model->Ambil()->result_array(),
			'id_soal' => $data_soal[0]['id_soal'],
			'soal' => $data_soal[0]['soal'],
			'a' => $data_soal[0]['a'],
			'b' => $data_soal[0]['b'],
			'c' => $data_soal[0]['c'],
			'd' => $data_soal[0]['d'],
			'e' => $data_soal[0]['e'],
			'kunci' => $data_soal[0]['kunci'],
			'status' => $data_soal[0]['status'],
		);
		$this->load->view('soal/edit', $data);
	}

	public function update(){
		$this->ceklogin();
		$soal = $this->input->post('id_soal');
		$data = array(
		 	'id_soal' => $this->input->post('id_soal'),
            'paket' => $this->input->post('paket'),
            'soal' => $this->input->post('soal'),
            'a' => $this->input->post('a'),
            'b' => $this->input->post('b'),
          	'c' => $this->input->post('c'),
            'd' => $this->input->post('d'),
            'e' => $this->input->post('e'),
            'kunci' => $this->input->post('kunci'),
            'status' => $this->input->post('status'),
        );

        $this->soal_model->Rubah($soal, $data);
        redirect('soal');
	}

	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->soal_model->Hapus('soal',array('id_soal' => $kode));
		if($hasil == 1){
			redirect('soal');
		}else{
			echo "mohon periksa kembali";
		}
	}
}