<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shopping Cart | eCommerce</title>
	<link rel="stylesheet" href="../assets/normalize.css">
	<link rel="stylesheet" href="../assets/skeleton.css">
	<style type="text/css">
		.container{
			width: 850px;
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
			margin: 15px 0px 15px 50px;
			border: 1px solid silver;
			width: 770px;
		}
		.item-table{
			padding-left: 20px;
			width: 140px;
		}
		.item-total{
			padding-left: 570px;
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
		.checkbox{
			margin-left: 100px; 
		}
		.payment{
			margin-left: 100px; 
		}
	</style>
</head>
<body><div class="container">
	<div class="row">
		<h4>Dojo eCommerce</h4><div class="cart"><a href="">Shopping Cart (5)</a></div>
	</div>
	<table>
		<thead>
			<tr>
		      <th class="item-table">Item</th>
		      <th class="item-table">Price</th>
		      <th class="item-table">Quntity</th>
		      <th class="item-table">Total</th>
		    </tr>
		</thead>
		<tbody>
			<tr>
		      <td class="item-table">Black Belt for Staff</td>
		      <td class="item-table">$19.99</td>
		      <td class="item-table">1 <a href="">update</a> <a href=""><img src="32px-Trash_font_awesome.png" width="15" height="15"></a></td>
		      <td class="item-table">$19.99</td>
		    </tr>
		    <tr>
		      <td class="item-table">CodingDojo Cups</td>
		      <td class="item-table">$9.99</td>
		      <td class="item-table">3 <a href="">update</a> <a href=""><img src="32px-Trash_font_awesome.png" width="15" height="15"></a></td>
		      <td class="item-table">$29.97</td>
		    </tr>
		</tbody>

	</table>
	<div class="item-total">Total: $49.95</div>
	<div class="item-total"><a href=""><button value="cont-shop" name="cont-shop">Continue Shopping</button></a></div>
	<form action="/" method="post">
		<h5>Shipping Information</h5>
		<label><h6>First Name: </h6><input class="u-pull-right" type="text" name="ship-fname"></label>
		<br><label><h6>Last Name: </h6><input class="u-pull-right" type="text" name="ship-lname"></label>
		<br><label><h6>Address: </h6><input class="u-pull-right" type="text" name="ship-address"></label>
		<br><label><h6>Address 2: </h6><input class="u-pull-right" type="text" name="ship-address2"></label>
		<br><label><h6>City: </h6><input class="u-pull-right" type="text" name="ship-city"></label>
		<br><label><h6>State: </h6><input class="u-pull-right" type="text" name="ship-state"></label>
		<br><label><h6>Zip Code: </h6><input class="u-pull-right" type="text" name="ship-zip"></label>
	</form>
	<form action="/" method="post">
		<br><h5>Billing Information</h5>
		<input class="checkbox" type="checkbox" value=""> Same as Shipping</input>
		<br><label><h6>First Name: </h6><input class="u-pull-right" type="text" name="bill-fname"></label>
		<br><label><h6>Last Name: </h6><input class="u-pull-right" type="text" name="bill-lname"></label>
		<br><label><h6>Address: </h6><input class="u-pull-right" type="text" name="bill-address"></label>
		<br><label><h6>Address 2: </h6><input class="u-pull-right" type="text" name="bill-address2"></label>
		<br><label><h6>City: </h6><input class="u-pull-right" type="text" name="bill-city"></label>
		<br><label><h6>State: </h6><input class="u-pull-right" type="text" name="bill-state"></label>
		<br><label><h6>Zip Code: </h6><input class="u-pull-right" type="text" name="bill-zip"></label>
	</form>
	<form action="/" method="post">
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