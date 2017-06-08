<?php defined('BASEPATH')OR exit('tidak ada akses dalam sistem');
/**
 * 
 */
 class M_permohonan extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function tambahPermohonan($data)
 	{
 		$result = $this->db->insert('permohonan_info', $data);
 		if ($result) {
 			return true;
 		}else{
 			return false;
 		}
 	}
 } ?>