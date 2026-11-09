<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destination extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Tourist Destinations';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['subcategory_trimbuild']=$this->Common_model->get_contents('subcategory',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/subcategory', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Tourist Destinations';
        $data['count'] = $this->Common_model->get_user_total();
        $data['category_imptint']=$this->Common_model->get_contents('rose_category',array());
        $this->load->view('admin/subcategory_add', $data);
    }
	
		
	 public function submit(){
         //$id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('desc');
			//$maincategory =   $this->input->post('maincategory');
            $maincategory=serialize($maincategory);
            //print_r($maincategory);exit;
		$status	=	$this->input->post('status');
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
							'subcategory_name'	=>		$name,
                            'subcategory_desc' =>$caption,
                            'subcategory_img' =>$main_img,
							'subcategory_status' =>		$status
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->insert($ins,'subcategory');
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/destination');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Subcategory';
        $data['count'] = $this->Common_model->get_user_total();
          $data['category_imptint']=$this->Common_model->get_contents('rose_category',array());
        //	print_r( $data['count']);	 
		$data['subcategory_trimbuild']=$this->Common_model->get_contents('subcategory',array('subcategory_id'=>$id));
		//	print_r( $data['subcategory_trimbuild']);	 exit;
        $this->load->view('admin/subcategory_edit', $data);
    }
   	 public function update(){
         //$id 			=	1;
			 $name           =   $this->input->post('title');
            $caption    =   $this->input->post('desc');
            $maincategory =   $this->input->post('maincategory');
            $maincategory=serialize($maincategory);
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		//	create_folder('about');
			$config['upload_path']  = "./upload/Subcategory";
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
                $source             = "./upload/Subcategory/".$data['file_name'] ;
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
							'subcategory_name'   =>      $name,
                            'main_category' =>      $maincategory,
                            'subcategory_desc' =>$caption,
                            'subcategory_img' =>$main_img,
                            'subcategory_status' =>     $status,
							'subcategory_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('subcategory',$ins,array('subcategory_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/destination');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('subcategory',array('subcategory_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/destination');
	}


}