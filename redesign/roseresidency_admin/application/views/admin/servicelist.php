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
                            <h3 class="box-title m-b-0">Rooms</h3>
                            <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe">
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Title</th>
                                        
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    				
   <?php 
   $sl=1; 
   foreach ($servicelist_rose as $key) {
                  
    ?>
                                    <tr>
                                        <td class="title"><a href="javascript:void(0)"><?php echo $key->servicelist_title; ?></a></td>
                                      
                                        <td><a href="<?php echo base_url('admin/servicelist/edit/'.$key->servicelist_id); ?>" class="btn btn-success">
                          <i class="fa fa-pencil"></i>
                        </a> |
                        <a href="<?php echo base_url('admin/servicelist/delete/'.$key->servicelist_id); ?>" class="btn btn-danger">
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
