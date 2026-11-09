<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mentalhealth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Mental health service';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['mental_alphonsa']=$this->Common_model->get_contents('joance_mental',array('mental_id'=>1));
			//print_r( $data['about_alphonsa']);	 exit;
        $this->load->view('admin/mental', $data);
    }
	 

   	 public function update(){
         //$id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('desc');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		//	create_folder('about');
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
              $main_img = $this->input->post('hidden');  
               // echo "Failed! to upload image" ;
            }
				$ins	=	array(
							'mental_title'	=>		$name,
							'mental_desc' =>		$caption,
							'mental_img' =>		$main_img,
							'mental_status'	=>		$status,
							'mental_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('joance_mental',$ins,array('mental_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/mentalhealth');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('joance_mental',array('mental_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/mentalhealth');
	}


}