 <?php 
$this->load->view('layouts/header');
?>  
 <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Luxury Hotel Experience in</small>
                  <h1 class="slide-animated two">
                      <?php if($pagetitle=='perumbavoor'){ echo 'Travellers Inn'; } else if($pagetitle == 'north_paravur'){ echo 'Jaya Tourist Home';} else { echo 'Rose Residency'; if($pagetitle=='kolenchery'){ echo ' Kolenchery';}
                      if($pagetitle=='perinthalmanna'){ echo ' Perinthalmanna';} if($pagetitle=='irinjalakuda'){ echo ' Irinjalakuda';} } ?> Gallery
                       </h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="isotope-wrapper">
                <div class="row justify-content-center">
                   <?php
                   $sl=1; 
                   foreach ($gallery_rose as $key) {
                                  
                    ?> 
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="<?php echo base_url('roseresidency_admin/upload/Gallery/'); echo $key->gallery_img; ?>" alt="" />
                            <div class="content">
                                <a  data-fslightbox="gallery_1" data-type="image" href="<?php echo base_url('roseresidency_admin/upload/Gallery/'); echo $key->gallery_img; ?>"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                </div>
                <!--/row -->
            </div>
            <!--/isotope-wrapper -->


        </div>
        <!--/container -->
    </main>
         <?php 
$this->load->view('layouts/footer');
?> 
