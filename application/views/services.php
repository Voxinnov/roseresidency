 <?php 
$this->load->view('layouts/header');
?>  
      <div class="ttm-page-title-row">
                <div class="ttm-page-title-row-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="page-title-heading">
                                    <h2 class="title">Other Services</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <div class="container">
                                        <div class="breadcrumb-wrapper-inner">
                                            <span>
                                                <a title="Go to Delmont." href="index.html" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                            </span>
                                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                            <span>Other Services</span>
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

            <section class="ttm-row services-section ttm-bgcolor-darkgrey pt-90 bg-img1 clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-10 m-auto">
                            <!--section-title-->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>Services we do</h3>
                                    <h2 class="title">Trimbuilds providing the best services</h2>
                                </div>
                            </div><!--section-title end-->
                        </div>
                    </div><!-- row end-->
                    <div class="row">

                     <?php
                        foreach($services_tribuilds as $key)
                           {
                           ?>  
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- featured-imagebox-portfolio -->
                            <div class="featured-imagebox featured-imagebox-portfolio style2 active">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"><img width="740" height="576" class="img-fluid" src="<?php echo base_url('trimuilds_admn/upload/Otherservices/'); ?><?php echo $key->service_img; ?>" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-workspace"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="<?php echo base_url(); ?>/services_details/<?php echo $key->service_id; ?>"><?php echo $key->service_title; ?></a></h3>
                                    </div>
                                    <div class="featured-desc">

                                        <p> <?php 
                                          if(strlen( $key->service_content)>250)
                                            {
                                                $subcon=substr( $key->service_content, 0, 250);
                                                $contn = substr($subcon, 0, strrpos($subcon, ' '));
                                                echo $contn;
                                            }
                                            else
                                            {
                                              echo $key->service_content;  
                                            }
                                            ?></p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-portfolio end-->
                        </div>
                   <?php } ?>
                        
                    </div><!-- row end -->
                </div>
            </section>
            

        </div><!--site-main end-->


         <?php 
$this->load->view('layouts/footer');
?> 
