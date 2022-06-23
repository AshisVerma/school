<?php
class Category extends CI_Controller{
    function __construct(){
    	parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model("categoryModel");
        $this->load->library('session');
        
    }

	public function view_category(){
		 $data=$this->categoryModel->AllCategoryList();
		 $this->load->view("admin/pages/category/list",['data'=>$data]);
	}


	public function add(){
		$this->load->view("admin/pages/category/add");
	}


	public function add_category_data(){
         
		$data['name']=$this->input->post("category_name");
		$data['slug']=$this->input->post("category_slug");
		$data['description']=$this->input->post("desc");
		$data['status']=1;
		$saveData=$this->categoryModel->addCategory($data);
		if($data){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fas fa-close close" data-dismiss="alert"></i> Category Created Succesfully</div>');
               redirect('category/add');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fas fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('category/add');
		}
		

	}

	function delete_category($id){

		 $check=$this->categoryModel->deleteCategory($id);

		 if($check){
		 	$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fas fa-close close" data-dismiss="alert"></i> Category Deleted Succesfully</div>');
               redirect('category/view_category');

		 }
		 else{
		 	$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fas fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
             redirect('category/view_category');

		 }
	}

	function status_change($id){
		$updateStatus=$this->categoryModel->updateStatus($id);
		print_r($updateStatus);
	}
}


?>