<?php defined('BASEPATH')OR exit('tidak ada akses pada menu ini');
/**
 * 
 */
 class M_pengajuan extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function tambahPengajuan($dataPengajuan)
 	{
 		$result = $this->db->insert('keberatan', $dataPengajuan);
 		if ($result) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 } ?>