<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Participantsgroup extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Participant sgroup';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['special_imptint']=$this->Common_model->get_contents('imptint_special',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/participants', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Participants group';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['special_imptint']=$this->Common_model->get_contents('imptint_special',array('special_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/participants_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
		$status	=	$this->input->post('status');
	
				$ins	=	array(
							'special_title'	=>		$name,
							'special_status'	=>		$status
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'imptint_special');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/Participantsgroup');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'special';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['special_imptint']=$this->Common_model->get_contents('imptint_special',array('special_id'=>$id));
		//	print_r( $data['special_imptint']);	 exit;
        $this->load->view('admin/participants_edit', $data);
    }
   	 public function update(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
	
				$ins	=	array(
							'special_title'	=>		$name,
							'special_status'	=>		$status,
							'special_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('imptint_special',$ins,array('special_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/Participantsgroup');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('imptint_special',array('special_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/Participantsgroup');
	}


}
