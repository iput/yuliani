<?php defined('BASEPATH')OR exit('tidak ada akses pada layanan ini');
/**
 * 
 */
 class Pengelola_ppid extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('pengelola/home')	;
 	}

 	public function info_publik()
 	{
 		$data['module']='info_publik';
 		$this->load->view('pengelola/home', $data);
 	}

 	public function tambah_infopub()
 	{
 		$data['module']='tambah_infopub';
 		$this->load->view('pengelola/home', $data);
 	}

 	public function permohonan_perorangan()
 	{
 		$data['module']='permohonan_personal';
 		$this->load->view('pengelola/home', $data);	
 	}

 	public function permohonan_badan()
 	{
 		$data['module']='permohonan_badan';
 		$this->load->view('pengelola/home', $data);	
 	}

 	public function pengajuan_keberatan()
 	{
 		$data['module']='pengajuan_keberatan';
 		$this->load->view('pengelola/home', $data);	
 	}

 	public function tambah_pengguna()
 	{
 		$data['module']='pengguna_baru';
 		$this->load->view('pengelola/home', $data);	
 	}
 } ?>