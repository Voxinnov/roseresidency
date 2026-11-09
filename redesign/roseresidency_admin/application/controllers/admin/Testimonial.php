<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Testimonial';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['testi_imptint']=$this->Common_model->get_contents('rose_testi',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/testimonial', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Testimonial';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//$data['testi_imptint']=$this->Common_model->get_contents('rose_testi',array('testi_status'=>1));
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/testimonial_add', $data);
    }
	
		
	 public function submit(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$place 			=	$this->input->post('place');
			$caption	=	$this->input->post('caption');
            $branch = $this->input->post('branch');
		$status	=	$this->input->post('status');
			$config['upload_path']  = "./upload/testinonial";
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
                $source             = "./upload/testinonial/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                $main_img=" ";  
               // echo "Failed! to upload image" ;
            }
				$ins	=	array(
							'testi_name'	=>		$name,
							'testi_content' =>		$caption,
							'testi_place' =>		$place,
							'testi_img' =>		$main_img,
                            'hotel_id' =>       $branch,
							'testi_status'	=>		$status
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'rose_testi');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/testimonial');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Testimonial';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['testi_imptint']=$this->Common_model->get_contents('rose_testi',array('testi_id'=>$id));
		//	print_r( $data['testi_imptint']);	 exit;
        $this->load->view('admin/testimonial_edit', $data);
    }
   	 public function update(){
         //$id 			=	1;
			$name 			=	$this->input->post('title');
			$place 			=	$this->input->post('place');
			$caption	=	$this->input->post('caption');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		//	$hidden	=	$this->input->post('hide');
		//	create_folder('about');
			$config['upload_path']  = "./upload/testinonial";
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
                $source             = "./upload/testinonial/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  
                $main_img=$this->input->post('hidden');
            }
				$ins	=	array(
							'testi_name'	=>		$name,
							'testi_content' =>		$caption,
							'testi_place' =>		$place,
							'testi_img' =>		$main_img,
							'testi_status'	=>		$status,
							'testi_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_testi',$ins,array('testi_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/testimonial');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_testi',array('testi_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/testimonial');
	}


}