 <?php 
$this->load->view('layouts/header');
?>  

       <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Rose Residency Perinthalmanna</small>
                  <h1 class="slide-animated two">Nearest Places </h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->
 
      <div class="container margin_120_95">
          <div class="row justify-content-between align-items-center">
              <div class="col-sm-12">
                  <video width="100%" controls>
                  <source src="<?php echo base_url(); ?>template/img/roseresidency_kolenchery.mp4" type="video/mp4">
                </video>
              </div>
             
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->


  </main>

         <?php 
$this->load->view('layouts/footer');
?> 
