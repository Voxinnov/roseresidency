 <?php 
$this->load->view('layouts/header');
?>  
<?php foreach ($about_rose as $key) {
                  
      $abouttitle=$key->products_title;
      //print_r( $data['count']);
      $aboutdesc=$key->products_caption;

      $aboutfile=$key->products_img;
   
   }
  // print_r( $title);
   ?>
       <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Enjoy the Luxury Hotel Experience in</small>
                  <h1 class="slide-animated two"><?php echo $abouttitle; ?></h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->
 
      <div class="container margin_120_95">
          <div class="row justify-content-between align-items-center">
              <div class="col-lg-5">
                  <div class="parallax_wrapper inverted">
                      <img src="<?php echo base_url();?>roseresidency_admin/upload/services/<?php echo $aboutfile; ?>" alt="" class="img-fluid rounded-img">
                      
                  </div>
              </div>
               <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h2><?php echo $abouttitle; ?></h2>
                            </div>
                           <?php echo $aboutdesc; ?>
                        </div>
                    </div>
             
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->


  </main>

         <?php 
$this->load->view('layouts/footer');
?> 
