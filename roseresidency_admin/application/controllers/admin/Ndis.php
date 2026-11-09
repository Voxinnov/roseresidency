<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ndis extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'NDIS';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['ndis_alphonsa']=$this->Common_model->get_contents('joance_ndis',array('ndis_id'=>1));
			//print_r( $data['ndis_imptint']);	 exit;
        $this->load->view('admin/ndis', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
	
			$desc	=	$this->input->post('desc');
		
			//$upload 	=	$this->input->post('upload');
		//	create_folder('ndis');
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
							'ndis_title'	=>		$name,
							'ndis_desc' =>		$desc,
						
							'ndis_img' =>		$main_img,
							'ndis_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('joance_ndis',$ins,array('ndis_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		redirect('admin/ndis');
    }

    


}