<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Studentdetails extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Student Details';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['student_details_imptint']=$this->Common_model->get_contents('student_details',array());
		//	print_r( $data['student_details_imptint']);	 exit;
        $this->load->view('admin/student_details', $data);
    }

   public function view($id){
         $data = array();
         
        $data['page_title'] = 'Student Details';
        $data['count'] = $this->Common_model->get_user_total();
      //  print_r( $id);	 exit;
		$data['student_details_imptint']=$this->Common_model->get_contents('student_details',array('st_id'=>$id));
		$student_details_imptint=$this->Common_model->get_contents('student_details',array('st_id'=>$id));
		//	print_r( $data['student_details_imptint']);	 exit;
		foreach($student_details_imptint as $key)
		{
		    $type = $key->course_type;
		}
		
		if($type== 'licence_exam')
		{
		        $this->load->view('admin/licence_exam', $data);
		}
		
			if($type== 'entrance_exam')
		{
		        $this->load->view('admin/entrance_exam', $data);
		}
		
    }


}
