<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search<?php echo base_url();?>optimum."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="<?php echo base_url();?>optimum/images/admin.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo $this->session->userdata('name'); ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            
                            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url('admin/dashboard') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                            <!--             <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Booking<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
							 <li> <a href="<?php echo base_url('admin/booking') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">Room Booking</span></a></li>
							 <li> <a href="<?php echo base_url('admin/booking/packages') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">Package Booking</span></a></li>
							 
                      </ul>
                    </li> -->
                    <li> <a href="<?php echo base_url('admin/about') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">About</span></a> </li>
                     <li> <a href="<?php echo base_url('admin/branch') ?>" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">About Hotel</span></a>
                       
                    </li>
                   <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Rooms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                             <li> <a href="<?php echo base_url('admin/rooms/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
							 <li> <a href="<?php echo base_url('admin/rooms') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
							 
                      </ul>
                    </li>
                     <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Service List<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                             <li> <a href="<?php echo base_url('admin/servicelist/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
                             <li> <a href="<?php echo base_url('admin/servicelist') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
                             
                      </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Tourist Destination<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                             <li> <a href="<?php echo base_url('admin/destination/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
               <li> <a href="<?php echo base_url('admin/destination') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
               
                      </ul>
                    </li>
                   
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Slider<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                             <li> <a href="<?php echo base_url('admin/slider/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
							 <li> <a href="<?php echo base_url('admin/slider') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
							 
                      </ul>
                    </li>
                   
                      <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Testimonials<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                             <li> <a href="<?php echo base_url('admin/testimonial/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
							 <li> <a href="<?php echo base_url('admin/testimonial') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
							 
                      </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu">Our Facilities<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                             <li> <a href="<?php echo base_url('admin/facilities/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
							 <li> <a href="<?php echo base_url('admin/facilities') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
							 
                      </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class  ="waves-effect"><i class="icon-user p-r-10"></i> <span class="hide-menu"> Gallery<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                        <!--        <li> <a href="<?php echo base_url('admin/gallery/add_type') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add Type</span></a></li>
               <li> <a href="<?php echo base_url('admin/gallery/gallerytype') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View Type</span></a></li> -->
                             <li> <a href="<?php echo base_url('admin/gallery/add') ?>"><i class="fa fa-plus p-r-10"></i><span class="hide-menu">Add</span></a></li>
               <li> <a href="<?php echo base_url('admin/gallery') ?>"><i class="fa fa-cog p-r-10"></i><span class="hide-menu">View</span></a></li>
               
                      </ul>
                    </li>
                 <li> <a href="<?php echo base_url('admin/contact') ?>" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Contact</span></a> </li>
                    
                    <li><a href="<?php echo base_url('auth/logout') ?>" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>