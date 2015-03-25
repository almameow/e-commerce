<html>
<head>
	<title>Bobalicious - <?= $product['name'] ?></title>
	<link rel="stylesheet" href="/../assets/normalize.css">
	<link rel="stylesheet" href="/../assets/skeleton.css">
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
					display: block;
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
				
				display: inline-block;
				margin-right: 10px;
			}
				.similar_image img{
					height: 100px;
					width: 100px;
					border: solid 1px black;
				}
			.price{
		  		text-align: right;
		  		width: 100%;
		  		margin: -20px 0px 0px 0px;
		  		padding: 0px;
		  	}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="twelve columns" id='header'>
				<h3>Bobalicious</h3>
				<h6><a href="/products/view_cart">Shopping cart (<?= $this->session->userdata("cart_total") ?>)</a></h6>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<a href="/">Go back</a>
				<h3><?= $product['name'] ?><h3>
			</div>
		</div>
		<div class="row">
			<div class="five columns target" id='shopping'>
			<?php
				echo "<img class='image' src='/../assets/images/" . $product['image'] . "01.jpg'>";
				echo "<img class='little_image' src='/../assets/images/" . $product['image'] . "01.jpg'>";
				echo "<img class='little_image' src='/../assets/images/" . $product['image'] . "02.jpg'>";
				echo "<img class='little_image' src='/../assets/images/" . $product['image'] . "03.jpg'>";
			?>
			</div>
			<div class="seven columns">
				<p> <?= $product['description'] ?></p>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns" id='purchase'>
				<?php
				echo "<form action='/products/add_to_cart/" . $product['id'] . "' method='post'>";
				?>
					<input type="hidden" name="product_id" value="<?= $product['id'] ?>">
					<select name="quantity">
						<?php
						for($i=1; $i<11; $i++)
						{
							echo "<option value='$i'> $i (" .$product['price'] * $i .".00)</option>";
						}
						?>
					</select>
					<input type="submit" value="Buy">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<h4>Similar items</h4>
				<div class="row">
					<?php
					foreach($similar as $each_similar)
					{
						echo "<div class='similar_image'>";
						echo "<a href='/products/show/" . $each_similar['id']."'>";
						echo "<img src='/../assets/images/". $each_similar['image'] . "01.jpg'></a>";
						echo "<p class='price'>$" . $each_similar['price'] . ".00</p>";
						echo "<a href='/products/show/" . $each_similar['id']."'><p>" . $each_similar['name'] . "</p></a></div>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>