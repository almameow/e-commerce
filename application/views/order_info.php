<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" href="/assets/normalize.css">
	<link rel="stylesheet" href="/assets/skeleton.css">
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
				<h4 class='orders'><a href="/dashboard/orders">Orders</a></h4>
				<h4 class='products'><a href="/dashboard/products">Products</a></h4>
				<h4 class='logoff'><a href="">log off</a></h4>
			</div>
		</div>
		<div class="row">
			<div class="five columns">
				<div class="order">
					<p class='order_header'>Order ID: <?= $order_info[0]->order_id ?></p>
					<p class='order_header'>Customer shipping info:</p>
					<p>name: <?= $order_info[0]->shipping_name ?></p>
					<p>address: <?= $order_info[0]->shipping_address ?></p>
					<p>city: <?= $order_info[0]->shipping_city ?></p>
					<p>state: <?= $order_info[0]->shipping_state ?></p>
					<p>zip: <?= $order_info[0]->shipping_zip ?></p>
					<p class='order_header'>Customer billing info</p>
					<p>name: <?= $order_info[0]->billing_name ?></p>
					<p>address: <?= $order_info[0]->billing_address ?></p>
					<p>city: <?= $order_info[0]->billing_city ?></p>
					<p>state: <?= $order_info[0]->billing_state ?></p>
					<p>zip: <?= $order_info[0]->billing_zip ?></p>
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
<?php
					$subtotal = 0;
					$total = 0;
					$quantity = 2;
					foreach ($order_info as $order) {
?>
						<tr>
							<td><?= $order->product_id ?></td>
							<td><?= $order->name ?></td>
							<td><?= $order->price ?></td>
							<td><?= $quantity ?></td>
							<td><?= $order->price*$quantity ?></td>
							<?php $total += ( $order->price*$quantity ); ?>
						</tr>
<?php
					}
?>
					</tbody>
				</table>
				<div class='three columns' id='status'>
					<h6>Status: <?= $order->status ?></h6>
				</div>
				<div class='three columns' id='price'>
					<p>Subtotal: <?= $total ?></p>
					<p>Shipping (10%): <?= $total*.1; ?></p>
					<p>Total Price: <?= $total + ($total*.1); ?></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>