<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
         $this->load->library('upload');
        $this->load->model("Common_model");
    }

    public function index(){
         $data = array();
        $data['page_title'] = 'Gallery';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['gallery_tribulds']=$this->Common_model->get_contents('rose_gallery',array());
	//print_r( $data['category_imptint']);	 exit;
        $this->load->view('admin/gallery', $data);
    }
    public function gallerytype(){
         $data = array();
        $data['page_title'] = 'Gallery Type';
        $data['count'] = $this->Common_model->get_user_total();
        //  print_r( $data['count']);    
        $data['gallery_joance']=$this->Common_model->get_contents('joance_gallery_type',array());
        //  print_r( $data['category_imptint']);     exit;
        $this->load->view('admin/gallery_type', $data);
    }
	    public function add(){
         $data = array();
        $data['page_title'] = 'Gallery';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		//
        //$data['category_imptint']=$this->Common_model->get_contents('joance_gallery_type',array());
			//print_r( $data['about_imptint']);	 exit;
        $this->load->view('admin/gallery_add', $data);
    }
         public function add_type(){
         $data = array();
        $data['page_title'] = 'Gallery';
        $data['count'] = $this->Common_model->get_user_total();
        //  print_r( $data['count']);    
        //
         $data['category_imptint']=$this->Common_model->get_contents('rose_category',array());
            //print_r( $data['about_imptint']);  exit;
        $this->load->view('admin/gallery_type_add', $data);
    }
    
	
		
	 public function submit(){
        
		//	$name 			=	$this->input->post('title');
		$branch = $this->input->post('branch');
        $title =   $this->input->post('title');
		//	create_folder('about');
			$config['upload_path']  = "./upload/Gallery";
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']     = '92000';
            $config['max_width']    = '92000';
            $config['max_height']   = '92000';
            $this->upload->initialize($config);

              $files = $_FILES['image'];
              $main_img="";
                foreach ($files['name'] as $key => $filename) {
                    $_FILES['image']['name'] = $files['name'][$key];
                    $_FILES['image']['type'] = $files['type'][$key];
                    $_FILES['image']['tmp_name'] = $files['tmp_name'][$key];
                    $_FILES['image']['error'] = $files['error'][$key];
                    $_FILES['image']['size'] = $files['size'][$key];
                    if (!$this->upload->do_upload('image')) {
                        $errors[] = $this->upload->display_errors();
                    } else {
                        $data = $this->upload->data();
                         $source             = "./upload/Gallery/".$data['file_name'] ;
                            $main_img = $data['file_name'];
                            // Permission Configuration
                            chmod($source, 0777) ;

                            $ins    =   array(
                             'hotel_id' =>       $branch,
                            'gallery_img' =>        $main_img,
                            'project_title'=>$title,
                        );
                //  print_r( $ins);  exit;
                $this->Common_model->insert($ins,'rose_gallery');
                    }
                }

            
				
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
		  
		redirect('admin/Gallery');
    }
     public function type_submit(){
        
        $title =   $this->input->post('title');
       
           

                            $ins    =   array(
                            'gallery_type_title'=>$title
                        );
                //  print_r( $ins);  exit;
                $this->Common_model->insert($ins,'joance_gallery_type');
                
                $this->session->set_flashdata('msg','Course Name Updated Successfully');
          
        redirect('admin/gallery/gallerytype');
    }
   public function edit($id){
         $data = array();
        $data['page_title'] = 'Gallery';
        $data['count'] = $this->Common_model->get_user_total();
        //	print_r( $data['count']);	 
		$data['gallery_imptint']=$this->Common_model->get_contents('rose_gallery',array('gallery_id'=>$id));
		//	print_r( $data['gallery_imptint']);	 exit;
        $this->load->view('admin/gallery_edit', $data);
    }
   	 public function update(){
         $id 			=	1;
			$name 			=	$this->input->post('title');
			$caption	=	$this->input->post('caption');
			$id	=	$this->input->post('id');
		$status	=	$this->input->post('status');
		//	create_folder('about');
			$config['upload_path']  = "./upload/Gallery";
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
                $source             = "./upload/Gallery/".$data['file_name'] ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;
            }

            else
            {
                  $main_img= $this->input->post('hidden');
               
            }
				$ins	=	array(
							'gallery_title'	=>		$name,
							'gallery_caption' =>		' ',
							'gallery_img' =>		$main_img,
							'gallery_status'	=>		$status,
							'gallery_id'	=>		$id
						);
				//	print_r( $ins);	 exit;
				$this->Common_model->update('rose_gallery',$ins,array('gallery_id'=>$id));
				$this->session->set_flashdata('msg','Course Name Updated Successfully');
	
		redirect('admin/Gallery');
    } 
    
    	public function delete($id=FALSE){
		if($id){
			$this->Common_model->delete('rose_gallery',array('gallery_id'=>$id));
			//$this->session->set_flashdata('msg','Student deleted Successfully');
		}
		redirect('admin/Gallery');
	}
    public function type_delete($id=FALSE){
        if($id){
            $this->Common_model->delete('joance_gallery_type',array('gallery_type_id'=>$id));
            //$this->session->set_flashdata('msg','Student deleted Successfully');
        }
        redirect('admin/gallery/gallerytype');
    }


}