 <?php 
$this->load->view('layouts/header');
?>  
      <div class="ttm-page-title-row">
                <div class="ttm-page-title-row-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="page-title-heading">
                                    <h2 class="title">Projects</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <div class="container">
                                        <div class="breadcrumb-wrapper-inner">
                                            <span>
                                                <a title="Go to Delmont." href="index.html" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                            </span>
                                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                            <span><?php echo $pagetitle; ?></span>
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

            
           <!--grid-section-->
            <section class="ttm-row grid-section clearfix">
                <div class="container">
                    <div class="row">

                    	           <?php
               foreach($products_tribuilds as $key)
               {
               ?>
                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-6">
                            <!-- featured-imagebox-portfolio -->
                            <div class="featured-imagebox featured-imagebox-portfolio style3">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail"> 
                                    <img width="610" height="750" class="img-fluid" src="<?php echo base_url('trimuilds_admn/upload/Gallery/'); ?><?php echo $key->gallery_img; ?>" alt="image"> 
                                </div>
                                <!-- featured-thumbnail end-->
                                <div class="featured-content-inner">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="project-single.html"><?php echo $key->project_title; ?></a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p><?php echo $key->proj_desc; ?></p>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div><!-- featured-imagebox-portfolio end-->
                        </div>

                         <?php } ?>
                   
                    </div>
                   
                </div>
            </section><!--grid-section end-->

            

        </div><!--site-main end-->


         <?php 
$this->load->view('layouts/footer');
?> 
