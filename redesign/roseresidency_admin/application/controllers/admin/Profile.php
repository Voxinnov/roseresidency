<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Profile';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['profile_imptint']=$this->Common_model->get_contents('joance_course_reg',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/profile', $data);
    }
	   
   public function view($id){
         $data = array();
        $data['page_title'] = 'Profile';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['profile_imptint']=$this->Common_model->get_contents('joance_course_reg',array('course_reg_id'=>$id));
		//	print_r( $data['profile_imptint']);	 exit;
        $this->load->view('admin/profile_view', $data);
    }
   public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('joance_course_reg',array('course_reg_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/profile');
	}


}