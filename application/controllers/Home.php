<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->helper('URL');
		// Testing custom config file usage
		$this->load->config("blogigniter");

		$data['db_databaseName'] = $this->config->item('db_databaseName'); // It works
		$data['db_user'] = $this->config->item('db_user'); // It works
		$data['db_password'] = $this->config->item('db_password'); // It works


		$this->load->view('welcome_login', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */