 <?php 
$this->load->view('layouts/header');
?>  
<?php 
foreach($rooms_rose as $key) {
          $roomtitle= $key->category_title;
          $roomdesc = $key->category_desc;
          $roomimg = $key->category_img;
   }
?>
     <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Room Details</small>
                  <h1 class="slide-animated two"><?php echo $roomtitle; ?></h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->

      <div class="container margin_120_95">
          <div class="row justify-content-between align-items-center">
              <div class="col-xl-6 order-xl-2">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_4" data-type="image" href="<?php echo base_url('roseresidency_admin/upload/category/'); echo $roomimg; ?>"><img src="<?php echo base_url('roseresidency_admin/upload/category/'); echo $roomimg; ?>" alt=""></a>
                            </div>
                          
                        </div>
                        <!-- /carousel -->
                    </div>
                <div class="col-lg-6">
                  <div class="intro">
                      <div class="title">
                          <small>Rose Residency</small>
                          <h2><?php echo $roomtitle ; ?></h2>
                      
                     <?php echo $roomdesc; ?>
                   </div>
                  </div>
              </div>
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->

      <div class=" container margin_60_0">
          <div class="row" >
            <?php 
          // echo $service_rose_count;exit;
            if ( $service_rose_count != 1) {
                $count = intval($service_rose_count/2);
            }
            else
            {
                $count = 1;
            }
            ?>
              <div class="col-lg-6">
                  <div class="title">
                      <small>Rose Residency Services</small>
                      <h3>We Offer</h3>
                  </div>
                    <div role="tablist" class="mb-5 accordion" id="faq">
                   <?php
                       $sl=1; 
                       foreach ($service_rose as $key) { 
                       if($sl<= $count) 
                       {
                    ?> 

                      <div class="card">
                          <div class="card-header" role="tab">
                              <h5 class="mb-0">
                                  <a class="collapsed" data-bs-toggle="collapse" href="#service<?php echo $sl;?>" aria-expanded="false">
                                      <i class="indicator bi-plus-lg"></i><?php echo $key->servicelist_title; ?>
                                  </a>
                              </h5>
                          </div>
                          <div id="service<?php echo $sl;?>" class="collapse" role="tabpanel" data-bs-parent="#faq">
                              <div class="card-body">
                                  <p><?php echo $key->servicelist_desc; ?> </p>
                              </div>
                          </div>
                      </div>
                      <!-- /card -->
                    <?php 
                            }
                       $sl++;     }
                    ?>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div role="tablist" class="mb-5 accordion" id="faq">
                     <?php
                       $sl=1; 
                       foreach ($service_rose as $key) { 
                       if($sl > $count) 
                       {
                    ?> 

                      <div class="card">
                          <div class="card-header" role="tab">
                              <h5 class="mb-0">
                                  <a class="collapsed" data-bs-toggle="collapse" href="#service<?php echo $sl;?>" aria-expanded="false">
                                      <i class="indicator bi-plus-lg"></i><?php echo $key->servicelist_title; ?>
                                  </a>
                              </h5>
                          </div>
                          <div id="service<?php echo $sl;?>" class="collapse" role="tabpanel" data-bs-parent="#faq">
                              <div class="card-body">
                                  <p><?php echo $key->servicelist_desc; ?> </p>
                              </div>
                          </div>
                      </div>
                      <!-- /card -->
                    <?php 
                            }
                         $sl++;    }
                    ?>
                  </div>
                  <!-- /accordion -->
              </div>
              </div>
          </div>
      <!-- /bg_white -->

  </main>
         <?php 
$this->load->view('layouts/footer');
?> 
