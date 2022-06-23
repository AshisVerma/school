<?php
class FeeType extends CI_Controller{

	function __construct(){
		parent::__construct();
		 $this->load->helper('url');
        $this->load->database();
        $this->load->model("Fee_Model");
        $this->load->library('session');
        $this->load->library('form_validation');

	}
	public function index(){
		$this->load->view("admin/pages/feetype/add");
		
	}

	public function create(){
		$this->form_validation->set_rules("fee_name","fee-type","trim|required",array("required"=>"Fee name can`t be empty"));
		$this->form_validation->set_rules("fee_code","fee code","trim|required",array("required"=>"Fee code can`t be empty"));
		$this->form_validation->set_rules("desc","desc","trim|required",array("required"=>"Fee description can`t be empty"));

		if($this->form_validation->run()==false){
		$this->load->view("admin/pages/feetype/add");
		}
		else{
			$data=$_POST;
			$check=$this->Fee_Model->add($data);
			if($data){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Fee Type Created Succesfully</div>');
               redirect('feetype/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('feetype/');
		}


		}

	}


	public function list(){
		$data=$this->Fee_Model->list();
		if(isset($data)){
			$this->load->view("admin/pages/feetype/list",['data'=>$data]);
		}

	}


	public function edit($id){
		$id=base64_decode($id);
		$data=$this->Fee_Model->getEditData($id);
		$this->load->view("admin/pages/feetype/edit",['data'=>$data]);

	}

	public function update(){
		$this->form_validation->set_rules("fee_name","fee-type","trim|required",array("required"=>"Fee name can`t be empty"));
		$this->form_validation->set_rules("fee_code","fee code","trim|required",array("required"=>"Fee code can`t be empty"));
		$this->form_validation->set_rules("desc","desc","trim|required",array("required"=>"Fee description can`t be empty"));

		if($this->form_validation->run()==false){

		}
		else{
			$data=$_POST;
			$update_data=['fee_name'=>$data['fee_name'],'fee_code'=>$data['fee_code'],'description'=>$data['desc']];
			$update=$this->Fee_Model->update($update_data);
			if($data){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Fee Type Updated Succesfully</div>');
               redirect('feetype/list');
		    }
		   else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('feetype/update');
		   }
		
		}
	}


	public function delete($id){
		$check=$this->Fee_Model->delete($id);
		if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Fee Type Deleted Succesfully</div>');
               redirect('feetype/list');
		    }
		   else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('feetype/list');
		   }
		
	}
}


?>