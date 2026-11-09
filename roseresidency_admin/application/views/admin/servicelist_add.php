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
				
 
				
				
				<!--  row    -->
				  <form class="form" action="<?php echo base_url('admin/servicelist/submit'); ?>" method="post" enctype="multipart/form-data">
                <div class="row" style="background-color:#fff">
                  
                  <div class="col-sm-12">
                                 <div class="form-group">
                                    <label class="example-text-input">Select Hotel</label>
                                    
                                        <select name="branch" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="kolenchery">Kolenchery</option>
                                            <option value="perumbavoor">Perumbavoor</option>
                                             <option value="perinthalmanna">Kolenchery</option>
                                            <option value="irinjalakuda">Irinjalakuda</option>
                                             <option value="thrissur">Thrissur</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-sm-12">     <div class="form-group ">
                                    <label for="example-text-input" class="col-2 col-form-label">Title</label>
                                   
                                        <input class="form-control" type="text" name="title" value="" id="example-text-input">
                                    </div>
                                </div>
                     
                     
                                   <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Description</h3>
                            <div >
                                <textarea class="summernote" name="caption"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" >
                        <button class="btn btn-info style1 btn-lg btn-block text-uppercase waves-effect waves-light" style="width:100%; color:white" type="submit">
Add
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
