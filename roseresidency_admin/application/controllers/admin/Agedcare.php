<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agedcare extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Aged care service';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['aged_alphonsa']=$this->Common_model->get_contents('alphonsa_aged',array('aged_id'=>1));
			//print_r( $data['aged_alphonsa']);	 exit;
        $this->load->view('admin/aged', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
	
			$desc	=	$this->input->post('desc');
		
			//$upload 	=	$this->input->post('upload');
		//	create_folder('aged');
			$config['upload_path']  = "./upload";
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
                $source             = "./upload/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  $main_img= $this->input->post('hidden');
            }
				$ins	=	array(
							'aged_title'	=>		$name,
							'aged_desc' =>		$desc,
						
							'aged_img' =>		$main_img,
							'aged_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('alphonsa_aged',$ins,array('aged_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		redirect('admin/agedcare');
    }

    


}