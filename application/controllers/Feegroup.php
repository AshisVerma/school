<?php
class Feegroup extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Feegroup_Model');

        
       
        $this->load->library('session');
	}


	public function index(){
		$this->load->view("admin/pages/feegroup/add");
	}

	public function create(){
		$this->form_validation->set_rules("fee_group","fee group","trim|required",array("required"=>"Fee group can`t be empty"));
		$this->form_validation->set_rules("desc","desc","trim|required",array("required"=>"Fee description can`t be empty"));

		if($this->form_validation->run()==false){
			$this->load->view("admin/pages/feegroup/add");
		}
		else{

			$data=array(
				"fee_group"=>$this->input->post("fee_group"),
				"description"=>$this->input->post("desc")
			);

			$check=$this->Feegroup_Model->add($data);
			if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fa fa-close close" data-dismiss="alert"></i> Fee Group Created Succesfully</div>');
               redirect('feegroup/');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fa fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('feegroup/');
		}


		}
	}

	public function list(){
		$data=$this->Feegroup_Model->list();
		if(isset($data)){
			$this->load->view("admin/pages/feegroup/list",['data'=>$data]);
		}
	}


	public function edit($id){
		$id=base64_decode($id);
		$data=$this->Feegroup_Model->edit($id);
		if(isset($data)){
			$this->load->view("admin/pages/feegroup/edit",['data'=>$data]);
		}

	}
}


?>