<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Appartment Booking';
        $data['count'] = $this->Common_model->get_user_total();
		$data['booking_Joance_Holidays']=$this->Common_model->get_contents('booking',array('booking_type'=>1));
		$data['booking_rooms']=$this->Common_model->get_contents('joance_category',array('category_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/booking_list', $data);
    }
    
     public function packages(){
         $data = array();
        $data['page_title'] = 'Package Booking';
        $data['count'] = $this->Common_model->get_user_total();
		$data['booking_Joance_Holidays']=$this->Common_model->get_contents('booking',array('booking_type'=>2));
		$data['booking_packages']=$this->Common_model->get_contents('joance_services',array('products_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/package_booking_list', $data);
    }
    
    public function view($id){
         $data = array();
        $data['page_title'] = 'Apartments';
        $data['booking_Joance_Holidays']=$this->Common_model->get_contents('booking',array('booking_id'=>$id));
        $data['booking_rooms']=$this->Common_model->get_contents('joance_category',array('category_status'=>1));
	//	$data['booking_Joance Holidays_details']=$this->Common_model->query("SELECT * FROM `booking` INNER JOIN cartbox ON booking_sess=cartbox_session INNER JOIN alphonsa_services ON cartbox_pid=products_id where booking_id=$id");
		//	print_r( $data['category_imptint']);	 exit;
        $this->load->view('admin/booking_details', $data);
    }
	 
	    public function package_view($id){
         $data = array();
        $data['page_title'] = 'Apartments';
        $data['booking_Joance_Holidays']=$this->Common_model->get_contents('booking',array('booking_id'=>$id));
		$data['booking_packages']=$this->Common_model->get_contents('joance_services',array('products_status'=>1));
	//	print_r(	$data['booking_packages']); exit;
	//	$data['booking_Joance Holidays_details']=$this->Common_model->query("SELECT * FROM `booking` INNER JOIN cartbox ON booking_sess=cartbox_session INNER JOIN alphonsa_services ON cartbox_pid=products_id where booking_id=$id");
		//	print_r( $data['category_imptint']);	 exit;
        $this->load->view('admin/booking_package_details', $data);
    } 
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('joance_category',array('category_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/category');
	}


}