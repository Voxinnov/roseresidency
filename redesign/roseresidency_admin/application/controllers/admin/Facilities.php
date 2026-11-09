<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facilities extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Facilities';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['otherservices_tribulds']=$this->Common_model->get_contents('rose_facilities',array());
		//print_r( $data['otherservices_tribulds']);	 exit;
        $this->load->view('admin/otherservices', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Facilities';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['otherservices_tribulds']=$this->Common_model->get_contents('rose_facilities',array('service_status'=>1));
			//print_r( $data['about_tribulds']);	 exit;
        $this->load->view('admin/otherservices_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
		$status	=	$this->input->post('status');
        $branch = $this->input->post('branch');
			$config['upload_path']  = "./upload/Otherservices";
            $config['allowed_types']= 'gif|jpg|png|jpeg|pdf';
            $config['max_size']     = '92000';
            $config['max_width']    = '92000';
            $config['max_height']   = '92000';
            $this->upload->initialize($config);
            $main_img="";
            if ( $this->upload->do_upload("image"))
            {
                $data = $this->upload->data();
                
                    $data = $this->upload->data();

                //-- set upload path
                $source             = "./upload/Otherservices/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  
                echo "Failed! to upload image" ;
            }
         
            
			$ins	=	array(
							'service_title'	=>		$name,
							'service_content' =>		$caption,
							'service_img' =>		$main_img,
                             'hotel_id' =>       $branch,
							'service_status'	=>		$status
						);
					print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'rose_facilities');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/facilities');
    }
   public function edit($id){
         $data = array();
         
        $data['page_title'] = 'Facilities';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['otherservices_tribulds']=$this->Common_model->get_contents('rose_facilities',array('service_id'=>$id));
		//	print_r( $data['otherservices_tribulds']);	 exit;
        $this->load->view('admin/otherservices_edit', $data);
    }
   	 public function update(){
         $id 			=	$this->input->post('id');
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
			$config['upload_path']  = "./upload/Otherservices";
            $config['allowed_types']= 'gif|jpg|png|jpeg|pdf';
            $config['max_size']     = '92000';
            $config['max_width']    = '92000';
            $config['max_height']   = '92000';
            $this->upload->initialize($config);
            $main_img="";
            if ( $this->upload->do_upload("image"))
            {
                $data = $this->upload->data();
                
                    $data = $this->upload->data();

                //-- set upload path
                $source             = "./upload/Otherservices/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  $main_img= $this->input->post('hidden');
               
            }
            
				$ins	=	array(
							'service_title'	=>		$name,
							'service_content' =>		$caption,
								'service_img' =>		$main_img,
							'service_status'	=>		$status,
							'service_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_facilities',$ins,array('service_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/facilities');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_facilities',array('service_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/facilities');
	}


}
