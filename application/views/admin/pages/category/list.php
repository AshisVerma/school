<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              All Category List
            </h3>
          </div>

          <div class="row">
            <div class="col-sm-12">
              
               <?php echo $this->session->flashdata('msg')?>
              
            </div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary">
          				<h5 class="text-white">All Category List</h5>

          			</div>
          			<div class="card-body">
          				<table class="table text-center">
                <tr>
                  <th>Sr.No</th>
                  <th>Category Name</th>
                  <th>Category Slug</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr> 
                  <?php if(count($data)) { ?> 


                     <?php for($i=0;$i<count($data); $i++) { ?>

                <tr>
                  <td><?php echo ($i+1) ?></td>
                  <td><?php echo $data[$i]['name']?></td>
                  <td><?php echo $data[$i]['slug']?></td>
                  <td>
                    <?php if($data[$i]['status'] == 1) { ?>
                      <a href="<?php echo site_url("category/status_change/") ;echo base64_encode($data[$i]['id']) ?>">
                     <button class="btn btn-success">Active</button></a>
                          <?php } else { ?>
                        <a href="<?php echo site_url("category/status_change/") ;echo base64_encode($data[$i]['id']) ?> "><button class="btn btn-danger">Inactive</button></a>
                     <?php } ?>
                  </td>

                  <td>
                    <a href="<?php echo site_url("category/delete_category/") ;echo base64_encode($data[$i]['id']) ?> " onclick="return confirm('Are your sure to delete')"><button class="btn btn-social-icon btn-danger btn-rounded">
                    <i class="fas fa-trash"></i>
                  </button></a>
                  <a href="<?php echo site_url('category/edit_category') ?>"><button class="btn btn-social-icon btn-success btn-rounded">
                    <i class="fas fa-edit"></i>
                  </button></a></td>
                </tr>



                  <?php } ?>


                <?php } else {?>

            <tr>
              <td colspan="6" class="text-center"><h3 class="text-danger">No Any Catgeory Created Yet</h3></td>
            </tr>


                <?php } ?>





                 
                  </table>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>