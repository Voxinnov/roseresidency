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
                            <h3 class="box-title m-b-0">Booking Details</h3>
                           <?php 
                            $sl=1; 
                            $product_id ='';
                            $p_title = '';
                            foreach ($booking_Joance_Holidays as $key) {
                            ?>
         
                            <h4>Name :<?php echo $key->booking_name; ?></h4>
                            <h4>Email: <?php echo $key->booking_email; ?></h4>
                            <h
                            }4>Phone: <?php echo $key->booking_phn; ?></h4>
                            <h4>Address: <?php echo $key->booking_addr; ?></h4>
                            <h4>No of Adults: <?php echo $key->booking_adult; ?></h4>
                            <h4>No of Children: <?php echo $key->booking_child; ?></h4>
                           
                            <h4>Total Amount: <?php echo $key->booking_amount; ?></h4>
                             <?php  $tour_id = $key->booking_tour; 
                            foreach ($booking_packages as $key) {
                                 $p_id = $key->products_id; 
                                 if($p_id == $tour_id )
                                 {
                                     $p_title =  $key->products_title;
                                     $product_id =  $key->products_id;
                                 }
                            }
                            ?>
                            <h4>Selected Package: <a href="<?php echo base_url('admin/packages/edit/'.$product_id); ?>" target="_blank"><?php echo $p_title; ?></a></h4>
                            <?php
                         
                            }   ?><br>
                            
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