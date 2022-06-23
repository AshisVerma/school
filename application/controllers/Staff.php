<?php
class Staff extends CI_Controller{
	 function __construct(){
    	parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model("Staff_Model");
        $this->load->library('session');
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
        
    }
	public function index(){

		$this->load->view("admin/pages/staff/add");


	}

	public function add_staff_data(){
	 
		$this->form_validation->set_rules('name',"Name","trim|required",array("required"=>"Name can`t be empty"));
	

		$this->form_validation->set_rules('surname',"Surname","trim|required",array("required"=>"Surname can`t be empty"));
		$this->form_validation->set_rules('fname',"Father","trim|required",array("required"=>"Father name can`t be empty"));
		$this->form_validation->set_rules('mname',"Mother","trim|required",array("required"=>"Mother name can`t be empty"));
		$this->form_validation->set_rules('contact-number',"contact-number","trim|required",array("required"=>"Contact number can`t be empty"));
		$this->form_validation->set_rules('emg-contact-no',"emg-contact-no","trim|required",array("required"=>"Emergency number can`t be empty"));
		$this->form_validation->set_rules('dob',"dob","trim|required",array("required"=>"Date of Birth can`t be empty"));
		$this->form_validation->set_rules('email',"email","trim|required|valid_email",array("required"=>"Email can`t be empty","valid_email"=>"Email Format is wrong"));
		$this->form_validation->set_rules('email',"email","trim|required|valid_email",array("required"=>"Email can`t be empty","valid_email"=>"Email Format is wrong"));
		

		
		$this->form_validation->set_rules('date-join',"date-join","trim|required",array("required"=>"Date of Joining"));
		$this->form_validation->set_rules('date-of-leave',"date-of-leave","trim|required",array("required"=>"Date of Leaving"));
		$this->form_validation->set_rules('account-title',"account-title","trim|required",array("required"=>"Account Title can`t be empty"));

          $this->form_validation->set_rules('account-title',"account-title","trim|required",array("required"=>"Account Title can`t be empty"));
          $this->form_validation->set_rules('account-title',"account-title","trim|required",array("required"=>"Account Title can`t be empty"));

        $this->form_validation->set_rules('bank-account-no',"account-title","trim|required",array("required"=>"Bank Account Number can`t be empty"));
        $this->form_validation->set_rules('ifsc-code',"ifsc-code","trim|required",array("required"=>"IFSC Code  can`t be empty"));
        $this->form_validation->set_rules('bank-branch-name',"bank-branch-name","trim|required",array("required"=>"Bank Branch Name  can`t be empty"));
         $this->form_validation->set_rules('epf-no',"epf-no","trim|required",array("required"=>"EPF Number  can`t be empty"));

           $this->form_validation->set_rules('contract-type',"contract-type","trim|required",array("required"=>"Contract Type  can`t be empty"));
           $this->form_validation->set_rules('shift',"shift","trim|required",array("required"=>"Shift can`t be empty"));
            $this->form_validation->set_rules('location',"location","trim|required",array("required"=>"Location can`t be empty"));

          
            $this->form_validation->set_rules('qualification',"qualification","trim|required",array("required"=>"Qualification can`t be empty"));
            $this->form_validation->set_rules('work-exp',"work-exp","trim|required",array("required"=>"Work Experience can`t be empty"));
             $this->form_validation->set_rules('address',"address","trim|required",array("required"=>"Local Address can`t be empty"));
               $this->form_validation->set_rules('address',"address","trim|required",array("required"=>"Local Address can`t be empty"));
                $this->form_validation->set_rules('permanent-address',"permanent-addres","trim|required",array("required"=>"Permanent Address can`t be empty"));
                $this->form_validation->set_rules('gender', 'gender', 'required');
                $this->form_validation->set_rules('martial_status', 'martial_status', 'required');

                if(empty($_FILES['resume']['name'])){
                	 $this->form_validation->set_rules('resume',"resume","trim|required",array("required"=>"Select Resume"));
                }

                if(empty($_FILES['photo']['name'])){
                	 $this->form_validation->set_rules('photo',"photo","trim|required",array("required"=>"Select Photo"));
                }
 
		
		
		

		if($this->form_validation->run()==false){
			
			$this->load->view("admin/pages/staff/add");

		}
		else{
			$data['input_data']=$_POST;
			$data['resume']=$_FILES['resume'];
			$data['photo']=$_FILES['photo'];
			$check=$this->Staff_Model->addStaff($data);
			if($check){
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><i class="fas fa-close close" data-dismiss="alert"></i> Staff Register Successfully</div>');
              redirect(site_url()."/Staff/list");
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-warning"><i class="fas fa-close close" data-dismiss="alert"></i> Whoops! something is wrong try again </div>');
            $this->load->view("admin/pages/staff/add");
		}


			
		}

			


	}

	 public function select_marital_status()
    {
            if ($this->input->post('gender') === 'Select Gender')  {
            $this->form_validation->set_message('gender', 'Choose Gender.');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }


	public function list(){
		$data=$this->Staff_Model->Staff_List();
		
		
		$this->load->view("admin/pages/staff/list",['data'=>$data]);
	}


	public function search(){
		$search=$this->input->post("search-staff");
		$this->load->view("admin/pages/staff/list",$search);
	}


	public function zoom_live(){
		$curl = curl_init();

   curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.zoom.us/v2/users//meetings",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"topic\":\"string\",\"type\":\"integer\",\"start_time\":\"string [date-time]\",\"duration\":\"integer\",\"timezone\":\"string\",\"password\":\"string\",\"agenda\":\"string\",\"recurrence\":{\"type\":\"integer\",\"repeat_interval\":\"integer\",\"weekly_days\":\"string\",\"monthly_day\":\"integer\",\"monthly_week\":\"integer\",\"monthly_week_day\":\"integer\",\"end_times\":\"integer\",\"end_date_time\":\"string [date-time]\"},\"settings\":{\"host_video\":\"boolean\",\"participant_video\":\"boolean\",\"cn_meeting\":\"boolean\",\"in_meeting\":\"boolean\",\"join_before_host\":\"boolean\",\"mute_upon_entry\":\"boolean\",\"watermark\":\"boolean\",\"use_pmi\":\"boolean\",\"approval_type\":\"integer\",\"registration_type\":\"integer\",\"audio\":\"string\",\"auto_recording\":\"string\",\"enforce_login\":\"boolean\",\"enforce_login_domains\":\"string\",\"alternative_hosts\":\"string\",\"global_dial_in_countries\":[\"string\"],\"registrants_email_notification\":\"boolean\"}}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer g9o8vEE4wX_AoePQ40lQ5aEkQU-L4BB6A",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
	}
}

?>