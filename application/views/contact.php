 <?php 
$this->load->view('layouts/header');
?>  
 <?php foreach ($contact_rose as $key) {
                  
      $addr=$key->contact_addrs;
      //print_r( $data['count']);
      $phn1=$key->contact_phn1;
      $phn2=$key->contact_phn2;
      $email = $key->contact_email;
      $work = $key->contact_workng;
      $map=$key->contact_map;
   
   }
  // print_r( $title);
   ?> <main>
        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Enjoy the Luxury Hotel Experience</small>
                    <h1 class="slide-animated two"><?php if($pagetitle == 'perumbavoor'){ echo 'Travellers Inn '; }  else if($pagetitle == 'north_paravur'){ echo 'Jaya Tourist Home';}  else { echo 'Rose Residency ';}  ?>  </h1>
                    <h1 class="slide-animated two">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div><?php echo $addr; ?> </div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                                <p><a href="mailto:<?php echo  $email; ?>"> <?php echo $email; ?></a> <!--- <a href="#0">info@Paradise.com</a>--></p>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                                <div><?php echo $phn1; ?>, <?php echo $phn2; ?><br><small>
                                <?php echo $work; ?></small></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                    <div id="message-contact"></div>
                    <form method="post" action="<?php echo base_url();?>quickcontact" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name" required >
                                    <input type="hidden" name="branch" value="<?=$pagetitle?>" />
                                    <label for="name_contact">Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Last Name">
                                    <label for="lastname_contact">Last name</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email" required>
                                    <label for="email_contact">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone_contact" pattern="[0-9]{10}" name="phone_contact" placeholder="Telephone" required>
                                    <label for="phone_contact">Telephone</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                            <label for="message_contact">Message</label>
                        </div>
                      
                        <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline" id="submit-contact"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!--/container -->

        <div class="map_contact">
            <iframe src=" <?php echo $map; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--/map_contact -->

        
    </main>

         <?php 
$this->load->view('layouts/footer');
?> 
