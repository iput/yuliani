<?php defined('BASEPATH')OR exit('Tidak ada akses diizinkan dalam link ini');
/**
 * 
 */
 class Landing extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_user');
 		$this->load->model('M_permohonan');
 		$this->load->model('M_pengajuan');
 	}

 	public function random($panjang) {
        $karakter = '1234567890';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }

 	public function index()
 	{
 		$this->load->view('landing');
 	}
 	public function latar_belakang()
 	{
 		$data['module']='latar_belakang';
 		$this->load->view('landing', $data);
 	}
 	 public function organisasi_ppid()
 	 {
 	 	$data['module']='organisasi_ppid';
 	 	$this->load->view('landing', $data);
 	 }

 	public function kedudukan()
 	{
 		$data['module']='Kedudukan_ppid';
 		$this->load->view('landing', $data);
 	}

 	public function tugas_fungsi()
 	{
 		$data['module']='tugas_fungsi';
 		$this->load->view('landing', $data);
 	}

 	public function setiap_saat()
 	{
 		$data['module']='setiap_saat';
 		$this->load->view('landing', $data);
 	}

 	public function berkala()
 	{
 		$data['module']='berkala';
 		$this->load->view('landing',$data);
 	}
 	public function serta_merta()
 	{
 		$data['module']='serta_merta';
 		$this->load->view('landing', $data);
 	}

 	public function dikecualikan()
 	{
 		$data['module']='dikecualikan';
 		$this->load->view('landing', $data);
 	}

 	public function get_informasi()
 	{
 		$data['module']='get_informasi';
 		$this->load->view('landing', $data);	
 	}

 	public function kirim_keberatan()
 	{
 		$data['module']='kirim_keberatan';
 		$this->load->view('landing', $data);
 	}

 	public function download_permohonan()
 	{
 		$data['module']='download_permohonan';
 		$this->load->view('landing', $data);	
 	}

 	public function permohonan_personal()
 	{
 		$data['module']='permohonan_personal';
 		$this->load->view('landing', $data);	
 	}
 	public function permohonan_kelompok()
 	{
 		$data['module']='permohonan_kelompok';
 		$this->load->view('landing', $data);	
 	}
 	public function download_keberatan()
 	{
 		$data['module']='download_keberatan';
 		$this->load->view('landing', $data);	
 	}
 	public function pengajuan_keberatan()
 	{
 		$data['module']='pengajuan_keberatan';
 		$this->load->view('landing', $data);	
 	}
 	public function kontak_kami()
 	{
 		$data['module']='kontak_kami';
 		$this->load->view('landing', $data);	
 	}


 	// ini fungsi untuk tambah data
 	public function tambahPermohonan()
 	{
 		$idUser = "USR".$this->random(3);
 		$idPemohon ="PEM".$this->random(3);
 		$data_user = array(
 			"ID_USER"=>$idUser,
 			"NAMA"=>$this->input->post('nama_pemohon'),
 			"ALAMAT"=>$this->input->post('alamat_pemohon'),
 			"EMAIL"=>$this->input->post('email_pemohon'),
 			"NOMOR_HP"=>$this->input->post('telp_pemohon'),
 			"NIK_BADAN"=>$this->input->post('nik_pemohon'),
 			"USERNAME"=>"NULL",
 			"PASSWORD"=>"NULL");
 		$tambah = $this->M_user->tambahUser($data_user);
 		if ($tambah) {
 			$data_pemohon = array(
 				"ID_INFO"=>$idPemohon,
 				"ID_USER"=>$idUser,
 				"KATEGORI"=>$this->input->post('kategori_pemohon'),
 				"INFO_YG_DIBUTUHKAN"=>$this->input->post('info_diinginkan_pemohon'),
 				"TUJUAN"=>$this->input->post('tujuan_pemohon'),
 				"CARA_PEROLEH_INFO"=>$this->input->post('cara_peroleh_pemohon'),
 				"CARA_PEROLEH_SALINAN_INFO"=>$this->input->post('cara_mengambil_pemohon'));
 			$dataInfo = $this->M_permohonan->tambahPermohonan($data_pemohon);
 			if ($dataInfo) {
 				$this->session->set_flashdata('sukses','data anda berhasil ditambahkan');
 				redirect('landing/permohonan_personal');
 			}
 		}
 	}

 	public function tambahPengajuan()
 	{
 		$idUser = "USR".$this->random(3);
 		$idpengajuan = "PNJ".$this->random(3);
 		$data_user = array(
 			"ID_USER"=>$idUser,
 			"NAMA"=>$this->input->post('nama_pengaju'),
 			"ALAMAT"=>$this->input->post('alamat_pengaju'),
 			"EMAIL"=>$this->input->post('email_pengaju'),
 			"NOMOR_HP"=>$this->input->post('telp_pengaju'),
 			"NIK_BADAN"=>$this->input->post('nik_pengaju'),
 			"USERNAME"=>"NULL",
 			"PASSWORD"=>"NULL");
 		$tambah = $this->M_user->tambahUser($data_user);
 		if ($tambah) {
 			$datapengaju = array(
 				"ID_KEBERATAN"=>$idpengajuan,
 				"ID_USER"=>$idUser,
 				"ALASAN"=>$this->input->post('alasan_pengaju'));

 			$hasilajuan = $this->M_pengajuan->tambahPengajuan($datapengaju);

 			if ($hasilajuan) {
 				$this->session->set_flashdata('sukses','pengajuan keberatan telah diterima');
 				redirect('landing/pengajuan_keberatan');
 			}
 		}
 	}
 } ?>