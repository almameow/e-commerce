<?php
class Cart extends CI_Model{

	function insertShip($new_ship)
	{
		$query = "INSERT INTO shipping_addresses (name, address, address2, city, state, zip, created_at) VALUES (?,?,?,?,?,?,NOW())";
		$values = array($new_ship['name'], $new_ship['address'], $new_ship['address2'], $new_ship['city'], $new_ship['state'], $new_ship['zip']);
		return $this->db->query($query, $values);
	}
	function insertBill($new_bill)
	{
		$query = "INSERT INTO billing_addresses (name, address, address2, city, state, zip, created_at) VALUES (?,?,?,?,?,?, NOW())";
		$values = array($new_bill['name'], $new_bill['address'], $new_bill['address2'], $new_bill['city'], $new_bill['state'], $new_bill['zip']);
		return $this->db->query($query, $values);
	}
}

?>