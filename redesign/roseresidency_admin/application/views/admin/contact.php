<?php include 'layout/css.php';

?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper"> 
     <?php include 'layout/header_menu.php'; ?>
        <!-- Left navbar-header -->
        <?php include 'layout/menu.php'; ?>
        <!-- Left navbar-header end -->
       
	   
	    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
			<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      
                        <h4 class="page-title">Rose Residency</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>admin/dashboard/">Home</a></li>
                            <li class="active"> <?php echo $page_title; ?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div> 	 	
				
   <?php 
   $sl=1; 
   foreach ($contact_rose as $key) {
                  
      $addrs=$key->contact_addrs;
      $title=$key->contact_frmtitl;
      $working=$key->contact_workng;
      //print_r( $data['count']);
      $phn1=$key->contact_phn1;
      $phn2=$key->contact_phn2;
      $email=$key->contact_email;
      $fb=$key->contact_fb;
      $inst=$key->contact_inst;
      $youtube=$key->contact_youtube;
        $map=$key->contact_map;
      $sl++;
      $id = $key->contact_id;
   }
  // print_r( $title);
   ?>
				
				
				<!--  row    -->
				  <form class="form" action="<?php echo base_url('admin/contact/submit'); ?>" method="post" enctype="multipart/form-data">
                <div class="row" style="background-color:#fff">
                  <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                   
                                        <input class="form-control" type="text" name="title" value="<?php echo $title; ?>" id="example-text-input">
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>" id="example-text-input">
                                    </div>
                                </div>
                            <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Address</label>
                                   <textarea class="form-control"  name="addrs">
                                    <?php echo $addrs; ?></textarea>
                                   </div>
                                </div>
                            <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Working Hours</label>
                                   <textarea class="form-control"  name="working">
                                    <?php echo $working; ?></textarea>
                                   </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Phone 1</label>
                                   
                                        <input class="form-control" type="text" name="phn1" value="<?php echo $phn1; ?>" id="example-text-input">
                                    </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Phone 2</label>
                                   
                                        <input class="form-control" type="text" name="phn2" value="<?php echo $phn2; ?>" id="example-text-input">
                                    </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                   
                                        <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" id="example-text-input">
                                    </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Facebook</label>
                                   
                                        <input class="form-control" type="text" name="fb" value="<?php echo $fb; ?>" id="example-text-input">
                                    </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Instagram</label>
                                   
                                        <input class="form-control" type="text" name="inst" value="<?php echo $inst; ?>" id="example-text-input">
                                    </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">YouTube</label>
                                   
                                        <input class="form-control" type="text" name="youtube" value="<?php echo $youtube; ?>" id="example-text-input">
                                    </div>
                                </div>
                      <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Map</label>
                                   
                                        <input class="form-control" type="text" name="map" value="<?php echo $map; ?>" id="example-text-input">
                                    </div>
                                </div>
              
                    <div class="col-sm-12" >
                        <button class="btn btn-info style1 btn-lg btn-block text-uppercase waves-effect waves-light" style="width:100%; color:white" type="submit">
Update
</button>             
                    </div>           
                </div>
                </form>
                <!-- /.row -->
			
            </div>
            <!-- /.container-fluid -->
           <?php include 'layout/footer.php'; ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
   <?php include 'layout/js.php'; ?>
