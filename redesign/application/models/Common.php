<?php

class Common extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    //function to insert data to table
   	public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }
    public function query($query){
        $data=$this->db->query($query)->result();
        return $data;
    }
    //function to get contents
    public function get_contents( $table, $where = FALSE , $select = '*', $order=FALSE, $groupby=FALSE, $limit = NULL, $offset = NULL){
        $this->db->select($select);
        if($order != FALSE){
            $this->db->order_by($order);
        }
        if ( $where === FALSE ){
            $query = $this->db->get($table);
            return $query->result();
        }
        if($groupby != FALSE){
            $this->db->group_by($groupby); 
        }
        $query = $this->db->get_where($table, $where,$limit,$offset);
        return $query->result();
    }
    public function get_all_by_need($category,$need=FALSE, $where=FALSE) {
        if($need){
                $this->db->select($need);
        }
        if($where){
            $this->db->where($where);
        }
        $row = $this->db->get($category)->row();
        if (isset($row)) {
            return $row;
        }
    }
    //function to update content
    public function update($table,$value,$where=FALSE){
        if($where){
            $this->db->where($where);
        }
        $this->db->update($table, $value);
        return $this->db->insert_id();
    }
    //delete content
    //return false if canot delete
    public function delete($table, $where=FALSE) {
        if($where){
            $this->db->where($where);
        }
        $del = $this->db->delete($table);
        $error = $this->db->error();
        if ($error["code"] == 1451) {
            return false;
        } else {
            return true;
        }
    }

    public function sendMail($ema, $sub, $msg,$emails) {
        $email = $ema;
        $emails = $emails;
        $config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'your domain SMTP host',
            'smtp_port' => 25,
            'smtp_user' => 'SMTP Username',
            'smtp_pass' => 'SMTP Password',
            'smtp_timeout' => '4',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config);


        $this->email->from($emails, 'Rose Residency');
        $this->email->to($email);
        $this->email->subject($sub);
        $body = $msg;
        $this->email->message($body);
        if ($this->email->send()) {
            
            // echo '<script>alert("Message Sent... Thanks For Contacing Us...We will be in touch soon...");</script>';
            // print_r('Sussessfully Send the Mail');
            return $this->email->print_debugger();
           
        } else {
            return 0;
        }
    }
    public function sendSms($mobile, $messege) {
        $messege = str_replace(' ', '+', $messege);

        $url = "http://reseller.smschub.com/api/sms?format=json&key=e074740748e4ee004e1fa5a88dc75f68&method=MT&mobile=$mobile&sender=THEAPP&route=TL&text=$messege";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);

        curl_close($ch);

        return $data;
    }

    public function get_subcategory($where=FALSE){
        $this->db->select('sub.coursemodule_name,coursemodule_id,c.course_name,c.course_id');
        $this->db->from('coursemodule sub');
        $this->db->join('course c','c.course_id=sub.course_id');
        if($where){
            $this->db->where($where);
        }
        $this->db->where('sub.coursemodule_status',1);
        return $this->db->get()->result();

    }
    public function get_vedio_tutorials($id=FALSE){
        $this->db->select('*');
        $this->db->from('videotutorials vt');
        $this->db->join('coursemodule cm','cm.coursemodule_id=vt.coursemodule_id');
        $this->db->join('course c','c.course_id=cm.course_id');
        $this->db->where('vt.videotutorial_status',1);
        if($id){
            $this->db->where('vt.videotutorial_id',$id);
            return $this->db->get()->row();
        }else{
            return $this->db->get()->result();
        }

    }
    public function get_class_room($classroom_id=FALSE){
        $this->db->select('*');
        $this->db->from('classrooms cr');
        $this->db->join('coursemodule cm','cm.coursemodule_id=cr.coursemodule_id');
        $this->db->join('course c','c.course_id=cm.course_id');
        $this->db->where('classroom_status',1);
        if($classroom_id){
            $this->db->where('classroom_id',$classroom_id);
            return $this->db->get()->row();
        }
        return $this->db->get()->result();
    }
    
}