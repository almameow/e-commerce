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

		#search {
			margin-top: 20px;
		}

			#search form {
				display: inline-block;
			}


			#search .search {
				display: inline-block;
				margin-right: 460px;
			}

		.status {
			height: 20px;
		}

		table {
			margin: 0 auto;
		}

			table img {
				border: 1px solid black;
				width: 50px;
				height: 50px;
			}

		ul {
			text-align: center;
			margin-top: 20px;
		}

			.page_number{
				border-right: 1px solid black;
				padding: 0px 10px;
				display: inline;
			}

			.arrow {
				border: none;
				display: inline;
				padding: 0px 10px;
			}

</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve columns" id='header'>
				<h3>Dashboard</h3>
				<h4 class='orders'><a href="/dashboard/orders">Orders</a></h4>
				<h4 class='products'>Products</h4>
				<h4 class='logoff'>log off</h4>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns" id='search'>
				<form action='/dashboard/search' method='post' class='search'>
					<input type='text' placeholder='search'>
					<input type='submit' value='search'>
				</form>
				<a href="/dashboard/create"><button class='button-primary'>Add New Product</button></a>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<table>
					<thead>
						<th>Picture</th>
						<th>ID</th>
						<th>Name</th>
						<th>Inventory Count</th>
						<th>Quantity Sold</th>
						<th>action</th>
					</thead>
					<tbody>
<?php
					foreach ($products as $product) {
?>
						<tr>
							<td><div class='image'><?= "<img src='/../assets/images". $product->image . "01.jpg'>"?></div></td>
							<td><?= $product->id ?></td>
							<td><?= $product->name ?></td>
							<td><?= $product->inventory_quantity ?></td>
							<td><?= $product->sold_quantity ?></td>
							<td>
								<a href="/dashboard/edit/<?= $product->id ?>">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
<?php
					}
?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<ul>
					<li class='page_number'><a href="">1</a></li>
					<li class='page_number'><a href="">2</a></li>
					<li class='page_number'><a href="">3</a></li>
					<li class='page_number'><a href="">4</a></li>
					<li class='page_number'><a href="">5</a></li>
					<li class='page_number'><a href="">6</a></li>
					<li class='page_number'><a href="">7</a></li>
					<li class='page_number'><a href="">8</a></li>
					<li class='page_number'><a href="">9</a></li>
					<li class='page_number'><a href="">10</a></li>
					<li class='arrow'><a href="">-></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>