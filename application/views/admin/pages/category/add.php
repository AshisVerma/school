<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Add category
            </h3>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white">Add New Category</h5>

          			</div>
          			<div class="card-body">
          				<form action="<?php echo site_url('category/add_category_data');?>" method="POST">
          					<div class="row">
          						<div class="col"><div class="form-group">
          						<label>Category Name</label>
          						<input type="text" name="category_name" class="form-control shadow-none" placeholder="Category Name">
          					</div></div>
          						<div class="col"><div class="form-group">
          						<label>Category Slug</label>
          						<input type="text" name="category_slug" class="form-control shadow-none" placeholder="Category Slug">
          					</div></div>
          					</div>
          					<div class="row">
          						<div class="col">
          							<div class="form-group">
          								<label>Description</label>
          								<textarea class="form-control shadow-none" placeholder="Description" name="desc"></textarea>
          							</div>
          						</div>
          					</div>
          					<button class="btn btn-success">Add New Category</button>
          				</form>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>