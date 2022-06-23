<?php  $this->load->view("admin/layout/header",) ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Student List
            </h3>
          </div>

          <div class="row">
            <div class="col-sm-12">
              
               <?php echo $this->session->flashdata('msg')?>
              
            </div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary d-flex justify-content-between align-items-center">
          				<div><h5 class="text-white">All Student List</h5></div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group">
                      <input type="search" name="search" class="form-control shadow-none" placeholder="Search">
                      <div class="input-group-append">
                        
                         <button class="btn btn-success">Search</button>

                       
                      </div>
                    </div>
                     <a href="" class="ml-4"><button class="btn btn-warning shadow-none"><i class="fa fa-plus-circle"></i> Add</button></a>
                  </div>

          			</div>
          			<div class="card-body">
                  <div class="">
          				
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>