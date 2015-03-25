<?php  

class order extends CI_model {

	function get_all_orders() 
	{
		$query = $this->db->query ("SELECT shipping_addresses.name, billing_addresses.address, billing_addresses.city, billing_addresses.state, billing_addresses.zip, orders.id, orders.created_at 
										FROM billing_addresses
										LEFT JOIN orders ON orders.billing_address_id = billing_addresses.id
										LEFT JOIN shipping_addresses ON orders.shipping_address_id = shipping_addresses.id");
										return $query->result();
	}

	function get_all_products()
	{
		$query = $this->db->query("SELECT products.id, products.name, products.inventory_quantity, products.sold_quantity, products.image FROM products");
		return $query->result();
	}

	function show_order($id)
	{
		$query = $this->db->query("SELECT products.id as product_id, products.name, products.price, orders.id as order_id, orders.status, billing_addresses.name as billing_name, billing_addresses.address as billing_address, billing_addresses.city as billing_city, billing_addresses.state as billing_state, billing_addresses.zip as billing_zip, shipping_addresses.name as shipping_name, shipping_addresses.address as shipping_address, shipping_addresses.city as shipping_city, shipping_addresses.state as shipping_state, shipping_addresses.zip as shipping_zip FROM products
										LEFT JOIN products_has_orders ON products.id = products_has_orders.product_id
										LEFT JOIN orders ON products_has_orders.order_id = orders.id
										LEFT JOIN billing_addresses ON orders.billing_address_id = billing_addresses.id
										LEFT JOIN shipping_addresses ON orders.shipping_address_id = shipping_addresses.id
										WHERE order_id IS NOT NULL AND order_id = ?", array($id));
		return $query->result();
	}

	function create($new)
	{
		$query = ("INSERT INTO products (name, description, price, category, created_at) VALUES (?,?,?,?,NOW())");
		$values = array($new['name'], $new['description'], $new['price'], $new['category']);
		return $this->db->query($query, $values);
	}

	function get_product_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM products where id=$id");
		return $query->row();
	}

	function edit_product($id)
	{
		$query = "UPDATE products SET name=?, description=?, category=? WHERE id=?";
		$values = array($id['name'], $id['description'], $id['category'], $id['id']);
		return $this->db->query($query, $values);
	}

}

?>