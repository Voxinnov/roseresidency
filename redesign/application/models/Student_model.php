<?php

class Student_model extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    public function check_login($user_name){
        $this->db->select('*');
        $this->db->from('exam_login');
        $this->db->where('register_no like binary ',$user_name);
        $this->db->where('examlogin_status', 1);
        $data= $this->db->get()->row();
        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }
    public function db_fetch($table,$need,$where=FALSE){
        $this->db->select($need);
        $this->db->from($table);
        if($where){
            $this->db->where($where);
        }
        $data=$this->db->get()->row();
        if(!empty($data)){
            return $data->$need;
        }
    }
    public function get_student($student_id=FALSE){
        $this->db->select('s.*,l.*,ct.*,c.*,u.university_name,u.image_path as u_path,sc.*,el.enrol_number');
        $this->db->from('student s');
        $this->db->join('login l','l.login_id=s.login_id');
        $this->db->join('exam_login el','el.student_id=s.student_id');
        $this->db->join('coursetype ct','ct.coursetype_id=s.coursetype_id');
        $this->db->join('course c','c.course_id=s.course_id');
        $this->db->join('university u','u.university_id=c.university_id');
        $this->db->join('student_category sc','sc.student_category_id=s.student_category_id','left');
        $this->db->where('s.student_status',1);
        if($student_id){
            $this->db->where('s.student_id',$student_id);
            return $this->db->get()->row();
        }else{
            return $this->db->get()->result();
        }
    }
   public function get_result($student_id=FALSE,$attend_id=FALSE){
       if($student_id){
           $this->db->select('ae.*,s.student_name,s.image_path,e.exam_title,e.total_mark,e.university_id,u.university_name,u.image_path as u_image');
           $this->db->from('attend_exam ae');
           $this->db->join('exam e','e.exam_id=ae.exam_id');
           $this->db->join('student s','s.student_id=ae.student_id');
           $this->db->join('university u','e.university_id=u.university_id');
           $this->db->where('ae.published',1);
           $this->db->order_by("ae.attend_id","desc");
           if($attend_id){
               $this->db->where('ae.attend_id',$attend_id);
               return $this->db->get()->row();
           }else{
               return $this->db->get()->result();
           }
       }else{
           return "";
       }
   }
}