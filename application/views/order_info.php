<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" href="../assets/normalize.css">
	<link rel="stylesheet" href="../assets/skeleton.css">
	<style type="text/css">
		#header {
			height: 50px;
			color: white;
			background-color: maroon;
		}

			#header h3 {
				display: inline-block;
				width: 225px;
			}

			#header .orders {
				display: inline-block;
				line-height: 50px;
				vertical-align: top;
				width: 125px;
			}

			#header .products {
				display: inline-block;
				line-height: 50px;
				vertical-align: top;
				width: 450px;
			}

			#header .logoff {
				display: inline-block;
				line-height: 50px;
				vertical-align: top;
			}

			#header a {
				color: white;
			}

		.order {
			width: 300px;
			height: 375px;
			border: 1px solid black;
			margin-top: 20px;
		}

			.order_header {
				margin-top: 10px;
				margin-left: 10px
			}

			p {
				margin: 0px 10px;
			}

		#table {
			margin-top: 20px;
		}
/*
			table {
				margin: auto;
			}*/

				table .image {
					width: 50px;
					height: 50px;
					border: 1px solid black;
				}

		#status {
			background-color: lightgreen;
			border: 1px solid black;
			padding-left: 5px;
		  	height: 30px;
		  	width: 200px;
		  	margin-top: 20px;
		  	margin-left: 0px;
		}

		#price {
			width: 175px;
			height: 75px;
			border: 1px solid black;
			margin-top: 20px;
		}

</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve columns" id='header'>
				<h3>Dashboard</h3>
				<h4 class='orders'><a href="">Orders</a></h4>
				<h4 class='products'><a href="">Products</a></h4>
				<h4 class='logoff'><a href="">log off</a></h4>
			</div>
		</div>
		<div class="row">
			<div class="five columns">
				<div class="order">
					<p class='order_header'>Order ID: 1</p>
					<p class='order_header'>Customer shipping info:</p>
					<p>name: bob</p>
					<p>address: 123 dojo way</p>
					<p>city: seattle</p>
					<p>state: wa</p>
					<p>zip: 98133</p>
					<p class='order_header'>Customer billing info</p>
					<p>name: bob</p>
					<p>address: 123 dojo way</p>
					<p>city: seattle</p>
					<p>state: wa</p>
					<p>zip: 98133</p>
				</div>
			</div>
			<div class="seven columns" id='table'>
				<table>
					<thead>
						<th>ID</th>
						<th>Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</thead>
					<tbody>
						<tr>
							<td>35</td>
							<td>cup</td>
							<td>$9.99</td>
							<td>1</td>
							<td>$9.99</td>
						</tr>
						<tr>
							<td>215</td>
							<td>shirt</td>
							<td>$9.99</td>
							<td>2</td>
							<td>$39.98</td>
						</tr>
					</tbody>
				</table>
				<div class='three columns' id='status'>
					<h6>Status: shipped</h6>
				</div>
				<div class='three columns' id='price'>
					<p> Sub total: $29.98</p>
					<p>Shipping: $1.00</p>
					<p>Total Price: $30.98</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>