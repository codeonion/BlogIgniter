<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		// Constructor to auto-load HybridAuthLib
		parent::__construct();
		$this->load->helper('URL', 'URI');
		$this->load->library('blogigniter_lib');
	}
	public function index()
	{
		
		// Testing custom config file usage
		$this->load->config("blogigniter");

		// Testing custom Library file usage
		$data['libraryVariable'] = $this->blogigniter_lib->BI_test();

		$data['db_databaseName'] = $this->config->item('db_databaseName');
		$data['db_user'] = $this->config->item('db_user');
		$data['db_password'] = $this->config->item('db_password');

		/*****************
		Test Variables
		*****************/
		$data['page_menuItems'] 	= "Home, Blog, Links, About";

		$data['post_title'] 	= "Post Title";
		$data['post_date'] 		= "dd/mm/yyyy";
		$data['post_category'] 	= "Example Category";
		$data['post_tag'] 		= "Codeigniter blog example tag";
		$data['post_body'] 		= "
									<p>This is a post</p>
									<p>It is full of content.</p>
									<p>Normally, there is a lot of content.</p>
									<p>But there is much more to do.</p>
									<p>I need CSS</p>
									<p>I need jQuery</p>
									<p>I need Responsiveness</p>
									<p>But I am static</p>
									<p>And did I mention pictures?</p>
									<p>And did I mention videos?</p>
									"; 
		$data['post_comments'] 	= "Well, I am to be put in place of the comments";

		$this->load->view('welcome_login', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */