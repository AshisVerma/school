<?php
class categoryModel extends CI_Model {


	public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }


	function addCategory($data){
		
		$this->db->insert('category',$data);
		return true;

	}

	function AllCategoryList(){
		$query=$this->db->get("category");
		$data=$query->result_array();
		return $data;
	}


	public function deleteCategory($id){
		$id=base64_decode($id);
		$query=$this->db->delete("category",['id'=>$id]);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	function updateStatus($id){
		$id=base64_decode($id);
		$data=$this->db->get("category",['id'=>$id])->result_array();

		if($data[0]['status']==1){
			$update=$this->db->where("id",$id)->update("category",['status'=>0]);
			if($update){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			$update=$this->db->where("id",$id)->update("category",['status'=>1]);
			if($update){
				return true;
			}
			else{
				return false;
			}
		}
	}

	}

?>