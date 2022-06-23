<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add Staff
            </h3>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary d-flex justify-content-between align-items-center">
          				<div class=""><h5 class="text-white p-0 m-0">Add New Staff</h5></div>
                  <div class="">
                    <a href="<?php echo site_url().'/Staff/list' ?>"><button class="btn btn-info">Staff List</button></a>
                  </div>

          			</div>
          			<div class="card-body">
          				<form action="<?php echo site_url('staff/add_staff_data');?>" method="POST"  enctype="multipart/form-data">
                    
                  
                  <?php echo form_open('form'); ?>
          					<div class="row">
          						<div class="col"><div class="form-group">
          						<label>Staff Name</label>
          						<input type="text" name="name" class="form-control shadow-none" placeholder="Name" value="<?=set_value('name')?>">
                      <div class="text-danger"><?php echo form_error('name') ?></div>
          					</div></div>
          						<div class="col"><div class="form-group">
          						<label>Surname</label>
          						<input type="text" name="surname" class="form-control shadow-none" placeholder="Surname" value="<?=set_value('surname')?>">
                     <div class="text-danger"> <?php echo form_error('surname') ?></div>
          					</div></div>
          					</div>
          					<div class="row">
                      <div class="col"><div class="form-group">
                      <label>Father Name</label>
                      <input type="text" name="fname" class="form-control shadow-none" placeholder="Father Name" value="<?=set_value('fname')?>">
                      <div class="text-danger"><?php echo form_error('fname') ?></div>
                    </div></div>
                      <div class="col"><div class="form-group">
                      <label>Mother Name</label>
                      <input type="text" name="mname" class="form-control shadow-none" placeholder="Mother name" value="<?=set_value('mname')?>">
                      <div class="text-danger"><?php echo form_error('mname') ?></div>
                    </div></div>
                    </div>
                    <div class="row">
                      <div class="col"><div class="form-group">
                      <label>Contact No</label>
                      <input type="text" name="contact-number" class="form-control shadow-none" placeholder="Contact No" value="<?=set_value('contact-number')?>">
                      <div class="text-danger"><?php echo form_error('contact-number') ?></div>
                    </div></div>
                    <div class="col">
                     <div class="form-group">
                      <label>Emergency Contact No</label>
                      <input type="text" name="emg-contact-no" class="form-control" placeholder="Emergency Contact No" value="<?=set_value('contact-number')?>">
                     <div class="text-danger"> <?php echo form_error('emg-contact-no') ?></div>
                    </div>
                    </div>
                     
                    </div>
                    <div class="row">
                      <div class="col"><div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" name="dob" class="form-control shadow-none" placeholder="Date of Birth" value="<?=set_value('dob')?>">
                     <div class="text-danger"> <?php echo form_error('dob') ?> </div>
                    </div>
                  </div>
                      <div class="col"><div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control shadow-none" placeholder="Email" value="<?=set_value('email')?>">
                     <div class="text-danger"> <?php echo form_error('email') ?></div>
                    </div>
                  </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Marital Status</label>
                      <select class="form-control shadow-none" name="marital_status">
                        <option>Select Marital Status</option>
                        <option value="1" >Yes</option>
                        <option value="0">No</option>
                      </select>
                      <div class="text-danger"> <?php echo form_error('marital_status') ?></div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Gender</label>
                      <select class="form-control shadow-none" name="gender">
                        <option>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                       <div class="text-danger"> <?php echo form_error('gender') ?></div>
                    </div></div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Date of Joining</label>
                      <input type="date" name="date-join" class="form-control shadow-none" value="<?=set_value('date-join')?>">
                     <div class="text-danger"> <?php echo form_error('date-join') ?></div>
                  </div>

                    </div>
                                          


                      <div class="col">
                        <div class="form-group">
                      <label>Date of Leaving</label>
                      <input type="date" name="date-of-leave" class="form-control shadow-none" value="<?=set_value('date-of-leave')?>">
                   <div class="text-danger"><?php echo form_error('date-of-leave') ?></div>
                    </div></div>
                  </div>

                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Account Title</label>
                      <input type="text" name="account-title" class="form-control shadow-none" placeholder="Account Title" value="<?=set_value('account-title')?>">
                      <div class="text-danger"><?php echo form_error('account-title') ?></div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Bank Account No</label>
                     
                       <input type="text" name="bank-account-no" class="form-control shadow-none" placeholder="Bank Account No" value="<?=set_value('bank-account-no')?>">
                      <div class="text-danger"> <?php echo form_error('bank-account-no') ?></div>
                    </div></div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Bank IFSC Code</label>
                      <input type="text" name="ifsc-code" class="form-control shadow-none" placeholder="Bank IFSC Code" value="<?=set_value('ifsc-code')?>">
                      <div class="text-danger">
                        <?php echo form_error('ifsc-code') ?>
                      </div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Bank Branch Name</label>
                     
                       <input type="text" name="bank-branch-name" class="form-control shadow-none" placeholder="Bank Branch Name" value="<?=set_value('bank-branch-name')?>">
                       <div class="text-danger"><?php echo form_error('bank-branch-name') ?></div>
                    </div></div>
                  </div>
               <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>EPF No</label>
                      <input type="text" name="epf-no" class="form-control shadow-none" placeholder="EPF No" value="<?=set_value('epf-no')?>">
                      <div class="text-danger"><?php echo form_error('epf-no') ?></div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Contract Type</label>
                     
                       <input type="text" name="contract-type" class="form-control shadow-none" placeholder="Contract Type" value="<?=set_value('contract-type')?>">
                       <div class="text-danger"><?php echo form_error('contract-type') ?></div>
                    </div></div>
                  </div>

                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Shift</label>
                      <input type="text" name="shift" class="form-control shadow-none" placeholder="Shift" value="<?=set_value('shift')?>">
                     <div class="text-danger">
                        <?php echo form_error('shift') ?>
                     </div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Location</label>
                     
                       <input type="text" name="location" class="form-control shadow-none" placeholder="Location" value="<?=set_value('location')?>">
                       <div class="text-danger"><?php echo form_error('location') ?></div>
                    </div></div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Photo</label>
                      <input type="file" name="photo" class="form-control shadow-none" placeholder="Account Title">
                     <div class="text-danger"> <?php echo form_error('photo') ?></div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Resume</label>
                     
                       <input type="file" name="resume" class="form-control shadow-none" placeholder="Bank Account No" accept=".pdf">
                       <div class="text-danger">
                         <?php echo form_error('resume') ?>
                       </div>
                    </div></div>
                  </div>
                  <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Qualification</label>
                      <input type="text" name="qualification" class="form-control shadow-none" placeholder="Qualification" value="<?=set_value('qualification')?>">
                     <div  class="text-danger"> <?php echo form_error('qualification') ?></div>
                  </div>

                    </div>
                                          <div class="col"><div class="form-group">
                      <label>Work Experience</label>
                     
                       <input type="text" name="work-exp" class="form-control shadow-none" placeholder="Work Experience" value="<?=set_value('work-exp')?>">
                      <div class="text-danger"> <?php echo form_error('work-exp') ?></div>
                    </div></div>
                  </div>
                   <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Local Address</label>
                     <textarea class="form-control shadow-none" placeholder="Local Address" name="address"><?=set_value('address')?></textarea>
                     <div class="text-danger"><?php echo form_error('address') ?></div>
                  </div>

                    </div>
                                         
                  </div>
                   <div class="row">
                      <div class="col">
                        <div class="form-group">
                      <label>Permanent Address</label>
                     <textarea class="form-control shadow-none" placeholder="Permanent Address" name="permanent-address"><?=set_value('permanent-address')?></textarea>
                     <div class="text-danger"><?php echo form_error('permanent-address') ?></div>
                  </div>

                    </div>
                                          
                  </div>


          					<button class="btn btn-success">Add New Staff</button>
          				</form>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>


 <script type="text/javascript">
   $(document).ready(function(){
    $("input").on("input",function(){
     if($(this).next("div").children().length!=0){
      $(this).next().html("");

     }
    });
    $("textarea").on("input",function(){
     if($(this).next("div").children().length!=0){
      $(this).next().html("");

     }
    });
   });
     
   </script>