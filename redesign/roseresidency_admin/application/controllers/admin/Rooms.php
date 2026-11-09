<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rooms extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Rooms';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['category_imptint']=$this->Common_model->get_contents('rose_category',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/category', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Rooms';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['category_imptint']=$this->Common_model->get_contents('rose_category',array('category_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/category_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$price	=	$this->input->post('price');
			$branch = $this->input->post('branch');
			$authr	=' ';
		$status	=	$this->input->post('status');
		//	create_folder('about');
			$config['upload_path']  = "./upload/category";
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
                $source             = "./upload/category/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  
                echo "Failed! to upload image" ;
            }
				$ins	=	array(
							'category_title'	=>		$name,
							'category_desc' =>		$caption,
							'category_img' =>		$main_img,
							'category_submit' =>		$authr,
							//'category_price' =>		$price,
							'hotel_id' =>		$branch,
							'category_status'	=>		$status
						);
					//print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'rose_category');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/rooms');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Rooms';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['category_imptint']=$this->Common_model->get_contents('rose_category',array('category_id'=>$id));
		//	print_r( $data['category_imptint']);	 exit;
        $this->load->view('admin/category_edit', $data);
    }
   	 public function update(){
         //$id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('desc');
			$authr	=	$this->input->post('authr');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		$price	=	$this->input->post('price');
		//	create_folder('about');
			$config['upload_path']  = "./upload/category";
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
                $source             = "./upload/category/".$data['file_name'] ;
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
							'category_title'	=>		$name,
							'category_desc' =>		$caption,
							'category_img' =>		$main_img,
							'category_submit' =>		$authr,
							//'category_price' =>		$price,
							'category_status'	=>		$status,
							'category_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_category',$ins,array('category_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/rooms');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_category',array('category_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/rooms');
	}


}