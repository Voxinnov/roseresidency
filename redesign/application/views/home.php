<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Rose Residency </title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>template/img" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url(); ?>template/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url(); ?>template/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url(); ?>template/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url(); ?>template/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url(); ?>template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/css/vendors.min.css" rel="stylesheet">

    <!-- SEPCIFIC CSS -->
    <link href="<?php echo base_url(); ?>template/css/flex_slider.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url(); ?>template/css/custom.css" rel="stylesheet">
</head>
<style>
    .img-fluid {
  max-width: 100%;
  height: auto;
  /* border: 10px solid #fff;*/
 border-radius: var(--bs-border-radius) !important;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
}
</style>
<body> 

    <!--<div id="preloader">
        <div data-loader="circle-side"></div>
    </div>--><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <header class="reveal_header">
        <div class="container-fluid">
            <div class="row align-items-center">
                 <div class="col-6">
                        <a href="<?php echo base_url(); ?>" class="logo_normal"><img src="<?php echo base_url(); ?>template/img/rrlogo.png"  alt=""></a>
                        <a href="<?php echo base_url(); ?>" class="logo_sticky"><img src="<?php echo base_url(); ?>template/img/rrlogo.png"  alt=""></a>
                </div>
                <div class="col-6">
                    <nav>
                        <ul>
                            <li><a href="<?php echo base_url();  ?>contact/" class="btn_1 btn_scrollto">Book Now</a></li>
                            <li>
                               <div class="hamburger_2 open_close_nav_panel">
                                    <div class="hamburger__box">
                                        <div class="hamburger__inner"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div><!-- /container -->
    </header><!-- /Header -->

    <div class="nav_panel">
        <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
        <div class="logo_panel"><img src="<?php echo base_url(); ?>template/img/rrlogo.png" style="width: 200px;"  alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <li class=""><a href="<?php echo base_url(); ?>">Home</a>
                         
                    </li>
                    <li class="parent"><a href="#0">Hotels</a>
                        <ul class="level-2">
                            <li ><a href="<?php echo base_url(); ?>home/kolenchery">Kolenchery</a></li>
                            <li><a href="<?php echo base_url(); ?>home/perinthalmanna">Perinthalmanna</a></li>
                            <li><a href="<?php echo base_url(); ?>home/perumbavoor">Perumbavoor</a></li>
                            <li><a href="<?php echo base_url(); ?>home/irinjalakuda">Irinjalakuda</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url(); ?>about">About</a></li>
                  <!--  <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>-->
                   
                </ul>
          <!--      <div class="panel_footer">
                    <div class="phone_element"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+91-484-2765508,2761556</span></a></div>
                </div>-->
                <!-- /panel_footer -->
            </nav>
        </div>
        <!-- /sidebar-navigation -->
    </div>
    <!-- /nav_panel -->

    <main>
         <div id="carousel-home">
            <div class="owl-carousel owl-theme kenburns">
                <?php
   $sl=1; 
   foreach ($slider_rose as $key) {
                  
    ?> 
                <div class="owl-slide background-image cover" data-background="url(<?php echo base_url('roseresidency_admin/upload/slider/'); echo $key->slider_img; ?>)">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text white">
                                        <div class="row"> 
                                            <div class="col-lg-3">
                                                <div align="center" class="owl-slide-animated owl-slide-title-3"><a class="btn_1 outline white mt-3" href="<?php echo base_url(); ?>home/kolenchery">Kolenchery</a></div> 
                                            </div>
                                            <div class="col-lg-3">
                                                <div align="center" class="owl-slide-animated owl-slide-title-3"><a class="btn_1 outline white mt-3" href="<?php echo base_url(); ?>home/perinthalmanna">Perinthalmanna</a></div> 
                                            </div>
                                            <div class="col-lg-3">
                                                <div align="center" class="owl-slide-animated owl-slide-title-3"><a class="btn_1 outline white mt-3" href="<?php echo base_url(); ?>home/perumbavoor">Perumbavoor</a></div> 
                                            </div>
                                            <div class="col-lg-3">
                                                <div align="center" class="owl-slide-animated owl-slide-title-3"><a class="btn_1 outline white mt-3" href="<?php echo base_url(); ?>home/irinjalakuda">Irinjalakuda</a></div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <?php } ?> 
                <!--/owl-slide-->
               
            </div>
            <div class="mouse_wp">
                <a href="#first_section" class="btn_scrollto">
                    <div class="mouse"></div>
                </a>
            </div>
            <!-- / mouse -->
        </div>
        <!--/carousel-->
<!-- <div style="" class="pattern_2">       
<div class="container margin_60_35" id="start" >
        <div class="main_title_2">
                <span><em></em></span>
                <h2>&nbsp;</h2>
                <p>&nbsp;<br></p>
            </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeInUp faster homediv" data-wow-delay="0.2s">
                <div class="demo-item">
                    <a href="home.html">
                        <picture>
                            <img src="<?php echo base_url(); ?>template/img/kolenchery_1.jpg" alt="Demo" class="img-fluid">
                        </picture>
                    </a>
                    <h3 style="color:#000; text-align: center;  padding: 2px;">KOLENCHERY</h3>
                </div>

            </div>
            <div class="col-md-6 col-sm-6 wow fadeInUp faster homediv" data-wow-delay="0.4s">
                <div class="demo-item">
                    <a href="home.html">
                        <picture>
                            <img src="<?php echo base_url(); ?>template/img/perumbavoor_1.jpg" alt="Demo" class="img-fluid">
                        </picture>
                    </a>
                    <h3 style="color:#000; text-align: center;  padding: 2px;">PERUMBAVOOR</h3>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInUp faster homediv" data-wow-delay="0.2s">
                <div class="demo-item">
                    <a href="home.html">
                        <picture>
                            <img src="<?php echo base_url(); ?>template/img/perinthalmanna_1.jpg" alt="Demo" class="img-fluid">
                        </picture>
                    </a>
                    <h3 style="color:#000; text-align: center;  padding: 2px;">PERINTHALMANNA</h3>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 wow fadeInUp faster homediv" data-wow-delay="0.4s">
                <div class="demo-item">
                    <a href="home.html">
                        <picture>
                            <img src="<?php echo base_url(); ?>template/img/irinjalakuda_1.jpg" alt="Demo" class="img-fluid">
                        </picture>
                    </a>
                    <h3 style="color:#000; text-align: center;  padding: 2px;">IRINJALAKUDA</h3>
                </div>
            </div>

          

        </div>
    </div>
</div> -->
 <?php foreach ($about_rose as $key) {
                  
      $title=$key->about_title;
      //print_r( $data['count']);
      $desc=$key->about_desc;

      $file=$key->about_img;
   
   }
  // print_r( $title);
   ?>
        <div class="">
            <div class="container margin_120_0" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="<?php echo base_url(); ?>roseresidency_admin/upload/<?php echo $file; ?>" alt="" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="<?php echo base_url(); ?>template/img/home.jpg" alt="" class="rounded-img"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                  <div class="intro">
                      <div class="title">
                          <small>Rose residency</small>
                          <h2>Our History</h2>
                      </div>
                      <p ><?php echo $desc; ?></p>
                      <p><em>Managing Director</em></p>
                  </div>
              </div>
                   
                </div>
                <!-- /Row -->
            </div>
        </div>
              <div class="bg_white">
          <div class="container margin_120_0">
              <div>
                  <div class="row justify-content-between">
                   
                      <div class="col-lg-6 ">
                           <div class="title">
                              <h2>Vision</h2>
                              <p>To become the market leader in the Indian
hospitality industry by creating genuine guest
experience to our customers.  </p>
                          </div>
                            <div class="title">
                              <h2>Mission</h2>
                              <p>Guided by the philosophy of our founders, Rose
                                    Residency Hotels has set out on a course to present
                                    the traditions, culture and hospitality of Kerala to the
                                    visiting traveller on a platter. Having set out on this
                                    Endeavor, we aspire to bring alive our philosophy of
                                    Celebrating India that will reflect through all our
                                    products and services that defines the fabric of The
                                    Rose Hotels across the board. </p>
                          </div>
                          <div><h2>
                              WHAT MAKES US STAND OUT? </h2>
                              <img src="<?php echo base_url(); ?>template/img/trustresprct.png" style="width: 100%;"></div>
                      </div>
                         <div class="col-lg-5 fixed_title">
                          <div class="title">
                              <h2>Values</h2>
                         </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      <h5>Integrity</h5>
                                      <p>We uphold the highest standards of integrity in all of our actions</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="300">
                                      <h5>Agility</h5>
                                      <p>Our strength lies in being nimble, decisive and stay proactive in our actions</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="400">
                                      <h5>Efficiency</h5>
                                      <p>We focus on results, act with ambition to be operationally competitive</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="400">
                                      <h5>Respect</h5>
                                      <p>We respect individual beliefs & diversity to provide a nurturing environment for our colleagues to grow</p>
                                  </li>
                                  <li data-cue="slideInUp" data-delay="400">
                                      <h5>Team</h5>
                                      <p>We harness differences and interdependencies to unleash the power of one</p>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /container-->
      </div>
        <!-- /Pattern  -->
<div class="container margin_120_95">
        <div class="title">
                          <small>Rose residency</small>
                          <h2>Hotel's Portfolio</h2>
                      </div>
          <div class="row mt-4">
              <div class="col-lg-1 col-md-6">
                  
              </div>
               <div class="col-lg-2 col-md-6 homediv" >
               <div style="border:10px outset #978667; border-radius:50%; width:180px; height:180px; margin-bottom:5px;">
                   <h4 style="font-size: 20px;  padding: 23%;  text-align: center;">Number of Hotels <br> 5 </h4>
               </div>   
              </div>
               <div class="col-lg-2 col-md-6 homediv"  >
               <div style="border:10px inset #978667; border-radius:50%; width:180px; height:180px; margin-bottom:5px;">
                               <h4 style="font-size: 20px;  padding: 23%;  text-align: center;">Number of Cities <br> 5 </h4>
               </div>   
              </div>
               <div class="col-lg-2 col-md-6 homediv">
               <div style="border:10px outset #978667; border-radius:50%; width:180px; height:180px; margin-bottom:5px;">
                               <h4 style="font-size: 20px;  padding: 23%;  text-align: center;">Number of Keys<br> 70 </h4>
               </div>   
              </div>
               <div class="col-lg-2 col-md-6 homediv">
               <div style="border:10px inset #978667; border-radius:50%; width:180px; height:180px; margin-bottom:5px;" >
                               <h4 style="font-size: 20px;  padding: 23%;  text-align: center;">Number of Years<br>25 </h4>
               </div>   
              </div>
               <div class="col-lg-2 col-md-6" align="center">
               <div style="border:10px outset #978667; border-radius:50%; width:180px; height:180px; margin-bottom:5px;">
                               <h4 style="font-size: 20px;  padding: 23%;  text-align: center;">Number of Employees<br>180 </h4>
               </div>   
              </div>
            <div class="col-lg-1 col-md-6">
                  
              </div>
          </div>
          <!-- /Row -->
          <!-- /Row -->
      </div>
        
        <!-- /container-->

        <div class="marquee">
            <div class="track">
                <div class="content" style="font-size: 80px;">&nbsp;Welcome to Rose Residency and feel the happiness..</div>
            </div>
        </div>
        <!-- /marquee-->

      
     
        <!-- /container -->

    </main>

    <footer class="revealed">
       <!-- <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(<?php echo base_url(); ?>template/img/rooms/3.jpg)"></div>
        </div>-->
       
        <!--/container-->
        <div class="copy">
            <div class="container">
                
Copyright ©  2023 Rose Residency. All Rights Reserved | Powered - by <a href="www.voxinnov.com">VOXINNOV</a>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url(); ?>template/js/common_scripts.js"></script>
<script src="<?php echo base_url(); ?>template/js/common_functions.js"></script>
<script src="<?php echo base_url(); ?>template/js/datepicker_inline.js"></script>
<script src="phpmailer/validate.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo base_url(); ?>template/js/slider.js"></script>
</body>

<!-- Mirrored from www.ansonika.com/paradise/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Dec 2023 12:25:30 GMT -->
</html>