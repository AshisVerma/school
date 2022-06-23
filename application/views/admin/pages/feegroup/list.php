<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Fee Group List
            </h3>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary d-flex justify-content-between align-items-center">
          				<div><h5 class="text-white p-0 m-0">Fee group List</h5></div>
                  <div><a href="<?php echo site_url('feegroup/') ?>"><button class="btn btn-warning"><i class="fa fa-plus-circle"></i></button></a></div>

          			</div>
          			<div class="card-body">
          				<table class="table text-center">
                <tr>
                  <th>Sr.No</th>
                  <th>Fee Group</th>
                 
                  <th>Action</th>
                </tr>  
                 <?php foreach($data as $key=> $list) {?>

                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $list['fee_group']?></td>
                   
                    <td><div class="btn-group">
                      <a href="<?php echo site_url('/feegroup/edit/'.base64_encode($list['id'])) ?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                      <a href="<?php echo site_url('/feegroup/delete/'.$list['id']) ?>" onclick="return confirm('Are you sure')"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                    </div></td>
                  </tr>

                 <?php }?>


                  </table>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>