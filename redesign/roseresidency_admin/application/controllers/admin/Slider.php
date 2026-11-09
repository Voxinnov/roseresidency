<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Slider';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['slider_imptint']=$this->Common_model->get_contents('rose_slider',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/slider', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Slider';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['slider_imptint']=$this->Common_model->get_contents('rose_slider',array('slider_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/slider_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
		$status	=	$this->input->post('status');
        $branch = $this->input->post('branch');
		//	create_folder('about');
			$config['upload_path']  = "./upload/slider";
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
                $source             = "./upload/slider/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  
                echo "Failed! to upload image" ;
            }
				$ins	=	array(
							'slider_title'	=>		$name,
							'slider_caption' =>		$caption,
							'slider_img' =>		$main_img,
                            'hotel_id' =>       $branch,
							'slider_status'	=>		$status
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'rose_slider');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/slider');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Slider';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['slider_imptint']=$this->Common_model->get_contents('rose_slider',array('slider_id'=>$id));
		//	print_r( $data['slider_imptint']);	 exit;
        $this->load->view('admin/slider_edit', $data);
    }
   	 public function update(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		//	create_folder('about');
			$config['upload_path']  = "./upload/slider";
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
                $source             = "./upload/slider/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  $main_img= $this->input->post('hidden');
               
            }
				$ins	=	array(
							'slider_title'	=>		$name,
							'slider_caption' =>		$caption,
							'slider_img' =>		$main_img,
							'slider_status'	=>		$status,
							'slider_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_slider',$ins,array('slider_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/slider');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_slider',array('slider_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/slider');
	}


}