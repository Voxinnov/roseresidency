<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
     <?php if($pagetitle=='perumbavoor')
                     { ?>
    <title>Hotel Travellers Inn </title>
    <?php }  else if($pagetitle=='north_paravur')
                     { ?>
    <title>Jaya Tourist Home </title>
    <?php }
    else { ?>
    <title>Rose Residency </title>
    <?php } ?>
    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>template/img/" type="image/x-icon">
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

<body> 

    <!--<div id="preloader">
        <div data-loader="circle-side"></div>
    </div>--><!-- /Page Preload -->

   <!-- <div class="layer"></div>--><!-- Opacity Mask -->

    <header class="reveal_header">
        <div class="container-fluid">
            <div class="row align-items-center">
       
<div class="col-6">
    <?php if ($pagetitle == 'perumbavoor') { ?>

        <a href="<?php echo base_url(); ?>" class="logo_normal">
            <img src="<?php echo base_url(); ?>template/img/travellerslogo_white.png" style="width:280px" alt="">
        </a>
        <a href="<?php echo base_url(); ?>" class="logo_sticky">
            <img src="<?php echo base_url(); ?>template/img/travellerslogo.png" style="width:280px" alt="">
        </a>

    <?php } elseif ($pagetitle == 'north_paravur') { ?>

        <a href="<?php echo base_url(); ?>" class="logo_normal">
            <img src="<?php echo base_url(); ?>template/img/jthlogo_white.png" style="width:280px" alt="">
        </a>
        <a href="<?php echo base_url(); ?>" class="logo_sticky">
            <img src="<?php echo base_url(); ?>template/img/jthlogo.png" style="width:280px" alt="">
        </a>

    <?php } else { ?>

        <a href="<?php echo base_url(); ?>" class="logo_normal">
            <img src="<?php echo base_url(); ?>template/img/rrlogo_white.png" style="width:280px" alt="">
        </a>
        <a href="<?php echo base_url(); ?>" class="logo_sticky">
            <img src="<?php echo base_url(); ?>template/img/rrlogo.png" style="width:280px" alt="">
        </a>

    <?php } ?>
</div>

                <div class="col-6">
                    <nav>
                        <ul>
                            <li><a href="<?php echo base_url();  ?>contact/<?php echo  $pagetitle; ?>" class="btn_1 btn_scrollto">Book Now</a></li>
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
        <div class="logo_panel"><img src="<?php echo base_url(); ?>template/img/rrlogo.png" style="width:280px" alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <li class=""><a href="<?php echo base_url(); ?>home/<?php echo  $pagetitle; ?>">Home</a></li>
                    <li><a href="<?php echo base_url();?>about/<?php echo  $pagetitle; ?>">About</a></li>
                    <li><a href="<?php echo base_url();  ?>rooms/<?php echo  $pagetitle; ?>">Rooms</a></li>
                    <li><a href="<?php echo base_url(); ?>facilities/<?php echo  $pagetitle; ?>">Facilities</a></li>
                     <li><a href="<?php echo base_url();  ?>tariff/<?php echo  $pagetitle; ?>">Tariff</a></li>
                    <li><a href="<?php echo base_url();  ?>gallery/<?php echo  $pagetitle; ?>">Gallery</a></li>
                    <?php if($pagetitle=='kolenchery' || $pagetitle == 'perithalmanna' || $pagetitle == 'irinjalakuda')
                    { ?>
                    
                     <li><a href="<?php echo base_url();  ?>nearestplace/<?php echo  $pagetitle; ?>">Nearest Places</a></li>
                     <?php } ?>
                    <li><a href="<?php echo base_url();  ?>contact/<?php echo  $pagetitle; ?>">Contact</a></li>
                   
                </ul>
              <!--  <div class="panel_footer">
                    <div class="phone_element"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+91-484-2765508,2761556</span></a></div>
                </div>-->
                <!-- /panel_footer -->
            </nav>
        </div>
        <!-- /sidebar-navigation -->
    </div>