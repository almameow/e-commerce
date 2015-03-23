<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" href="../assets/normalize.css">
	<link rel="stylesheet" href="../assets/skeleton.css">
	<style type="text/css">
		#header {
			height: 50px;
			color: white;
			background-color: black;
		}

			#header h3 {
				display: inline-block;
				width: 825px;
			}

			#header h6 {
				display: inline-block;
				line-height: 50px;
				vertical-align: top;
			}

			.image {
					height: 300px;
					width: 300px;
					border: solid 1px black;
					margin-bottom: 10px;
				}

				.little_image {
					height: 50px;
					width: 50px;
					border: solid 1px black;
					display: inline-block;
					margin-right: 10px;
				}

			#purchase {
				text-align: right;
			}

			.similar_image {
				height: 100px;
				width: 100px;
				border: solid 1px black;
				display: inline-block;
				margin-right: 10px;
			}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve columns" id='header'>
				<h3>Dojo eCommerce</h3>
				<h6>Shopping cart (5)</h6>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<a href="">Go back</a>
				<h3>Black Belt for Staff<h3>
			</div>
		</div>
		<div class="row">
			<div class="five columns" id='shopping'>
				<div class='image'></div>
				<div class='little_image'></div>
				<div class='little_image'></div>
				<div class='little_image'></div>
				<div class='little_image'></div>
				<div class='little_image'></div>
			</div>
			<div class="seven columns">
				<p>
					Description about the product Description about the product Description about the product Description about the product Description about the product Description about the productDescription about the product Description about the product Description about the product Description about the product Description about the product Description about the product Description about the product
				</p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns" id='purchase'>
				<form action='' method='post'>
					<select name="price">
						<option value="one">1 ($19.99)</option>
						<option value="two">2 ($39.99)</option>
						<option value="three">3 ($59.97)</option>
					</select>
					<input type="submit" value="Buy">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<h4>Similar items</h4>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
				<div class='similar_image'></div>
			</div>
		</div>
</body>
</html>