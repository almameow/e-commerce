<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view("dashboard_products");
	}

	public function category($id) //Shows products page listing all for category $id
	{

	}
}

//end of main controller