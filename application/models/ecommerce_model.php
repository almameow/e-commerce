<?php  
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Ecommerce_model extends CI_Model{
		public function get_product_count()
		{
			return $this->db->query("SELECT COUNT('name') as count FROM products")->row_array();
		}
		public function get_ea_product_count($category)
		{
			return $this->db->query("SELECT COUNT('category') as count FROM products WHERE category = ?", $category)->row_array();
		}

		public function get_all_products()
		{
			return $this->db->query("SELECT * FROM products ORDER BY name ASC")->result_array();
		}

		public function get_sorted_products($sorted_by)
		{
			return $this->db->query("SELECT * FROM products ORDER BY ? ASC", $sorted_by)->result_array();
		}

		public function get_all_category($category)
		{
			return $this->db->query("SELECT * FROM products WHERE category = ?", array($category))->result_array();
		}

		public function get_all_product($id)
		{
			return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
		}

		public function get_all_similar($cat_id)
		{
			return $this->db->query("SELECT * FROM products WHERE category = ?", array($cat_id))->result_array();
		}

		public function get_by_search($name)
		{
			return $this->db->query("SELECT * FROM products WHERE name = ?", array($name))->result_array();
		}
		
	}
?>