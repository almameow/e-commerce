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

			table .image {
				width: 50px;
				height: 50px;
				border: 1px solid black;
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
				<h4 class='orders'>Orders</h4>
				<h4 class='products'>Products</h4>
				<h4 class='logoff'>log off</h4>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns" id='search'>
				<form action='' method='post' class='search'>
					<input type='text' placeholder='search'>
					<input type='submit' value='search'>
				</form>
				<form action='' method='post'>
					<input type='submit' value='Add new product'>
				</form>
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
						<tr>
							<td><div class='image'></div></td>
							<td>1</td>
							<td>T-shirt</td>
							<td>123</td>
							<td>90</td>
							<td>
								<a href="">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
						<tr>
							<td><div class='image'></div></td>
							<td>2</td>
							<td>Hats</td>
							<td>40</td>
							<td>$120.00</td>
							<td>
								<a href="">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
						<tr>
							<td><div class='image'></div></td>
							<td>3</td>
							<td>Mugs</td>
							<td>90</td>
							<td>7</td>
							<td>
								<a href="">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
						<tr>
							<td><div class='image'></div></td>
							<td>4</td>
							<td>Pants</td>
							<td>0</td>
							<td>786789</td>
							<td>
								<a href="">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
						<tr>
							<td><div class='image'></div></td>
							<td>5</td>
							<td>Belts</td>
							<td>89</td>
							<td>20</td>
							<td>
								<a href="">edit</a>
								<a href="">remove</a>
							</td>
						</tr>
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