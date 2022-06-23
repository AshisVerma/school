<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add Fee Group
            </h3>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary d-flex justify-content-between align-items-center">
          				<div><h5 class="text-white m-0 p-0">Add New Fee Group</h5></div>
                  <div><a href="<?php echo site_url('feegroup/list')?>"><button class="btn btn-danger">Fee Group List</button></a></div>

          			</div>
          			<div class="card-body">
          				<form action="<?php echo site_url('feegroup/create');?>" method="POST">
                      <?php echo form_open('form'); ?>
          					<div class="row">
          						<div class="col"><div class="form-group">
          						<label>Fee Type Name</label>
          						<input type="text" name="fee_group" class="form-control shadow-none" placeholder="Fee Type Name" value="<?=set_value('fee_group')?>">
                       <div class="text-danger"><?php echo form_error('fee_group') ?></div>
          					</div></div>
          						
          					</div>
          					<div class="row">
          						<div class="col">
          							<div class="form-group">
          								<label>Description</label>
          								<textarea class="form-control shadow-none" placeholder="Description" name="desc">
                   <?=set_value('desc')?>        
                          </textarea>
                           <div class="text-danger"><?php echo form_error('desc') ?></div>
          							</div>
          						</div>
          					</div>
          					<button class="btn btn-success">Add New Fee Type</button>
          				</form>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>