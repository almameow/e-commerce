<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin');
		$this->output->enable_profiler();
	}

	public function index(){
		$this -> output ->enable_profiler(TRUE);
		$this->load->view('admin_login');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$admin = $this->Admin->get_admin_by_id($email);
		if( $admin && $admin['password'] == $password)
		{
			$user = array(
				'user_id' => $admin['id'],
				'user_email' => $admin['email'],
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($user);
			$this->load->view('dashboard_orders');
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/");            
		}		
	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}


}

//end of main controller