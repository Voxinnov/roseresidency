 <?php 
$this->load->view('layouts/header');
?> 

    <main>
        <?php 

   foreach ($slider_rose as $key) {
          $sliderfile= $key->slider_img;
          $slidertitle = $key->slider_title;
          $slidercaption = $key->slider_caption;
   }
        ?>
        <div class="hero full-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns" src="<?php echo base_url('roseresidency_admin/upload/slider/'); echo $sliderfile; ?>" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one"><?php echo $slidertitle; ?></small>
                    <h3 class="slide-animated two"><?php echo $slidercaption; ?></h3>
                  
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_scrollto">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- / mouse -->
            </div>
        </div>
 <?php foreach ($about_rose as $key) {
                  
      $abouttitle=$key->products_title;
      //print_r( $data['count']);
      $aboutdesc=$key->products_caption;

      $aboutfile=$key->products_img;
   
   }
  // print_r( $title);
   ?>
        <!-- /Background Image Parallax -->
        <div class="pattern_2">
            <div class="container margin_120_95" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="<?php echo base_url();?>roseresidency_admin/upload/services/<?php echo $aboutfile; ?>" alt="" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="<?php echo base_url(); ?>template/img/home.jpg" alt="" class="rounded-img"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>welcome to </small>
                                <h2><?php echo $abouttitle; ?></h2>
                            </div>
                            <?php echo $aboutdesc; ?>
                            <p><em>Managing Director</em></p>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
        </div>
        <!-- /Pattern  -->

        <div class="container margin_120_95">
            <div class="title mb-4">
                <small data-cue="slideInUp">Luxury experience</small>
                <h2 data-cue="slideInUp" data-delay="200">Rooms & Suites</h2>
            </div>
            <div data-cues="zoomIn" data-delay="200">
                <div class="owl-carousel owl-theme carousel_item_centered_rooms rounded-img">
                           <?php
                   $sl=1; 
                   foreach ($rooms_rose as $key) {
                                  
                    ?>                                                              
                    <div class="item">
                        <a href="<?php echo base_url();  ?>roomdetails/<?php echo $key->category_id; ?>" class="box_cat_rooms">
                            <figure>
                                <div class="background-image" data-background="url(<?php echo base_url('roseresidency_admin/upload/category/'); echo $key->category_img; ?>)"></div>
                                <div class="info">
                                    <small><?php echo $key->category_title; ?></small>
                                    <!--<h3>Double Room ₹2150/Night</h3>
                                    <h3>Single Room ₹1850/Night</h3>-->
                                    <span>Read more</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /item-->
                    <?php } ?>
                    
                </div>
                <!-- /carousel-->
            </div>
            <p class="text-end mt-2"><a href="<?php echo base_url();  ?>rooms/<?php echo  $pagetitle; ?>" class="btn_1 outline">View all rooms</a></p>
        </div>
        <!-- /container-->

        <div class="marquee">
            <div class="track">
                <div class="content" style="font-size: 80px;">&nbsp;Welcome to <?php if($pagetitle =='perumbavoor') {echo 'Travellers Inn'; } else if($pagetitle =='north_paravur'){ echo 'Jaya Tourist Home';} else { echo 'Rose Residency'; } ?> and feel the happiness..</div>
            </div>
        </div>
        <!-- /marquee-->

        <div class="bg_white">
            <div class="container margin_120_95">
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                     <div class="col-sm-12 add_bottom_90"><h2 style="text-align:center">
                              WHAT MAKES US STAND OUT? </h2>
                              <img src="<?php echo base_url(); ?>template/img/trustresprct.png" style="width: 100%;"></div>
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <?php if($pagetitle =='perumbavoor')
                                {?>
                                   <img src="<?php echo base_url(); ?>roseresidency_admin/upload/Gallery/Restaurant22.jpg" alt="">  
                              <?php  }
                               else if($pagetitle =='irinjalakuda')
                                {?>
                                   <img src="<?php echo base_url(); ?>roseresidency_admin/upload/Gallery/71.jpg" alt="">  
                              <?php  }
                               else if($pagetitle =='perinthalmanna')
                                {?>
                                   <img src="<?php echo base_url(); ?>roseresidency_admin/upload/Gallery/20.jpg" alt="">  
                              <?php  }
                              else { ?>
                                <img src="<?php echo base_url(); ?>template/img/SPADE LOUNGE 1.jpeg" alt="">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <small>Our Premium</small>
                            <h3>Restaurants</h3>
                                                    
                            <?php if ($pagetitle == 'perumbavoor') { ?>
                                <p>We, Travellers Inn, are at your service. Our hotel maintains high standards of cleanliness and hospitality to serve our valued guests visiting Perumbavoor and Ernakulam.</p>
                            
                            <?php } elseif ($pagetitle == 'north_paravur') { ?>
                                <p>We, Jaya Tourist Home, are at your service. Our hotel maintains high standards of cleanliness and hospitality to serve our valued guests visiting North Paravur and Ernakulam.</p>
                            
                            <?php } else { ?>
                                <p>We, Rose Residency Hotel, are at your service. Our hotel maintains high standards of cleanliness and hospitality to serve our valued guests visiting Ernakulam.</p>
                            <?php } ?>
                              <p></p>
                            <?php if($pagetitle =='kolenchery')
                                { ?>
                            <small>Our Food Partners<br><br></small>
                            <div class="row">
                                <div class="col-lg-8"><img src="<?php echo base_url(); ?>template/img/foodpartner.png" style="width:100%"></div>
                            </div>
                            <?php } ?>
                            <?php if($pagetitle =='irinjalakuda')
                                { ?>
                            <small>Our Food Partners<br><br></small>
                            <div class="row">
                                <div class="col-lg-8"><img src="<?php echo base_url(); ?>template/img/eatikofood.jpg" style="width:50%"></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <?php if ($pagetitle == 'north_paravur') { ?>
                <!-- Jaya Tourist Home: Dining Experiences -->
                <style>
                    .jaya-dining { margin: 0 0 90px; }
                    .jaya-dining-heading { text-align: center; margin-bottom: 38px; }
                    .jaya-dining-heading small { color: #a77b46; letter-spacing: 2px; text-transform: uppercase; }
                    .jaya-dining-heading h2 { margin: 10px 0 0; }
                    .jaya-dining-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 25px; }
                    .jaya-dining-card { background: #fff; border: 1px solid #eee9e2; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,.06); transition: transform .3s ease, box-shadow .3s ease; }
                    .jaya-dining-card:hover { transform: translateY(-6px); box-shadow: 0 18px 42px rgba(0,0,0,.12); }
                    .jaya-dining-image { width: 100%; height: 255px; object-fit: cover; display: block; }
                    .jaya-dining-content { padding: 27px 25px 30px; }
                    .jaya-dining-content h3 { font-size: 26px; margin: 0 0 7px; }
                    .jaya-dining-subtitle { color: #a77b46; font-weight: 600; margin-bottom: 16px; }
                    .jaya-dining-content p { line-height: 1.75; margin-bottom: 13px; }
                    .jaya-dining-content p:last-child { margin-bottom: 0; }
                    @media (max-width: 991px) { .jaya-dining-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
                    @media (max-width: 767px) { .jaya-dining-grid { grid-template-columns: 1fr; } .jaya-dining { margin-bottom: 65px; } .jaya-dining-image { height: 235px; } }
                    @media (prefers-reduced-motion: reduce) { .jaya-dining-card { transition: none; } .jaya-dining-card:hover { transform: none; } }
                </style>
                <section class="jaya-dining" aria-labelledby="jaya-dining-title">
                    <div class="jaya-dining-heading">
                        <small>Discover Our Dining Destinations</small>
                        <h2 id="jaya-dining-title">Dining & Lounge Experiences</h2>
                    </div>
                    <div class="jaya-dining-grid">
                        <article class="jaya-dining-card">
                            <img class="jaya-dining-image" src="<?php echo base_url('template/img/spade-lounge.jpeg'); ?>" alt="Spade Lounge at Jaya Tourist Home" loading="lazy">
                            <div class="jaya-dining-content">
                                <h3>Spade Lounge</h3>
                                <div class="jaya-dining-subtitle">Fine Dining Executive Lounge</div>
                                <p><strong>Where Every Meal Becomes An Experience.</strong></p>
                                <p>Located inside Jaya Tourist Home, North Paravur, Spade Lounge is a premium fine dining executive lounge for those who love good food and elegant ambience.</p>
                                <p>From a quiet business lunch to a special family dinner, every visit is crafted to feel personal, relaxed and memorable.</p>
                                <p>With soft lighting, comfortable executive seating, and attentive service, Spade Lounge brings a touch of luxury to the heart of North Paravur.</p>
                            </div>
                        </article>
                        <article class="jaya-dining-card">
                            <img class="jaya-dining-image" src="<?php echo base_url('template/img/marine-cafe.jpeg'); ?>" alt="Marine Cafe restaurant and coffee shop" loading="lazy">
                            <div class="jaya-dining-content">
                                <h3>Marine Cafe</h3>
                                <div class="jaya-dining-subtitle">Restaurant &amp; Coffee Shop</div>
                                <p>Marine Cafe is the all-day restaurant and coffee shop at Jaya Tourist Home, North Paravur - a warm, casual spot where everyone feels at home.</p>
                                <p>Start your day with a fresh cup of coffee, enjoy a hearty breakfast, a relaxed lunch with family, or an evening snack with friends. From classic Kerala favourites to quick bites and refreshing beverages, Marine Cafe serves comfort food with love.</p>
                                <p>With a fresh, coastal-inspired ambience and friendly service, it's the perfect place to unwind in North Paravur.</p>
                            </div>
                        </article>
                        <article class="jaya-dining-card">
                            <img class="jaya-dining-image" src="<?php echo base_url('template/img/rose-bar.jpeg'); ?>" alt="Rose Bar at Jaya Tourist Home" loading="lazy">
                            <div class="jaya-dining-content">
                                <h3>Rose Bar</h3>
                                <div class="jaya-dining-subtitle">Relaxed Bar &amp; Dining</div>
                                <p>Rose Bar is the friendly neighbourhood bar at Jaya Tourist Home, North Paravur - a comfortable place to relax, have a drink, and enjoy good food.</p>
                                <p>No show-off, no loud crowd. Just good drinks, tasty food, and a relaxed atmosphere.</p>
                                <p>Enjoy a wide selection of beverages with hot, fresh starters and full meals - served with warm hospitality.</p>
                            </div>
                        </article>
                    </div>
                </section>
                <!-- /Jaya Tourist Home: Dining Experiences -->
                <?php } ?>

                <?php foreach ($facility_rose as $key) {
                  
      $facilittitle=$key->service_title;
      //print_r( $data['count']);
      $facilidesc=$key->service_content;

      $facilifile=$key->service_img;
   
   }
  // print_r( $title);
   ?>
                <div class="row justify-content-between d-flex align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="<?php echo base_url('roseresidency_admin/upload/Otherservices/'); echo $facilifile; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="title">
                            <small>We Offer</small>
                            <h3><?php echo $facilittitle; ?></h3>
                            <?php $contn=strip_tags($facilidesc);
                            if(strlen($contn)>300)
                            {
                                $subcon=substr($contn, 0, 300);
                                $contn = substr($subcon, 0, strrpos($subcon, ' '));
                            }
                         echo $contn; echo" ...";?>
                            <p><a href="<?php echo base_url(); ?>facilities/<?php echo  $pagetitle; ?>" class="btn_1 mt-1 outline">Read more</a></p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <!-- <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="<?php echo base_url(); ?>roseresidency_admin/upload/Gallery/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <small>Plan Your Event </small>
                            <h3>Conference Hall</h3>
                            <p>A special occasion demands a special venue. And the banquet hall
at Rose residency offer what you seek. The spacious and grand banquet hall are ideal for hosting wide range of events including conferences, business meetings, cultural events and parties</p>
                            <p></p>
                            
                        </div>
                    </div>
                </div>-->
                
                 <?php if($pagetitle=='kolenchery' || $pagetitle == 'perinthalmanna' || $pagetitle == 'irinjalakuda')
                    { ?>
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                   
                    <div class="col-lg-12">
                        <div class="title">
                            <h3>Nearest Places</h3>
                           <?php if($pagetitle!='irinjalakuda'){  ?>
                             <video width="100%" controls>
               <?php if($pagetitle=='kolenchery'){ ?>  <source src="<?php echo base_url(); ?>template/img/roseresidency_kolenchery.mp4" type="video/mp4"><?php } ?>
               <?php if($pagetitle=='perinthalmanna'){ ?>  <source src="<?php echo base_url(); ?>template/img/perithalmanna.mp4" type="video/mp4"><?php } ?>
              
                </video>
                <?php } ?>
                        </div>
                         <?php if($pagetitle=='irinjalakuda'){ ?>     <iframe width="100%" height="600" src="https://www.youtube.com/embed/-h1AsaA59Lo?si=OKBK901SPofGOLab" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe><?php } ?>
                    </div>
                </div>
                <?php } ?>
                
            </div>
            <!-- /container-->
        </div>
        <!-- /bg_white -->

        <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns-2" src="<?php echo base_url(); ?>template/img/Elegant Teal and Gold Lounge Bar.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="title white">
                                <small class="mb-1">Testimonials</small>
                                <h2>What Clients Says</h2>
                            </div>
                            <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">

                                    <?php foreach ($testi_rose as $key) {
                                    ?> 
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4><?php echo $key->testi_name; ?><small><?php echo $key->testi_place; ?></small></h4>
                                        </div>
                                        <div class="comment">
                                            <?php echo $key->testi_content; ?>
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                            <?php } ?>

                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /parallax_section_1-->


        <!--/bg_white -->


    </main>
         <?php 
$this->load->view('layouts/footer');
?> 
