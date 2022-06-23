<?php
class Staff_Model extends CI_Model{

	public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }


        function addStaff($data){

            $photo=$data['photo'];
            $resume=$data['resume'];
            $photo_name=rand(1,99).time().".png";
            $resume_name=rand(1,99).time().".pdf";
        	$insert_data=array(
        		"name"=>$data['input_data']['name'],
                "surname"=>$data['input_data']['surname'],
        		"fname"=>$data['input_data']['fname'],
        		"mname"=>$data['input_data']['mname'],
        		"contact_no"=>$data['input_data']['contact-number'],
        		"emg_contact_no"=>$data['input_data']['emg-contact-no'],
                "dob"=>date("Y-m-d",strtotime($data['input_data']['dob'])),
                "email"=>$data['input_data']['email'],
                "marital_status"=>$data['input_data']['marital_status'],
                "gender"=>$data['input_data']['gender'],
                "date_of_joining"=>date("Y-m-d",strtotime($data['input_data']['date-join'])),
                "date_of_leaving"=>date("Y-m-d",strtotime($data['input_data']['date-of-leave'])),
                "account_title"=>$data['input_data']['account-title'],
                "bank_account_no"=>$data['input_data']['bank-account-no'],
                "ifsc_code"=>$data['input_data']['ifsc-code'],
                "bank_branch"=>$data['input_data']['bank-branch-name'],
                "epf_no"=>$data['input_data']['epf-no'],
                "contract_type"=>$data['input_data']['contract-type'],
                "shift"=>$data['input_data']['shift'],
                "location"=>$data['input_data']['location'],
                "photo"=>$photo_name,
                "resume"=>$resume_name,
                "qualification"=>$data['input_data']['qualification'],
                "work_exp"=>$data['input_data']['work-exp'],
                "local_address"=>$data['input_data']['address'],
                "permanent_add"=>$data['input_data']['permanent-address'],
                "status"=>0,




        	);

            $check=$this->db->insert("staff",$insert_data);
            if($check){

                if(move_uploaded_file($photo['tmp_name'], "./public/staff/images/".$photo_name) && move_uploaded_file($resume['tmp_name'], "./public/staff/resume/".$resume_name)){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }


        function Staff_List(){
            $query = $this->db->get('staff');
            $result = $query->result_array();
            return $result;
        }
}



?>