 <?php 
$this->load->view('layouts/header');
?>  
                            <?php 

   foreach ($subcategory_tribuilds as $key) {
                  
      $title=$key->subcategory_name;
      //print_r( $data['count']);
      $desc=$key->subcategory_desc;

      $file=$key->subcategory_img;
   
   }
  // print_r( $title);
   ?>
      <div class="ttm-page-title-row">
                <div class="ttm-page-title-row-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="page-title-heading">
                                    <h2 class="title"><?php echo $title; ?></h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <div class="container">
                                        <div class="breadcrumb-wrapper-inner">
                                            <span>
                                                <a title="Go to Delmont." href="index.html" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                            </span>
                                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                            <span><?php echo $title; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>


        <!--site-main start-->
        <div class="site-main">

            
            <!-- project-single-section -->
            <section class="ttm-row project-single-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--<div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-top-image">
                                <div class="ttm-pf-single-content-wrapper">
                                   
                                    <div class="ttm_single_image-wrapper">
                                        <img width="auto"  class="img-fluid" src="images/portfolio/project-4-1200x800.jpg" alt="portfolio-img">
                                    </div>
                                         </div>
                                </div>-->
           
                                <div class="ttm-pf-single-content-area">
                                    <h2><?php echo $title; ?></h2>
                                    <p><?php echo $desc; ?></p>

                                    <div class="row mt-25 mb-30">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="ttm_single_image-wrapper mt-15 mb-15 res-991-mt-20 res-991-mb-10">
                                                <img width="100%" height="auto" class="img-fluid" src="<?php echo base_url(); ?>trimuilds_admn/upload/category/<?php echo $file; ?>" alt="project-01">
                                            </div>
                                        </div>
                                      
                                    </div>
                        
                                  
                                                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- project-single-section end -->
            

        </div><!--site-main end-->


         <?php 
$this->load->view('layouts/footer');
?> 
