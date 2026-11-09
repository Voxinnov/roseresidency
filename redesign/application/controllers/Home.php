<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    	function __construct() {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model("Common");
        $this->load->model("Student_model");
        $this->load->library('session');
    }


	public function index()
	{
	    if(!isset($_SESSION['cart_session']))
	    {
	    $session = 'frz'. rand();
	    $this->session->set_userdata('cart_session', $session);
	    }
	    $data['pagetitle']= 'Home';
		$data['slider_rose']=$this->Common->get_contents('rose_slider',array('slider_status'=>1, 'hotel_id' =>'home'));
		$data['about_rose']=$this->Common->get_contents('rose_about',array('about_id'=>1));
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>'kolenchery'));
		
		$this->load->view('home',$data);
	}
	
	public function about()
	{
	  
		$data['pagetitle']= 'About';
		$data['about_rose']=$this->Common->get_contents('rose_about',array('about_id'=>1));
		//$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		$this->load->view('about',$data);
	}

	public function branch($id='kolenchery')
	{
	  $data['pagetitle']= $id;
		$data['slider_rose']=$this->Common->get_contents('rose_slider',array('slider_status'=>1, 'hotel_id' =>$id));
	$data['about_rose']=$this->Common->get_contents('rose_services',array('hotel_id'=>$id));
	$data['rooms_rose']=$this->Common->get_contents('rose_category',array('hotel_id'=>$id, 'category_status' => 1));
	$data['facility_rose']=$this->Common->get_contents('rose_facilities',array('hotel_id'=>$id, 'service_status' =>1));
	$data['testi_rose']=$this->Common->get_contents('rose_testi',array('testi_status'=>1, 'hotel_id' =>$id));
	$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		$this->load->view('branch',$data);
	}

	public function aboutbranch($id='kolenchery')
	{
	   
		$data['pagetitle']= $id;
		$data['about_rose']=$this->Common->get_contents('rose_services',array('hotel_id'=>$id));
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		$this->load->view('about_branch',$data);
	}

	public function facilitybranch($id='kolenchery')
	{
	   
		$data['pagetitle']= $id;
		$data['facility_rose']=$this->Common->get_contents('rose_facilities',array('hotel_id'=>$id));
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		$this->load->view('facilities',$data);
	}

	public function rooms($id='kolenchery')
	{
	   
		$data['pagetitle']= $id;
		$data['rooms_rose']=$this->Common->get_contents('rose_category',array('hotel_id'=>$id, 'category_status' => 1));
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		$this->load->view('rooms',$data);
	}

	public function roomdetails($id )
	{
	   
		$data['pagetitle']= 'Room Details';
		$data['rooms_rose']=$this->Common->get_contents('rose_category',array('category_id'=>$id, 'category_status' => 1));
		foreach ($data['rooms_rose'] as $keys => $objects) 
	    	{
	    	  $branchid= $objects->hotel_id;  
	    	}
	    	$data['pagetitle']= $branchid;
		$data['service_rose']=$this->Common->get_contents('rose_servicelist',array('hotel_id'=>$branchid ));
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$branchid));
		$data['service_rose_count'] = count($data['service_rose']);
		//print_r($data['service_rose_count']);exit;
		$this->load->view('roomsdetails',$data);
	}

	public function tariff($id='kolenchery')
	{
	   
		$data['pagetitle']= $id;
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		if($id=='kolenchery')
		{
		$this->load->view('tariff_kolenchery',$data);	
		}
		if($id=='perumbavoor')
		{
		$this->load->view('tariff_perumbavoor',$data);	
		}
		if($id=='perinthalmanna')
		{
		$this->load->view('tariff_perinthalmanna',$data);	
		}
		if($id=='irinjalakuda')
		{
		$this->load->view('tariff_irinjalakuda',$data);	
		}
		
	}
	
		public function nearestplace($id='kolenchery')
	{
	   
		$data['pagetitle']= $id;
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		if($id=='kolenchery')
		{
		$this->load->view('nearest_kolenchery',$data);	
		}
		if($id=='perumbavoor')
		{
		$this->load->view('nearest_perumbavoor',$data);	
		}
		if($id=='perinthalmanna')
		{
		$this->load->view('nearest_perinthalmanna',$data);	
		}
		if($id=='irinjalakuda')
		{
		$this->load->view('nearest_irinjalakuda',$data);	
		}
		
	}
	public function gallery($id='kolenchery')
	{
	   
		$data['pagetitle']= $id;
		$data['gallery_rose']=$this->Common->get_contents('rose_gallery',array('hotel_id'=>$id));
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		//print_r($data['gallery_rose']);exit;
		$this->load->view('gallery',$data);
	}
	public function contact($id='kolenchery')
	{
		$data['pagetitle']= $id;
		$data['contact_rose']=$this->Common->get_contents('rose_contact',array('hotel_id'=>$id));
		$this->load->view('contact',$data);
	}
	
	
		

		public function sendmail()
	{
		
	$first_name 			=	$this->input->post('name1');
		$course			=	$this->input->post('course1');
			$email	=	$this->input->post('email1');
			$phone	=	$this->input->post('phone1');
			$comment	=	strip_tags($this->input->post('comment1'));
		//	print_r($this->input->post('name1'));exit;
				$ins	=	array(
							'course_reg_name'	=>		$first_name,
							'course_reg_email' =>		$email,
							'course_reg_phn' =>		$phone,
							'course_reg_course'	=>		$course,
							'course_reg_price' =>		0,
							'course_reg_trn_id'	=>		' ',
							'course_reg_status'	=>		1,
							'course_reg_comnt'	=>		$comment
						);
					//	print_r($ins);exit;
							$this->Common->insert($ins,'imprint_course_reg');
			$sub = 'Imprints Acadamy Registration';
			   $ema='contactimprintsacademy@gmail.com';
   $message = '<table width="600"  border="0" align="center" bordercolor="#000033" bgcolor="#CCCCCC">';
   $message .= '<tr align="center" style="color:#FFFF00;font-size:18px;font-weight:bold">';
   $message .= '<td colspan="4" bgcolor="#000066">Customer Enquiry</td>';
   $message .= '<tr><td style="font-weight:bold">Name : '.'</td><td>'.$first_name.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Email : '.'</td><td>'.$email.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Contact No : '.'</td><td>'.$phone.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Course : '.'</td><td>'.$course.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Comments : '.'</td><td>'.$comment.'</td></tr></table>';
   $this->Common->sendMail($ema, $sub, $message);
	redirect('courses');
			
	}
	
			public function sendmailcontact()
	{
	//	print_r('Enter');exit;
	$first_name 			=	$this->input->post('fname');
	$last_name 			=	$this->input->post('lname');
			$email	=	$this->input->post('email');
			$phone	=	$this->input->post('phone');
			$postcode	=	$this->input->post('postcode');
			$comment	=	strip_tags($this->input->post('message'));
			
		//	print_r($first_name);exit;
			$sub = 'St Alphonsa Disability Services  Contact Us';
			   $ema='contact@stalphonsads.com.au';
   $message = '<table width="600"  border="0" align="center" bordercolor="#000033" bgcolor="#CCCCCC">';
   $message .= '<tr align="center" style="color:#FFFF00;font-size:18px;font-weight:bold">';
   $message .= '<td colspan="4" bgcolor="#000066">Customer Enquiry</td>';
   $message .= '<tr><td style="font-weight:bold">First Name : '.'</td><td>'.$first_name.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Last Name : '.'</td><td>'.$last_name.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Email : '.'</td><td>'.$email.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Contact No : '.'</td><td>'.$phone.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Postcode : '.'</td><td>'.$postcode.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Comments : '.'</td><td>'.$comment.'</td></tr></table>';
   //print_r($message);exit;
   $this->Common->sendMail($ema, $sub, $message,$email);
  // echo '<script>alert("Message Sent... Thanks For Contacing Us...We will be in touch soon...");</script>';
 // print_r('Sussessfully Send the Mail');
			redirect('contact');
	}
	
		public function quickcontact()
	{
		
	$first_name 			=	$this->input->post('name');
			$email	=	$this->input->post('email');
			$phone	=	$this->input->post('phone');
			
			
			$sub = 'Imprints Acadamy Quick Contact Us';
			   $ema='contact@stalphonsads.com.au';
   $message = '<table width="600"  border="0" align="center" bordercolor="#000033" bgcolor="#CCCCCC">';
   $message .= '<tr align="center" style="color:#FFFF00;font-size:18px;font-weight:bold">';
   $message .= '<td colspan="4" bgcolor="#000066">Customer Enquiry</td>';
   $message .= '<tr><td style="font-weight:bold">Name : '.'</td><td>'.$first_name.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Email : '.'</td><td>'.$email.'</td></tr>';
   $message .= '<tr><td style="font-weight:bold">Contact No : '.'</td><td>'.$phone.'</td></tr></table>';
   $this->Common->sendMail($ema, $sub, $message);
  
		redirect('courses');
	}
}
