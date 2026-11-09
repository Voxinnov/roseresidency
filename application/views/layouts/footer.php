  <?php foreach ($contact_rose as $key) {
                  
      $addr=$key->contact_addrs;
      //print_r( $data['count']);
      $phn1=$key->contact_phn1;
      $phn2=$key->contact_phn2;
      $email = $key->contact_email;
      $work = $key->contact_workng;
      $map=$key->contact_map;
      $insta=$key->contact_inst;
      $fb=$key->contact_fb;
      $yt=$key->contact_youtube;
   
   }
  // print_r( $title);
   ?>
  <footer class="revealed">
        <div class="footer_bg">
            <div class="gradient_over"></div>
            <div class="background-image" data-background="url(<?php echo base_url(); ?>template/img/rooms/3.jpg)"></div>
        </div>
        <div class="container">
            <div class="row move_content">
                <div class="col-lg-4 col-md-12">
                    <h5>Contacts</h5>
                    <ul>
                        <li><?php echo $addr; ?> </li>
                        <li><strong><a href="mailto:<?php echo  $email; ?>"><?php echo $email; ?></a></strong></li>
                        <li><strong><a href="tel:<?php echo $phn1; ?>"><?php echo $phn1; ?>, <?php echo $phn2; ?></a></strong></li>
                    </ul>
                    <div class="social">
                        <ul>
                            <li><a href="<?php echo $insta; ?>"><i class="bi bi-instagram" target="_blank" ></i></a></li>
                            <li><a href="<?php echo $fb; ?>"><i class="bi bi-facebook"  target="_blank" ></i></a></li>
                            <li><a href="<?php echo $yt; ?>"><i class="bi bi-youtube"  target="_blank" ></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ms-lg-auto">
                    <h5>Explore</h5>
                    <div class="footer_links">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>about/<?php echo  $pagetitle; ?>">About Us</a></li>
                            <li><a href="<?php echo base_url(); ?>rooms/<?php echo  $pagetitle; ?>">Rooms &amp; Suites</a></li>
                            <li><a href="<?php echo base_url(); ?>contact/<?php echo  $pagetitle; ?>">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     <iframe src=" <?php echo $map; ?>" width="100%" height="250" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <div class="copy">
            <div class="container">
                
Copyright ©  <?php echo date('Y');?> Rose Residency. All Rights Reserved | Powered - by <a href="http://voxinnov.com/">VOXINNOV</a>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    
  <!--  <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>-->
    <!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="<?php echo base_url(); ?>template/js/common_scripts.js"></script>
<script src="<?php echo base_url(); ?>template/js/common_functions.js"></script>
<script src="<?php echo base_url(); ?>template/js/datepicker_inline.js"></script>
<script src="phpmailer/validate.js"></script>

</body>
</html>