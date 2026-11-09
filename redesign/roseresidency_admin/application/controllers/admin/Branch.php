<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branch extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Branch';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
        
		$data['products_alphonsa']=$this->Common_model->get_contents('rose_services',array());
			//print_r( $data['about_alphonsa']);	 exit;
        $this->load->view('admin/products', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Branch';
        $data['count'] = $this->Common_model->get_user_total();
        $data['category_imptint']=$this->Common_model->get_contents('rose_category',array('category_status'=>1));
        //	print_r( $data['count']);	 
		//$data['products_alphonsa']=$this->Common_model->get_contents('rose_services',array('products_status'=>1));
			//print_r( $data['about_alphonsa']);	 exit;
        $this->load->view('admin/products_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
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
                  
                echo "Failed! to upload image" ;
            }
				$ins	=	array(
							'products_title'	=>		$name,
							'products_caption' =>		$caption,
							'products_img' =>		$main_img,
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'rose_services');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/branch');
    }
   public function edit($id){
         $data = array();
         
        $data['page_title'] = 'Branch';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['products_alphonsa']=$this->Common_model->get_contents('rose_services',array('products_id'=>$id));
		$data['category_imptint']=$this->Common_model->get_contents('rose_category',array('category_status'=>1));
		//	print_r( $data['products_alphonsa']);	 exit;
        $this->load->view('admin/products_edit', $data);
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
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_services',array('products_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/branch');
	}


}
