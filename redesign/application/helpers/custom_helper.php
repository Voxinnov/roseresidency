<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function create_folder($folder){
	if (!is_dir('./uploads/')) {
	    mkdir('./uploads/', 0777, TRUE);
	}
	if(!is_dir('./uploads/'.$folder)){
		mkdir('./uploads/'.$folder, 0777, TRUE);
	}
}
function get_image($folder,$file){
	if(file_exists('./uploads/'.$folder.'/'.$file) && is_file('./uploads/'.$folder.'/'.$file)){
		return base_url().'uploads/'.$folder.'/'.$file;
	}else{
		if(file_exists('./uploads/no_'.$folder.'.png'))
		{
			return base_url().'uploads/no_'.$folder.'.png';
		}else{
			if(file_exists('./uploads/no_'.$folder.'.jpg'))
			{
				return base_url().'uploads/no_'.$folder.'.jpg';
			}else{
				return base_url().'uploads/default.png';
			}
		}
	}
}
function user_check(){
	$CI =& get_instance();
	if($CI->session->has_userdata('slogged_in') && $CI->session->userdata('slogged_in')==1){
		return true;
	}else{
		redirect('sign-in');
	}
}
function get_user_data($need){
	$CI =& get_instance();
	$login_id=$CI->session->userdata('slogin_id');
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need('login',array($need),array('login_id'=>$login_id));
	if(!empty($test)){
		return $test->$need;
	}
}
function get_user_data_university($need){
	$CI =& get_instance();
	$student_id = $CI->session->userdata('student_id');
	$CI->load->model("Student_model");
	$login_id=$CI->Student_model->db_fetch('student','login_id',array('student_id'=>$student_id));
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need('login',array($need),array('login_id'=>$login_id));
	if(!empty($test)){
		return $test->$need;
	}
}
function get_student_count(){
	$CI =& get_instance();
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need('student',array('count(*) as count'),array('student_status'=>1));
	//echo $CI->db->last_query();
	if(!empty($test)){
		return $test->count;
	}else{
		return 0;
	}
}
function get_request_count(){
	$CI =& get_instance();
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need('student_requests',array('count(*) as count'),array('read_status'=>1));
	//echo $CI->db->last_query();
	if(!empty($test)){
		return $test->count;
	}else{
		return 0;
	}
}
function fetch_student_data($need){
	
	$CI =& get_instance();
	$login_id=$CI->session->userdata('slogin_id');
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need('student',array($need),array('login_id'=>$login_id));
	if(!empty($test)){
		return $test->$need;
	}else{
		return "";
	}
}
function remove_html_char($str=""){
	$clear = strip_tags($str);
	// Clean up things like &amp;
	$clear = html_entity_decode($clear);
	// Strip out any url-encoded stuff
	$clear = urldecode($clear);
	// Replace non-AlNum characters with space
	$clear = preg_replace('/[^A-Za-z0-9]/', ' ', $clear);
	// Replace Multiple spaces with single space
	$clear = preg_replace('/ +/', ' ', $clear);
	// Trim the string of leading/trailing space
	return $clear = trim($clear);		
}
function send_mail($to,$subject,$message){
    $from=$subject."<contact@".$_SERVER['SERVER_NAME'].">";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". get_option('site_email') . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	if( mail($to, $subject, $message, $headers) ){
		return TRUE;
	}else{
		return FALSE;
	}
}
function messages(){
	$CI =& get_instance();
	if($CI->session->flashdata('msg')) {
		?>
		<div class="alert alert-success">
			<strong>Success</strong>
			<p><?=$CI->session->flashdata('msg')?></p>
		</div>
		<?php
	}
	if($CI->session->flashdata('xmsg')) {
		?>
		<div class="alert alert-danger">
			<strong>Error</strong>
			<p><?=$CI->session->flashdata('xmsg')?></p>
		</div>
		<?php
	}
	if($CI->session->flashdata('wmsg')) {
		?>
		<div class="alert alert-warning">
			<strong>Warning</strong>
			<p><?=$CI->session->flashdata('wmsg')?></p>
		</div>
		<?php
	}
	if($CI->session->flashdata('imsg')) {
		?>
		<div class="alert alert-info">
			<strong>Info</strong>
			<p><?=$CI->session->flashdata('imsg')?></p>
		</div>
		<?php
	}
}
function get_nottifacation(){
	$CI =& get_instance();
	$CI->load->model("Common");
	$da=fetch_student_data('student_id');
	return $CI->Common->query('SELECT * FROM `nottifications` where find_in_set('.$da.',student_id) and nottification_status=1 and read_status=0');
}
function get_student_project_assignment($student_id,$pid){
	$CI =& get_instance();
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need('student_project_assignments',array('path'),array('spa_status'=>1,'student_id'=>$student_id,'pa_id'=>$pid));
	if(!empty($test)){
		return $test->path;
	}else{
		return FALSE;
	}
}
function get_from_entire_db($table,$need,$where){
	$CI =& get_instance();
	$CI->load->model("Common");
	$test=$CI->Common->get_all_by_need($table,$need,$where);
	if(!empty($test)){
		return $test->$need;
	}else{
		return "";
	}
}
function get_university_data(){
	$CI =& get_instance();
	$studnet_id=$CI->session->userdata('student_id');
	$CI->load->model("Common");
//echo "select * from university where university_id=(select university_id from course c join student s on s.course_id=c.course_id where s.student_id='$studnet_id')";
	$data=$CI->Common->query("select * from university where university_id=(select university_id from course c join student s on s.course_id=c.course_id where s.student_id='$studnet_id')");
	if(!empty($data)){
	    return $data;
	}else{
	    return false;
	}
}