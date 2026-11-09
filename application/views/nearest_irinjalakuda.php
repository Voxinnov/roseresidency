 <?php 
$this->load->view('layouts/header');
?>  

       <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Rose Residency Irinjalakuda</small>
                  <h1 class="slide-animated two">Nearest Places </h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->
 
     <div class="container margin_120_95">
    <div class="row justify-content-between align-items-center">
        <div class="col-sm-12">
            <iframe width="100%" height="600" src="https://www.youtube.com/embed/-h1AsaA59Lo?si=OKBK901SPofGOLab" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </div>
    <!-- /Row -->
</div>

      <!-- /container -->


  </main>

         <?php 
$this->load->view('layouts/footer');
?> 
