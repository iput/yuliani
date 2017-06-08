<?php defined('BASEPATH')OR exit('tidak ada akses menu ini'); 
/**
* 
*/
class M_user extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function tambahUser($dataUser)
	{
		$result = $this->db->insert('users', $dataUser);
		if ($result) {
			return true;
		}else{
			return false;
		}
	}
}?>