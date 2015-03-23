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
					<select name='status'>
						<option value='show_all'>Show All</option>
						<option value='in_process'>Order in process</option>
						<option value='shipped'>Shipped</option>
					</select>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<table>
					<thead>
						<th>Order ID</th>
						<th>Name</th>
						<th>Date</th>
						<th>Billing Address</th>
						<th>Total</th>
						<th>Status</th>
					</thead>
					<tbody>
						<tr>
							<td>100</td>
							<td>Bob</td>
							<td>9/6/2014</td>
							<td>123 Dojo Way Bellevue WA 98005</td>
							<td>$149.99</td>
							<td>
								<form action='' method='post' class='status'>
									<select name='status'>
										<option value='show_all'>Shipped</option>
										<option value='in_process'>Order in process</option>
										<option value='shipped'>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>99</td>
							<td>Alma</td>
							<td>9/6/2014</td>
							<td>123 Rainbow Rd San Jose CA 90034</td>
							<td>$120.00</td>
							<td>
								<form action='' method='post' class='status'>
									<select name='status'>
										<option value='show_all'>Shipped</option>
										<option value='in_process'>Order in process</option>
										<option value='shipped'>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>98</td>
							<td>Cindy</td>
							<td>9/6/2014</td>
							<td>123 Boba Court</td>
							<td>$4.99</td>
							<td>
								<form action='' method='post' class='status'>
									<select name='status'>
										<option value='show_all'>Shipped</option>
										<option value='in_process'>Order in process</option>
										<option value='shipped'>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>97</td>
							<td>Courtney</td>
							<td>9/8/2014</td>
							<td>5698 La La Land San Jose CA 90370</td>
							<td>$19.99</td>
							<td>
								<form action='' method='post' class='status'>
									<select name='status'>
										<option value='show_all'>Shipped</option>
										<option value='in_process'>Order in process</option>
										<option value='shipped'>Cancelled</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td>96</td>
							<td>Biceps</td>
							<td>9/5/2014</td>
							<td>45 Biceps Way</td>
							<td>$99.99</td>
							<td>
								<form action='' method='post' class='status'>
									<select name='status'>
										<option value='show_all'>Shipped</option>
										<option value='in_process'>Order in process</option>
										<option value='shipped'>Cancelled</option>
									</select>
								</form>
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