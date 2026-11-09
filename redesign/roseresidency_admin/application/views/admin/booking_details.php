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
                            foreach ($booking_Joance_Holidays as $key) {
                            ?>
         
                            <h4>Name :<?php echo $key->booking_name; ?></h4>
                            <h4>Email: <?php echo $key->booking_email; ?></h4>
                            <h4>Phone: <?php echo $key->booking_phn; ?></h4>
                            <h4>Address: <?php echo $key->booking_addr; ?></h4>
                            <h4>Check In: <?php echo $key->booking_chkin; ?></h4>
                            <h4>Check Out: <?php echo $key->booking_chkout; ?></h4>
                            <h4>Total Amount: <?php echo $key->booking_amount; ?></h4>
                            <?php
                            $room_list = unserialize($key->booking_room);
                           
                            } 
                           //  print_r($room_list);// exit;
                             ?><br>
                            <p>Booked List</p>
                            <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe">
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Room</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Image</th>
                                         <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    				
   <?php 
   $sl=1; 
   foreach ($booking_rooms as $key) {
       $room_id = $key->category_id; 
       
       if(in_array($room_id, $room_list))
       {
                  
    ?>
                                    <tr>
                                        <td class="title"><?php echo $key->category_title; ?></td>
                                      
                                      <td class="title"><img src="<?php echo base_url('upload/category/'); echo $key->category_img; ?>" style="width:150;height:auto" width="200"/></td>
                                      <td class="title"><?php echo $key->category_price; ?></td>
                                       </tr>
                                  <?php }
                                  $sl++;
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
