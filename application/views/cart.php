<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shopping Cart | eCommerce</title>
	<link rel="stylesheet" href="/../assets/normalize.css">
	<link rel="stylesheet" href="/../assets/skeleton.css">
	<style type="text/css">
		.container{
			width: 840px;
		}
		.row{
			background-color: black;
			color: white;
			vertical-align: middle;
		}
		h4{
			background-color: black;
			color: white;
			font-size: 20px;
			padding-left: 15px;
			padding: 10px 0px 0px 15px;
			display: inline-block;
			vertical-align: middle;
		}
		.cart{
			background-color: black;
			color: white;
			margin-left: 550px;
			display: inline-block;
		}
		table{
			margin: 15px 0px 15px 35px;
			border: 1px solid silver;
			width: 770px;
		}
		.item-table{
			padding-left: 20px;
			width: 140px;
		}
		.item-total{
			text-align: right;
		}

		h5{
			margin-left: 100px; 
		}
		h6{
			margin: 0px 15px 0px 100px;
			display: inline-block;
			vertical-align: middle;
		}
		form{
			width: 430px;
		}
		#checkbox{
			margin-left: 100px; 
		}
		.payment{
			margin-left: 100px; 
			color: #FFF;
  			background-color: #33C3F0;
  			border-color: #33C3F0;
		}
	</style>
	<script type="text/javascript" src='http://code.jquery.com/jquery-1.10.2.min.js'></script> 
	<script type="text/javascript">
	$(document).ready(function() {
		$('#checkbox').on('change',function()
		{
			if(this.checked)
			{
				$('#bill-fname').val($('#ship-fname').val()), $('#bill-lname').val($('#ship-lname').val()),
				$('#bill-address').val($('#ship-address').val()), $('#bill-address2').val($('#ship-address2').val()),
				$('#bill-city').val($('#ship-city').val()), $('#bill-state').val($('#ship-state').val()),		
				$('#bill-zip').val($('#ship-zip').val());
			}
			else
			{
				$('#bill-fname').val(''), $('#bill-lname').val(''), $('#bill-address').val(''), 
				$('#bill-address2').val(''), $('#bill-city').val(''), $('#bill-state').val(''), $('#bill-zip').val('');
			}	
		});
	});
	</script>
</head>
<body><div class="container">
	<div class="row">
		<h4>Bobalicious</h4><div class="cart"><a href="/products/view_cart">Shopping Cart (<?= $this->session->userdata("cart_total") ?>)</a></div>
	</div>
	<table>
		<thead>
			<tr>
		      <th class="item-table">Item</th>
		      <th class="item-table">Price</th>
		      <th class="item-table">Quantity</th>
		      <th class="item-table">Total</th>
		    </tr>
		</thead>
		<tbody>
			<?php
				$cart = $this->session->userdata("cart");

				//Used to handle if view depending on where user is coming from
				if(!isset($product))
					$new_product['id'] = 0;
				else
					$new_product['id'] = $product['id'];

				//Populate table with session cart data
				if(!is_null($cart))
				{
					for($i=0; $i<$this->session->userdata("product_count"); $i++) //for each product/possible array in cart
					{
						if(isset($cart["$i"])) //if session var for this item exists 
						{
							if($i != $new_product['id']) //if the newly added product was not already in the cart
							{
								//Print session data (printing from local var $cart)
								echo "<tr><td>". $cart["$i"]['name'] . "</td>";
								echo "<td>$" . $cart["$i"]['price'] . ".00</td>";
								echo "<td>" . $cart["$i"]['quantity'] . "<a href='/products/remove_from_cart/" . $i ."'><img src='/../assets/images/trash.png'></a></td>";
								echo "<td>$" . $cart["$i"]['price'] * $cart["$i"]['quantity'] . ".00</td></tr>";

								//Save to local variable $new_cart from local variable $cart
								$new_cart[$i]['name'] = $cart["$i"]['name'];
								$new_cart[$i]['price'] =  $cart["$i"]['price'];
								$new_cart[$i]['quantity'] =  $cart["$i"]['quantity'];
							}
						}
					}
				}

				//Print newly added product//
				if(isset($product))
				{
					echo "<tr><td>". $product['name'] . "</td>";
					echo "<td>$" . $product['price'] . ".00</td>";
					echo "<td>" . $product['quantity'] . "<a href='/products/remove_from_cart/" . $product['id'] ."'><img src='/../assets/images/trash.png'></a></td>";
					echo "<td>$" . $product['price'] * $product['quantity'] . ".00</td></tr>";

					//Add new product to $new_cart
					$new_cart[$product['id']]['name'] =  $product['name'];
					$new_cart[$product['id']]['price'] =  $product['price'];
					$new_cart[$product['id']]['quantity'] =  $product['quantity'];

				}
				
				//Replace cart with $new_cart
				$this->session->set_userdata("cart", $new_cart);

				//Find total sum and cart total
				$sum = 0;
				$cart_total = 0;
				for($j=0; $j<$this->session->userdata("product_count"); $j++)
				{
					if(isset($this->session->userdata['cart']["$j"]))
					{
						$sum += ($this->session->userdata['cart']["$j"]['price'] * $this->session->userdata['cart']["$j"]['quantity']);
						$cart_total += $this->session->userdata['cart']["$j"]['quantity'];
						$this->session->set_userdata("cart_total", $cart_total);
					}
				}	
			?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>Total: $<?= $sum ?>.00</td>
			</tr>
		</tbody>
	</table>
	<div class="item-total"><a href="/"><button value="cont-shop" name="cont-shop">Continue Shopping</button></a></div>
	<form action="/Carts/checkout" method="post">
		<h5>Shipping Information</h5>
		<label><h6>First Name: </h6><input class="u-pull-right" type="text" id="ship-fname" name="ship-fname"></label>
		<br><label><h6>Last Name: </h6><input class="u-pull-right" type="text" id="ship-lname" name="ship-lname"></label>
		<br><label><h6>Address: </h6><input class="u-pull-right" type="text" id="ship-address" name="ship-address"></label>
		<br><label><h6>Address 2: </h6><input class="u-pull-right" type="text" id="ship-address2"name="ship-address2"></label>
		<br><label><h6>City: </h6><input class="u-pull-right" type="text" id="ship-city" name="ship-city"></label>
		<br><label><h6>State: </h6><input class="u-pull-right" type="text" id="ship-state" name="ship-state"></label>
		<br><label><h6>Zip Code: </h6><input class="u-pull-right" type="text" id="ship-zip" name="ship-zip"></label>

		<br><h5>Billing Information</h5>
		<input id="checkbox" type="checkbox" value=""> Same as Shipping</input>
		<br><label><h6>First Name: </h6><input class="u-pull-right" type="text" id="bill-fname" name="bill-fname"></label>
		<br><label><h6>Last Name: </h6><input class="u-pull-right" type="text" id="bill-lname" name="bill-lname"></label>
		<br><label><h6>Address: </h6><input class="u-pull-right" type="text" id="bill-address" name="bill-address"></label>
		<br><label><h6>Address 2: </h6><input class="u-pull-right" type="text" id="bill-address2" name="bill-address2"></label>
		<br><label><h6>City: </h6><input class="u-pull-right" type="text" id="bill-city" name="bill-city"></label>
		<br><label><h6>State: </h6><input class="u-pull-right" type="text" id="bill-state" name="bill-state"></label>
		<br><label><h6>Zip Code: </h6><input class="u-pull-right" type="text" id="bill-zip" name="bill-zip"></label>

		<br><label><h6>Credit Card No: </h6><input class="u-pull-right" type="text" name="card"></label>
		<br><label><h6>Security Code: </h6><input class="u-pull-right" type="text" name="security"></label>
		<br><h6>Expiration:</h6>
		<select id="month">
			<option>(mm)</option>
			<option value="1">1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		</select>
		<h7>/</h7>
		<select id="year">
			<option>(year)</option>
			<option value="2015">2015</option>
		    <option value="2016">2016</option>
		    <option value="2017">2017</option>
		</select>
		<button class="payment" type="submit" value="Pay" name="Pay">Pay</button>
	</form>
</div></body>
</html>