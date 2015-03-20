<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class BlogIgniter_Lib{

/****************************************************
*	Library for BlogIgniter_Lib						*
*****************************************************
*	File Created by Muhammad Ali (Codeonion)		*
*	Authors: Haji Mian Imran shah, Muhammad Ali 	*
/**************************************************/
public function __construct()
{
    $this->CI =& get_instance();
}

	public function BI_test(){
		 $this->CI->load->model('blogigniter_post');
		 $data = $this->CI->blogigniter_post->customFunction();
		//$data = "I am a library and help me get data from MODEL";//$this->blogigniter_model->customFunction();
		return $data;
	}

	/*
	public function BI_someFunction($input){
		$this->load->model('someModel');
		$output = $this->someModel->function("parameter1",$input);
		return $output;	
	}
	*/

    
}

/* End of file BlogIgniter_Lib.php */