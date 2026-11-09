<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function option_exists(){
	$CI =& get_instance();
	$CI->load->dbforge();
	if (!$CI->db->table_exists('options') )
        {
            $CI->load->dbforge();
            $fields = array(
              'option_id' => array(
                'type' => 'bigint',
                'constraint' => 20,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
              ),
              'option_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 500
              ),
              'option_value' => array(
                'type' => 'longtext'
              ),
              'option_type' => array(
                'type' => 'VARCHAR',
                'constraint' => 20
              ),
              'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
              
             );

            $CI->dbforge->add_field($fields);

            // define primary key
            $CI->dbforge->add_key('option_id', TRUE);

            // create table
            $CI->dbforge->create_table('options',TRUE);
        }
}

function add_option($name,$value)
{
	option_exists();
	$CI =& get_instance();
	$CI->load->database();
	$query=$CI->db->select('*')->from('options')->where('option_name',$name)->get();
	
	//option already exists
	if($query->num_rows() > 0) 
		return false;
	
	$data_type='text';
	if(is_array($value)) 
	{
		$data_type='array';
		$value=serialize($value);
	}
	elseif(is_object($value))
	{
		$data_type='object';
		$value=serialize($value);
	}
	
	$data=array(
		'option_name'=>$name,
		'option_value'=>$value,
		'option_type'=>$data_type,
	);
	$CI->db->insert('options',$data);
}

function update_option($name,$value)
{
	option_exists();
	$CI =& get_instance();
	$CI->load->database();
	
	$data_type='text';
	if(is_array($value)) 
	{
		$data_type='array';
		$value=serialize($value);
	}
	elseif(is_object($value))
	{
		$data_type='object';
		$value=serialize($value);
	}
	
	$data=array(
		'option_name'=>$name,
		'option_value'=>$value,
		'option_type'=>$data_type,
	);
	$query=$CI->db->select('*')->from('options')->where('option_name',$name)->get();
	
	//if option already exists then update else insert new
	if($query->num_rows() < 1) return $CI->db->insert('options',$data);
	else		  		  	   return $CI->db->update('options',$data,array('option_name'=>$name));	 					
}

function get_option($name)
{
	option_exists();
	$CI =& get_instance();
	$CI->load->database();
	$query=$CI->db->select('*')->from('options')->where('option_name',$name)->get();
	//option not found
	if($query->num_rows() < 1) return false;
	
	$option=$query->row();
	
	if('text'==$option->option_type)	   
		$value=$option->option_value;
	elseif('array'==$option->option_type || 'object'==$option->option_type) 
		$value=unserialize($option->option_value);
	
	return $value;
}

function delete_option($name)
{
	option_exists();
	$CI =& get_instance();
	$CI->load->database();
	return $CI->db->delete('options',array('option_name'=>$name));
}
