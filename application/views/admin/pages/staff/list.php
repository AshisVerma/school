<?php  $this->load->view("admin/layout/header") ?>
<?php  $this->load->view("admin/layout/sidebar") ?>

<div class="main-panel">
        <div class="content-wrapper">   


  <div class="page-header">
            <h3 class="page-title">
              Staff List
            </h3>
          </div>

          <div class="row">
          	<div class="col-sm-12">
          		
               <?php echo $this->session->flashdata('msg')?>
              
          	</div>
          	<div class="col-sm-12 col-lg-12 col-md-12">
          		<div class="card">
          			<div class="card-header bg-primary d-flex justify-content-between align-items-center">
          				<div><h5 class="text-white p-0 m-0">Staff List</h5>
</div>
<div class="d-flex">
  <form class="search-staff" action="<?php  echo site_url() ?>/Staff/search" method="post">
    <div class="input-group">
    <input type="search" name="search-staff" class="form-control shadown-none" placeholder="Search Staff">
    <div class="input-group-append">
      <button class="btn btn-info">Search</button>
    </div>
  </div>
  </form>
 <a href="<?php echo site_url().'/Staff'?> "> <button class="bg-success c-btn" style="margin-left: 20px;"><i class="fa fa-plus-circle"></i></button></a>
</div>
          			</div>
          			<div class="card-body">
          				<table class="table text-center">
                   <tr>
                    <th>Select</th>
                     <th>Sr.No</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone no</th>
                     <th>Photo</th>
                     <th>Action</th>

                   </tr>   

                   <?php if(isset($data)){ ?> 

                    <?php foreach($data as $key=>$list) {?>
                      <tr>
                        <td>  <input type="checkbox" name="delete" class="form-control shadown-none"></td>
                        <td class="d-flex">
                        
                          <?php echo $key+1 ?>
                          
                        </td>
                        <td> <?php echo $list['name'] ?></td>
                        <td><?php echo $list['email'] ?></td>
                        <td><?php echo $list['contact_no'] ?></td>
                        <td>
                          <img src="<?php echo site_url().'/public/staff/images/'. $list['photo'] ?>">
                        </td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-primary"><i class="fa fa-cog"></i></button>
                          </div>
                        </td>
                      </tr>




                    <?php }?>



                   <?php } else{ ?>


                   <?php } ?>
                  </table>
          			</div>
          		</div>
          	</div>
          </div>

        </div>


<?php  $this->load->view("admin/layout/footer") ?>


