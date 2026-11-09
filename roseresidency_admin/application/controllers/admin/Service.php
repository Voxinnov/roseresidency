<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Service';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['service_imptint']=$this->Common_model->get_contents('joance_service',array('service_id'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/service', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
	
			$desc	=	$this->input->post('desc');
		
		
				$ins	=	array(
							'service_title'	=>		$name,
							'service_desc' =>		$desc,
						
							'service_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('joance_service',$ins,array('service_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		redirect('admin/service');
    }

    


}