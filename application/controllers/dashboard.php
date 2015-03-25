<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order');
		// $this->output->enable_profiler();
	}

	public function orders() //Shows all orders that have been placed
	{
		$orders = $this->order->get_all_orders();
		$show = $this->load->view("orders", 
				array('orders' => $orders)
			);
	}

	public function products() //Shows all products
	{
		$products = $this->order->get_all_products();
		$this->load->view("products", 
			array('products' => $products)
			);
	}

	public function search()
	{
		$search = $this->input->post();
		$this->order->search($search);
		
	}

	public function edit($id) //shows view page for editing a specific product
	{
		$get_product = $this->order->get_product_by_id($id);
		$this->load->view('edit_product',
				array('edit_product' => $get_product)
			);
	}

		public function edit_product() //processes the form for editing a product
		{
			$edit = $this->input->post();
			$edit['id'] = (int)$edit['id'];
			$this->order->edit_product($edit);
			redirect('/products');
		}

	public function create()
	{
		$this->load->view('add_product');
	}

		public function create_product()
		{
			$new = $this->input->post();
			$this->order->create($new);
			redirect('/products');
		}

}

//end of main controller