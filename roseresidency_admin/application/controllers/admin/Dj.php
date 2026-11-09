<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dj extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'DJ';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['blogs_imptint']=$this->Common_model->get_contents('jacob_dj',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/dj', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Repair';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['blogs_imptint']=$this->Common_model->get_contents('jacob_dj',array('blogs_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/dj_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$authr	=	$this->input->post('authr');
		$status	=	$this->input->post('status');
		//	create_folder('about');
			$config['upload_path']  = "./upload/dj";
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
                $source             = "./upload/dj/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  
                echo "Failed! to upload image" ;
            }
				$ins	=	array(
							'dj_title'	=>		$name,
							'dj_desc' =>		$caption,
							'dj_img' =>		$main_img,
							'dj_status'	=>		$status
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'jacob_dj');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/repair');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Blogs';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['blogs_imptint']=$this->Common_model->get_contents('jacob_dj',array('dj_id'=>$id));
		//	print_r( $data['blogs_imptint']);	 exit;
        $this->load->view('admin/dj_edit', $data);
    }
   	 public function update(){
         //$id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('desc');
			$authr	=	$this->input->post('authr');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		//	create_folder('about');
			$config['upload_path']  = "./upload/blogs";
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
                $source             = "./upload/dj/".$data['file_name'] ;
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
							'dj_title'	=>		$name,
							'dj_desc' =>		$caption,
							'dj_img' =>		$main_img,
							'dj_status'	=>		$status,
							'dj_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('jacob_dj',$ins,array('dj_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/dj');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('jacob_dj',array('dj_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/dj');
	}


}