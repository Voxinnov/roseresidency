<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Contact';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['contact_rose']=$this->Common_model->get_contents('rose_contact');
			//print_r( $data['Contact_alphonsa']);	 exit;
        $this->load->view('admin/contact_list', $data);
    }
	
		
	 public function submit(){
         $id 			=	$this->input->post('id');	;
			$title 			=	$this->input->post('title');
			$addrs 			=	$this->input->post('addrs');
			$working 			=	$this->input->post('working');
			$phn1	=	$this->input->post('phn1');
			$phn2	=	$this->input->post('phn2');
			$email	=	$this->input->post('email');
			$fb	=	$this->input->post('fb');
			$inst	=	$this->input->post('inst');
			$youtube	=	$this->input->post('youtube');
			$map	=	$this->input->post('map');
		
				$ins	=	array(
							'contact_addrs'	=>		$addrs,
							'contact_frmtitl'	=>		$title,
							'contact_workng'	=>		$working,
							'contact_phn1' =>		$phn1,
							'contact_phn2' =>		$phn2,
							'contact_email' =>		$email,
							'contact_fb' =>		$fb,
							'contact_inst' =>		$inst,
							'contact_youtube' =>		$youtube,
							'contact_map' =>		$map,
							'contact_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_contact',$ins,array('contact_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		redirect('admin/contact');
    }
public function edit($id){
         $data = array();
         
        $data['page_title'] = 'Contact';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['contact_rose']=$this->Common_model->get_contents('rose_contact',array('contact_id'=>$id));
		//	print_r( $data['products_alphonsa']);	 exit;
        $this->load->view('admin/contact', $data);
    }
   	 public function update(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$id	=	$this->input->post('id');
    		$hidden	=	$this->input->post('hide');
		//	create_folder('about');
			$config['upload_path']  = "./upload/services";
            $config['allowed_types']= 'gif|jpg|png|jpeg';
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
                $source             = "./upload/services/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  
                $main_img=$hidden;
            }
				$ins	=	array(
							'products_title'	=>		$name,
							'products_caption' =>		$caption,
							'products_img' =>		$main_img,
							'products_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_services',$ins,array('products_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/branch');
    } 
    


}