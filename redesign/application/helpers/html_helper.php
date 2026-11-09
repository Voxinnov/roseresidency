<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//action links in dropdown with ci=onfirm delete
function action_links($controller=FALSE,$ids=FALSE){
	?>
	<div class="btn-group">
	  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	    <i class="fa fa-gear"></i>
	    <span class="sr-only">Toggle Dropdown</span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	    <li><a href="<?php echo base_url($controller.'/create/'.$ids."/view"); ?>">Preview</a></li>
	    <li><a href="<?php echo base_url($controller.'/create/'.$ids); ?>">Edit</a></li>
	    <li><a onclick="return confirm('Are you sure?')" href="<?php echo base_url($controller.'/delete/'.$ids); ?>">Delete</a></li>
	    
	  </ul>
	</div>
	<?php
}
//action links in dropdown with out confirm delete
function action_links_array($array){
	?>
	<div class="btn-group">
      <button type="button" class="btn btn-danger"><i class="fa fa-gear"></i></button>
	  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	    <span class="caret"></span>
	    <span class="sr-only">Toggle Dropdown</span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	  	<?php if(!empty($array)){ 
	  		foreach ($array as $key => $value) {
	  		?>
	  		<li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
	  		<?php
	  		}
	  	 } ?>
	    
	    
	    
	  </ul>
	</div>
	<?php
}
//action links with buttons and confirm delete
function action_link_buttons($controller=FALSE,$ids=FALSE){ ?>
	<a href="<?php echo base_url($controller.'/create/'.$ids.'/view'); ?>" class="btn btn-info">
      <i class="fa fa-eye"></i>
    </a> |
    <a href="<?php echo base_url($controller.'/create/'.$ids); ?>" class="btn btn-success">
      <i class="fa fa-pencil"></i>
    </a> |
    <a onclick="return confirm('Are you sure?')" href="<?php echo base_url($controller.'/delete/'.$ids); ?>" class="btn btn-danger">
      <i class="fa fa-trash"></i>
    </a>
<?php
}
//add new url button style
function add_new_button($url=FALSE){ ?>
<a href="<?php echo base_url($url); ?>" class="btn btn-success"><i class="fa fa-plus"></i>  Add New</a>
<?php }
//edit url button style
function edit_button($url=FALSE){ ?>
<a href="<?php echo base_url($url); ?>" class="btn btn-success"><i class="fa fa-pencil"></i>  Edit</a>
<?php }
//listing url button style
function list_button($url=FALSE){ ?>
<a href="<?php echo base_url($url); ?>" class="btn btn-success"><i class="fa fa-list"></i>  List</a>
<?php }