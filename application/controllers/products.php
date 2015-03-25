<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->model("Ecommerce_model");	

		//Count of all products
		$product_count = $this->Ecommerce_model->get_product_count();
		$this->session->set_userdata("product_count", $product_count['count']); 

		//Count of each type of product
		$mt = "milk tea";
		$mt_count = $this->Ecommerce_model->get_ea_product_count($mt);
		$this->session->set_userdata("mt_count", $mt_count);
		
		$hd = "hot drinks";
		$hd_count = $this->Ecommerce_model->get_ea_product_count($hd);
		$this->session->set_userdata("hd_count", $hd_count);

		$sm = "smoothies";
		$sm_count = $this->Ecommerce_model->get_ea_product_count($sm);
		$this->session->set_userdata("sm_count", $sm_count);
	}

	public function index()
	{
		//Set session variable "page" to change page title depending on category//
		$this->session->set_userdata("page", 0); //All products

		$all_products['products'] = $this->Ecommerce_model->get_all_products();
		$this->load->view("category", $all_products);
	}

	public function sort_by() //This isn't working >:[ //
	{
		$sorted_by = $this->input->post("sorted_by");
		$sorted_products['products'] = $this->Ecommerce_model->get_sorted_products($sorted_by);
		$this->load->view("category", $sorted_products);
	}

	public function category($id) //Shows products page listing all for category $id
	{
		//Set session variable "page" to change page title depending on category//
		if($id == 1) //Milk Tea
		{
			$this->session->set_userdata("page", 1);
			$category = "milk tea";
		}
		else if($id == 2) //Hot Drinks
		{
			$this->session->set_userdata("page", 2);
			$category = "hot drinks";
		}
		else if($id == 3) //Smoothies
		{
			$this->session->set_userdata("page", 3);
			$category = "smoothies";
		}	

		$all_category['products'] = $this->Ecommerce_model->get_all_category($category);
		$this->load->view("category", $all_category);
	}

	public function show($id) //shows detailed product info page for product $id
	{
		$products['product'] = $this->Ecommerce_model->get_all_product($id);
		$all_data['product'] = $products['product'];
		//$this->load->view("show_product", $products);

		$cat_id = $products['product']['category'];
		$similar_products['similars'] = $this->Ecommerce_model->get_all_similar($cat_id);
		$all_data['similar'] = $similar_products['similars'];
		//$this->load->view("show_product", $similar_products);

		//var_dump($all_data);
		$this->load->view("show_product", $all_data);
	}

	public function search() //searches db for drink name input by user
	{
		$name = $this->input->post();
		$this->session->set_userdata("search", $name['product_name']);
		$search['results'] = $this->Ecommerce_model->get_by_search($name['product_name']);
		$this->load->view("search_results", $search);
	}

	public function view_cart()
	{
		$this->load->view("cart");
	}

	public function add_to_cart($id) //displays cart with updated items
	{
		$purchase = $this->input->post();
		$this_product['product'] = $this->Ecommerce_model->get_all_product($purchase['product_id']);
		$this_product['product']['quantity'] = $purchase['quantity'];
		
		//update cart total
		$cart_total = $this->session->userdata("cart_total");
		$cart_total +=$this_product['product']['quantity'];
		$this->session->set_userdata("cart_total", $cart_total);

		$this->load->view("cart", $this_product);
	}

	public function remove_from_cart($id)
	{
		$cart = $this->session->userdata("cart");
		$new_cart = array();
		for($i=0; $i<$this->session->userdata("product_count"); $i++) //for each product/possible array in cart
		{
			if(isset($cart["$i"]) && $i != $id) //if session var for this item exists AND is not the current item to remove
			{
				//Save to local variable $new_cart from local variable $cart
				$new_cart[$i]['name'] = $cart["$i"]['name'];
				$new_cart[$i]['price'] =  $cart["$i"]['price'];
				$new_cart[$i]['quantity'] =  $cart["$i"]['quantity'];
			}
		}
		$this->session->set_userdata("cart", $new_cart); //set cart to new array without item $id

		//update cart_total session
		$cart_total = $this->session->userdata("cart_total");
		$cart_total -=$cart[$id]['quantity'];
		$this->session->set_userdata("cart_total", $cart_total);

		redirect("/products/view_cart");
	}
}

//end of main controller