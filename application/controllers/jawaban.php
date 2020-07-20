<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jawaban extends CI_Controller {

	function __construct()
	{
		parent::__construct();				
		$this->load->model([
			'jawaban_model',
			'paket_model',
			'karyawan_model',
			'jawaban_detail_model',
		]);
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
		$nilai = $this->jawaban_model->get_all();
		$data = array(
			'nilai'=> $nilai		
		);  

		$this->load->view('jawaban/index', $data);
	}	

	public function cetak()
	{
		$this->ceklogin();
		$nilai = $this->jawaban_model->cetakNilai();
		$data = array(
			'nilai'=> $nilai		
		);		
		$this->load->library('fpdf');	
		$this->load->view('jawaban/cetak', $data);
	}

	public function nilai()
	{
		$this->ceklogin();	
		$this->load->model('user_model');	
		$this->load->model('karyawan_model');	
		$user = $this->session->userdata('username');		
		$user = $this->user_model->userData($user);	

		$user2 = $this->session->userdata('username');	
        $nis = $this->user_model->AmbilNis($user2);
        $idMhs = $this->karyawan_model->AmbilIdMhs($nis);
		$nilai = $this->jawaban_model->hasilNilai($idMhs);
		$data = array(
			'nilai'=> $nilai,
			'user' =>$user,			
		);
		$this->load->view('jawaban/nilai', $data);
	}

	public function dnilai(){
		$id_jawaban = $this->uri->segment(3);
		$id_paket = $this->jawaban_model->first($id_jawaban);
		$paket = $this->paket_model->first($id_paket->id_paket);
		$nilai = $this->jawaban_detail_model->hasil_test($id_jawaban);
		$data = array(
			'nilai'=> $nilai,				
			'kode'=>$id_jawaban,
			'paket' => $paket				
		);
		$this->load->view('jawaban/dnilai', $data);
	}

	public function dnilai2($kode = 0){
		

		$data = array(
			'nilai'=>$this->modeladmin->AmbilDetailNilai($kode)->result_array(),				
			'kode'=>$kode,				
		);
		$this->load->view('jawaban/dnilai2', $data);
	}

	public function daftar(){

		redirect('jawaban/pilih_materi');

		/*
		$this->ceklogin();
		$this->load->model('user_model');
		$this->load->model('karyawan_model');

		$user = $this->session->userdata('username');
        $nis = $this->user_model->AmbilNis($user);
        $idMhs = $this->karyawan_model->AmbilIdMhs($nis);

		$data = array(			
			'id_karyawan' => $idMhs,
			'tgl_tes' =>date("Y-m-d"),			
		);

		$this->jawaban_model->Simpan('jawaban', $data);
		$id=mysql_insert_id();		

		redirect('jawaban/soal/'.$id);
		*/
	}

	public function soal(){
		$materi_id = $this->uri->segment(3);		
    	$this->ceklogin();    	
    	$this->load->model('soal_model');	

    	$soal = $this->soal_model->Ambil($materi_id);
        $data = array(
			"soal" => $soal->result_array(),
			"id_paket" => $materi_id
		);

        $this->load->view('jawaban/soal', $data);       
    }

    public function jawab(){
		$this->ceklogin();
		$nis = $this->session->userdata('nis');
		$idMhs = $this->karyawan_model->AmbilIdMhs($nis);
		$data_jawaban = [
			'id_karyawan' => $idMhs,
			'tgl_tes' => date('Y-m-d'),
			'id_paket' => $this->input->post('id_paket')
		];
		$result = $this->jawaban_model->insertJawaban($data_jawaban);
		$id_jawaban = $this->jawaban_model->getIdJawaban($this->input->post('id_paket'), $idMhs);
		$posts = $this->input->post('soal');
		$jawabans = $this->input->post('jawaban');
		foreach($posts as $key=>$soal){
			$data = [
				'id_soal' => $soal,
				'id_jawaban' => $id_jawaban->id_jawaban,
				'jawaban' => $jawabans[$key]

			];
			$this->jawaban_detail_model->insert_multiple($data);
			
		}
		redirect('jawaban/dnilai/'.$id_jawaban->id_jawaban);
		/*
        $this->ceklogin();   
        $this->load->model('soal_model');    
        $this->load->model('user_model');    
        $this->load->model('jawaban_detail_model');    
        $id_jawaban = $this->input->post('id_jawaban'); 
        
        $jawaban=$_POST["jawaban"];
		$id_soal=$_POST["soal"];
		$jumlah=$_POST['jumlah_soal'];

        for ($i=0;$i<$jumlah;$i++){   		

        	$nomor=$id_soal[$i];
        	$jawaban[$nomor];		    

			if($ku)
        	$data = array(
				'id_jawaban' => $id_jawaban,						
				'id_soal' => $nomor,						
				'id_paket' => $this->soal_model->AmbilPaket2($nomor),						
				'jawaban' => $jawaban[$nomor],						
				'kunci' =>$this->soal_model->AmbilJawaban($nomor),						
			);

			$this->jawaban_detail_model->Simpan('jawaban_detail', $data);
		}

        $sql = $this->jawaban_detail_model->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['id_paket']==1 OR $data['id_paket']==2){
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 1,						
					);
					$this->jawaban_detail_model->UpdateNilai($id_jawaban_detail, $data);
				}
			}
			else {
				$id_jawaban_detail = $data['id_jawaban_detail'];
				if($data['jawaban']==$data['kunci']){
					$data = array(
						'nilai' => 20,						
					);
					$this->jawaban_detail_model->UpdateNilai($id_jawaban_detail, $data);
				}
				else {
					$data = array(
						'nilai' => 0,						
					);
					$this->jawaban_detail_model->UpdateNilai($id_jawaban_detail, $data);
				}

			}
		}
     	     			
	    $benar=0;
		$salah=0;
		$total_nilai=0;
	
		$sql = $this->jawaban_detail_model->AmbilHasilTes("where id_jawaban = $id_jawaban ");			
		$jumlah= $sql->num_rows();

		foreach($sql->result_array() as $data) {
			if($data['jawaban']==$data['kunci']){
				$benar++;
			}
			else {
				$salah++;
			}
			$total_nilai += $data['nilai'];
		}		

		$data = array(
		 	'benar' => $benar,
            'salah' => $salah,
            'total_nilai' => $total_nilai,
    	);		
	
		$this->jawaban_model->UpdateTotalNilai($id_jawaban, $data);

		$data2 = array(
		 	'status' => 2,            
    	);		

    	$username = $this->session->userdata('username');

		$this->user_model->UpdateStatusUser($username, $data2);

		$this->session->sess_destroy();
		redirect('jawaban/dnilai/'.$id_jawaban);
		*/
    }

    	public function delete($kode = 0){
		$this->ceklogin();
		$hasil = $this->jawaban_model->Hapus('jawaban',array('id_jawaban' => $kode));
		if($hasil == 1){
			redirect('jawaban');
		}else{
			echo "ada yang salah broo";
		}
	}

	public function pilih_materi()
	{

		$data['materi'] = $this->paket_model->get_data();
		$this->load->view('siswa/materi', $data);
	}

	public function test()
	{
		$this->ceklogin();
		$this->load->model('user_model');
		$this->load->model('karyawan_model');
		$id_paket = $this->input->get('materi_id');
		$user = $this->session->userdata('username');
        $nis = $this->user_model->AmbilNis($user);
		$idMhs = $this->karyawan_model->AmbilIdMhs($nis);
		$cek_test = $this->jawaban_model->cek_test($id_paket, $idMhs);
		if(!empty($cek_test)){
			$flash_msg = "Anda Sudah Test !!!";
			$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
			$this->session->set_flashdata('item', $value);
			$data['materi'] = $this->paket_model->get_data();
			$this->load->view('siswa/materi', $data);
		}else {
			redirect('jawaban/soal/'.$id_paket);
		}
	}
}