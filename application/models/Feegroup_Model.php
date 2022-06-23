<?php
class Feegroup_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function add($data){

		$data=$this->db->insert("feegroup",$data);
		if($data){
			return true;
		}
		else{
			return false;
		}

	}

	function list(){
		$query=$this->db->get("feegroup");
		$data=$query->result_array();
		return $data;
	}


	function edit($id){
		
		$query=$this->db->get_where("feegroup",['id'=>$id]);
		$data=$query->result_array();
		return $data;
	}
}




?>