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
   foreach ($testi_imptint as $key) {
                  
      $title=$key->testi_name;
      //print_r( $data['count']);
      $caption=$key->testi_content;
      $place=$key->testi_place;
       $file=$key->testi_img;
      $status=$key->testi_status;
        $id=$key->testi_id;
      $sl++;
   }
  // print_r( $title);
   ?>
				
				
				<!--  row    -->
				  <form class="form" action="<?php echo base_url('admin/t/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="row" style="background-color:#fff">
                  
                            <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Name</label>
                                   
                                        <input class="form-control" type="text" name="title" value="<?php echo $title; ?>" id="example-text-input">
                                        
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>" id="example-text-input">
                                    </div>
                                </div>
                     <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Place</label>
                                   
                                        <input class="form-control" type="text" name="place" value="<?php echo $place; ?>" id="example-text-input">
                                    </div>
                                </div>
                     
                                   <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Comments</h3>
                            <div >
                                <textarea class="summernote" name="caption"><? echo $caption; ?></textarea>
                            </div>
                        </div>
                    </div>
                                  <div class="col-sm-12">
                                 <div class="form-group">
                                    <label class="example-text-input">Status</label>
                                    
                                        <select name="status" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="1" <?php  if($status== 1){ ?> selected="selected"<?php  } ?>>Public</option>
                                            <option value="0" <?php  if($status== 0){ ?> selected="selected"<?php  } ?>>Unpublic</option>
                                        </select>
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
