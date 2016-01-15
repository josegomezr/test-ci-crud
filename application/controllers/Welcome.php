<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function get_index()
	{
		$this->load->view('welcome/index_view');
	}
}
