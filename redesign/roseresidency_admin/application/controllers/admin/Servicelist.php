<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicelist extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Servicelist';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['servicelist_rose']=$this->Common_model->get_contents('rose_servicelist',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/servicelist', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Servicelist';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['servicelist_rose']=$this->Common_model->get_contents('rose_servicelist',array('servicelist_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/servicelist_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$branch = $this->input->post('branch');
			$authr	=' ';
			$status	=	$this->input->post('status');
		
				$ins	=	array(
							'servicelist_title'	=>		$name,
							'servicelist_desc' =>		$caption,
							'hotel_id' =>		$branch,
						);
				$this->Common_model->insert($ins,'rose_servicelist');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/servicelist');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Servicelist';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['servicelist_rose']=$this->Common_model->get_contents('rose_servicelist',array('servicelist_id'=>$id));
		//	print_r( $data['servicelist_rose']);	 exit;
        $this->load->view('admin/servicelist_edit', $data);
    }
   	 public function update(){
         //$id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('desc');
			$authr	=	$this->input->post('authr');
			$id	=	$this->input->post('id');
		
				$ins	=	array(
							'servicelist_title'	=>		$name,
							'servicelist_desc' =>		$caption,
							'servicelist_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_servicelist',$ins,array('servicelist_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/servicelist');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_servicelist',array('servicelist_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/servicelist');
	}


}