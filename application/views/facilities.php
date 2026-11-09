 <?php 
$this->load->view('layouts/header');
?>  
<?php foreach ($facility_rose as $key) {
                  
      $abouttitle=$key->service_title;
      //print_r( $data['count']);
      $aboutdesc=$key->service_content;

      $aboutfile=$key->service_img;
   
   }
  // print_r( $title);
   ?>
       <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                <!--   <small class="slide-animated one">Enjoy the Luxury Hotel Experience in</small> -->
                  <h1 class="slide-animated two"><?php echo $abouttitle; ?></h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->
 
      <div class="container margin_120_95">
         
<?php if($pagetitle =='irinjalakuda'){ ?>
 <div class="row justify-content-between align-items-center">
            
               <div class="col-lg-12">
                        <div class="intro">
                            <div class="title">
                                <small><?php if($pagetitle=='perumbavoor'){ echo 'Travellers Inn';} else { echo 'Rose residency'; } ?></small>
                                <h2><?php echo $abouttitle; ?></h2>
                            </div>
                               <img src="<?php echo base_url();?>roseresidency_admin/upload/Otherservices/<?php echo $aboutfile; ?>" alt="" class="img-fluid rounded-img" style="max-width:40%; float:left; margin-right:5%; ">
                          <p style="float:left"> <?php echo $aboutdesc; ?></p>
                        </div>
                    </div>
             
          </div>
          <!-- /Row -->
<div class="row justify-content-between">
                      <div class="col-lg-5 fixed_title">
                          <div class="title">
                              <small style="font-size: 16px;">ON CHARGEABLE BASIS</small>
                         </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      
                                      <p>Travel Desk, Business Center, Lazer Prints, Laundry Service, Car Wash, Doctor On Cal, Multi Cuisine Restaurant, Board Room, STD/ISD Facilities, 24 hrs Room Service</p>
                                  </li>
                                  
                              </ul>
                          </div>
                          
                           <div class="title">
                              <small style="font-size: 16px;">ON COMPLIMENTARY BASIS REQUEST</small>
                         </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      
                                     <p>Guests Can Avail Iron Box & Iron Board. Safe Deposit Locker Service</p>
                                  </li>
                                  
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                         <div class="title">
                              <small style="font-size: 16px;">ON COMPLIMENTARY BASIS </small>
                         </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      
                                      <p> Guest lodging with us can avail-breakfast (Indian and continental), Bottled mineral water(1000ml), Mini fridge, Soap, dental kit, Comb, Shampoo, Moisturiser, Shoeshine Strip, All purpose kit, Free internet access, daily newspaper, hair dryer, left luggage,coffee maker
, Guest stationery and valet parking
, Shaving kit, Shower cap, Foreign exchange
, Along with it high quality guest amenities and multi-channel TV entertainment can be enjoyed
, Guests can request us for wheel chair, wake up call service, first aid kit,etc </p>
                                  </li>
                                  
                              </ul>
                          </div>
                      </div>
                  </div>

<?php } 
else {
?>
 <div class="row justify-content-between align-items-center">
              <div class="col-lg-5">
                  <div class="parallax_wrapper inverted">
                      <img src="<?php echo base_url();?>roseresidency_admin/upload/Otherservices/<?php echo $aboutfile; ?>" alt="" class="img-fluid rounded-img">
                      
                  </div>
              </div>
               <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small><?php if($pagetitle=='perumbavoor'){ echo 'Travellers Inn';} else { echo 'Rose residency'; } ?></small>
                                <h2><?php echo $abouttitle; ?></h2>
                            </div>
                           <?php echo $aboutdesc; ?>
                        </div>
                    </div>
             
          </div>
          <!-- /Row -->
          <div class="row justify-content-between">
                      <div class="col-lg-5 fixed_title">
                          <div class="title">
                              <small style="font-size: 16px;">ON CHARGEABLE BASIS</small>
                         </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      
                                      <p>Travel Desk, Business Center, Lazer Prints, Laundry Service, Car Wash, Doctor On Cal</p>
                                  </li>
                                  
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                         <div class="title">
                              <small style="font-size: 16px;">COMPLIMENTARY BASIS REQUEST</small>
                         </div>
                          <div class="list_ok">
                              <ul>
                                  <li data-cue="slideInUp" data-delay="200">
                                      
                                      <p>Guests Can Avail Iron Box & Iron Board. Safe Deposit Locker Service</p>
                                  </li>
                                  
                              </ul>
                          </div>
                      </div>
                  </div>
            <?php } ?>      
          <!-- /Row -->
      </div>
      <!-- /container -->


  </main>

         <?php 
$this->load->view('layouts/footer');
?> 
