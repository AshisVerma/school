<?php
 class Fee_Model extends CI_Model{

 	public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }


        public function add($data){
        	$insert_data=array(
              "fee_name"=>$data['fee_name'],
              "fee_code"=>$data['fee_code'],
              "description"=>$data['desc'],



        	);

        	$check=$this->db->insert("fee_type",$insert_data);
        	if($check){
        		return true;
        	}
        	else{
        		return false;
        	}
        }


        function list(){
        	$query=$this->db->get("fee_type");
        	$data=$query->result_array();
        	return $data;
        }




        function getEditData($id){
        	$query=$this->db->get_where("fee_type",['id'=>$id]);
        	$data=$query->result_array();
        	return $data;
        }


        public function update($data){
        	$this->db->where("id",$_POST['id']);
        	$check=$this->db->update("fee_type",$data);
        	if($check){
        		return true;
        	}
        	else{
        		return false;
        	}

        }


        public function delete($id){
        	$delete=$this->db->delete('fee_type', array('id' => $id)); 
        	if($delete){
        		return true;
        	}
        	else{
        		return false;
        	}
        }
 }


?>