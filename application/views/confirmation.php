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
		h3{
			font-size: 22px;
			color: #1EAEDB;
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
			padding-right: 35px;
			text-align: right;
			text-decoration: bold;
		}

		h5{
			margin-left: 50px; 
		}
		h6{
			margin: 0px 15px 0px 50px;
			display: inline-block;
			vertical-align: middle;
		}
		form{
			width: 430px;
		}
	</style>
</head>
<body><div class="container">
	<div class="row">
		<h4>Bobalicious</h4><div class="cart">Shopping Cart (5)</div>
	</div>
	<h3>Thank you for your order! </h3>
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
			<tr>
		      <td class="item-table">Black Belt for Staff</td>
		      <td class="item-table">$19.99</td>
		      <td class="item-table">1 <a href="#">update</a> <a href="#"><img src="../assets/32px-Trash.png" width="15" height="15"></a></td>
		      <td class="item-table">$19.99</td>
		    </tr>
		    <tr>
		      <td class="item-table">CodingDojo Cups</td>
		      <td class="item-table">$9.99</td>
		      <td class="item-table">3 <a href="#">update</a> <a href="#"><img src="../assets/32px-Trash.png" width="15" height="15"></a></td>
		      <td class="item-table">$29.97</td>
		    </tr>
		</tbody>
	</table>
	<div class="item-total">Total: <?php echo $total; ?></div>

	<table>
		<tr>
			<td><h5>Shipping Information</h5>
				<label><h6>First Name: </h6><?php echo $_POST['ship-fname'];?></label>
				<br><label><h6>Last Name: </h6><?php echo $_POST['ship-lname'];?></label>
				<br><label><h6>Address: </h6><?php echo $_POST['ship-address'];?></label>
				<br><label><h6>Address 2: </h6><?php echo $_POST['ship-address2'];?></label>
				<br><label><h6>City: </h6><?php echo $_POST['ship-city'];?></label>
				<br><label><h6>State: </h6><?php echo $_POST['ship-state'];?></label>
				<br><label><h6>Zip Code: </h6><?php echo $_POST['ship-zip'];?></label>
			</td>
			<td><h5>Billing Information</h5>
				<label><h6>First Name: </h6><?php echo $_POST['bill-fname'];?></label>
				<br><label><h6>Last Name: </h6><?php echo $_POST['bill-lname'];?></label>
				<br><label><h6>Address: </h6><?php echo $_POST['bill-address'];?></label>
				<br><label><h6>Address 2: </h6><?php echo $_POST['bill-address2'];?></label>
				<br><label><h6>City: </h6><?php echo $_POST['bill-city'];?></label>
				<br><label><h6>State: </h6><?php echo $_POST['bill-state'];?></label>
				<br><label><h6>Zip Code: </h6><?php echo $_POST['bill-zip'];?></label>
			</td>
		</tr>
	</table>
</div></body>
</html>