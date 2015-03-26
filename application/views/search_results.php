<html>
<head>
	<title>Bobalicious</title>
	  <link rel="stylesheet" href="/../assets/normalize.css">
  <link rel="stylesheet" href="/../assets/skeleton.css">
  <style type="text/css">
	.column_border{
		border: 1px solid #000000;
	}
	.header_bar{
		background-color: #000000;
	}
  	.title{
  		color: #ffffff;
  	}
  	.inline{
  		display: inline;
  	}
  	.top_margin{
  		margin-top: 15px;
  	}
  	.no_decoration{
  		list-style: none;
  		margin-left: 10px;
  	}
  	.right_border:not(.last){

  		border-right: 1px solid #000000;
  		padding-right: 10px;
  		display: inline;
  	}
  	.image{
  		display: inline-block;
  		margin: 5px;
  	}
  	img{
  		width: 100px;
  		height: 100px;
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
	<div class="row"> <!-- header bar -->
		<div class="12 columns header_bar">
			<h3 class="title inline">Bobalicious</h3>
			<h6 class="title inline u-pull-right"><a href="/products/view_cart">Shopping Cart (<?= $this->session->userdata("cart_total") ?>)</a></h6>
		</div>
	</div>

	<div class="row top_margin">
		<div class="four columns column_border"> <!-- Left Bar -->
			<form action="/products/search" method="post">
				<div class="row">
					<input class="u-pull-left" type="search" name="product_name" placeholder="product name">
					<input class="button u-pull-right" type="submit" value="Go">
				</div>
			</form>

			<strong>Categories</strong>
			<ul class="no_decoration">
				<li><a href="/products/category/1">Milk Teas (<?= $this->session->userdata["mt_count"]['count'] ?>)</a></li>
				<li><a href="/products/category/2">Hot Drinks (<?= $this->session->userdata["hd_count"]['count'] ?>)</a></li>
				<li><a href="/products/category/3">Smoothies (<?= $this->session->userdata["sm_count"]['count'] ?>)</a></li>
				<li><dfn><a href="/">Show All</a></dfn></li> <!-- dfn italicizes -->
			</ul>
		</div> 
		<div class="eight columns column_border"><!-- Content Box -->
				
			<div class="row">
				<?php
				if($results == NULL)
				{
					echo "<h4>No results for " . $this->session->userdata("search") . "</h4>";
				}
				else
				{
					echo "<h4>Search results for " . $this->session->userdata("search") . ":</h4>";
					foreach($results as $result)
					{
						echo "<div class='image'>";
						echo "<a href='/products/show/" . $result['id']."'>";
						echo "<img src='/../assets/images". $result['image'] . "01.jpg'></a>";
						echo "<p class='price'>$" . $result['price'] . ".00</p>";
						echo "<a href='/products/show/" . $result['id']."'><p>" . $result['name'] . "</p></a></div>";
					}
				}
				?>
			</div>

		</div> 
	</div>

</div>

</body>
</html>