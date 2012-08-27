<?php 
class Son_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function read(){
		$q = $this->db->get('son');
		if($q->num_rows()>0){
			foreach ($q->result() as $row){
				$data[] = $row;
			}
		}
		return $data;
	}
}



?>