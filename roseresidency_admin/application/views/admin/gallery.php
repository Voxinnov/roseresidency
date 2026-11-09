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

			<!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Gallery</h3>
                            <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe">
                                <thead>
                                    <tr>
                                         <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Branch</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Name</th>
                                        
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Image</th>
                                      
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    				
   <?php 
   $sl=1; 
   foreach ($gallery_tribulds as $key) {
                  
    ?>
                                    <tr>
                                        <td class="title">
                                            <?php 
                                                    echo $key->hotel_id;
                                                
                                            ?></td>
                                        <td class="title"><a href="javascript:void(0)">
                                            <?php 
                                                    echo $key->project_title;
                                                
                                            ?>

                                        </a></td>
                                        
                                        <td><img src="<?php echo base_url('upload/Gallery/'); echo $key->gallery_img; ?>" style="width:150;height:auto" width="150"/></td>
                                       
                                        <td>|
                        <a href="<?php echo base_url('admin/gallery/delete/'.$key->gallery_id); ?>" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                        </a></td>
                                    </tr>
                                  <?php    $sl++;
   }
  // print_r( $title);
   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
