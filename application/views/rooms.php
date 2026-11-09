 <?php 
$this->load->view('layouts/header');
?>  

                   
     <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Enjoy the Luxury Hotel Experience in</small>
                  <h1 class="slide-animated two"><?php if($pagetitle == 'perumbavoor'){ echo 'Travellers Inn '; } else if($pagetitle == 'north_paravur'){ echo 'Jaya Tourist Home';} else { echo 'Rose Residency ';}  ?> Rooms</h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->

 <div class="container margin_120_95">

                           <?php
                   $sl=1; 
                   foreach ($rooms_rose as $key) {
                                  
                    ?> 
            <div class="row_list_version_2">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="<?php echo base_url('roseresidency_admin/upload/category/'); echo $key->category_img; ?>"><img src="<?php echo base_url('roseresidency_admin/upload/category/'); echo $key->category_img; ?>" alt=""></a>
                            </div>
                           
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info" data-jarallax-element="-25">
                            
                            <h2><?php echo $key->category_title; ?></h2>
                            <?php echo $key->category_desc; ?>
                            <div class="facilities clearfix">
                               <!--  <ul>
                                    <li>
                                        <i class="customicon-double-bed"></i> King Size Bed
                                    </li>
                                    <li>
                                        <i class="customicon-television"></i> 32 Inc TV
                                    </li>
                                </ul> -->
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                               
                                <a href="<?php echo base_url();  ?>roomdetails/<?php echo $key->category_id; ?>" class="animated_link">
                                    <strong>Details</strong>
                                </a>
                            </div>
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->

        <?php } ?>

            <!-- /row_list -->

        </div>

  </main>
         <?php 
$this->load->view('layouts/footer');
?> 
