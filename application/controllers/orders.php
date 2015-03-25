<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order');
		//$this->output->enable_profiler();
	}

	public function show($id)
	{
		$show = $this->order->show_order($id);
		$this->load->view('order_info', 
			array('order_info' => $show)
			);
	}

}