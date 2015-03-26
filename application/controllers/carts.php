<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart');
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this -> output ->enable_profiler(TRUE);
		$this->load->view('Cart');
	}

	public function checkout()
	{
		$ship_info = array(
			'name' => $this->input->post('ship-fname')." ".$this->input->post('ship-lname'),
			'address' => $this->input->post('ship-address'),
			'address2' => $this->input->post('ship-address2'),
			'city' => $this->input->post('ship-city'),
			'state' => $this->input->post('ship-state'),
			'zip' => $this->input->post('ship-zip')
		);
		$this->session->set_userdata($ship_info);
		$this->Cart->insertShip($ship_info);

		$bill_info = array(
			'name' => $this->input->post('bill-fname')." ".$this->input->post('bill-lname'),
			'address' => $this->input->post('bill-address'),
			'address2' => $this->input->post('bill-address2'),
			'city' => $this->input->post('bill-city'),
			'state' => $this->input->post('bill-state'),
			'zip' => $this->input->post('bill-zip')
		);
		$this->session->set_userdata($bill_info);
		$this->Cart->insertBill($bill_info);
		$this->load->view('confirmation');
	}
	public function update()
	{

	}
	public function remove()
	{
		$this->session->sess_destroy();
		redirect("/"); 
	}
}

//end of main controller