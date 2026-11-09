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
   foreach ($servicelist_rose as $key) {
                  
      $title=$key->servicelist_title;
      //print_r( $data['count']);
      $caption=$key->servicelist_desc;
        $id=$key->servicelist_id;
      $sl++;
   }
  // print_r( $title);
   ?>
				
				
				<!--  row    -->
				  <form class="form" action="<?php echo base_url('admin/servicelist/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="row" style="background-color:#fff">
                  
                            <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                   
                                        <input class="form-control" type="text" name="title" value="<?php echo $title; ?>" id="example-text-input">
                                        
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>" id="example-text-input">
                                    </div>
                                </div>
                           
                  
                                   <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Description</h3>
                            <div >
                                <textarea class="summernote" name="desc"><?php echo $caption; ?></textarea>
                            </div>
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
