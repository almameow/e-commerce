<html>
<head>
	<title>Bobalicious</title>
	  <link rel="stylesheet" href="../assets/normalize.css">
  <link rel="stylesheet" href="../assets/skeleton.css">
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
  </style>
</head>
<body>

<div class="container">
	<div class="row"> <!-- header bar -->
		<div class="12 columns header_bar">
			<h3 class="title inline">Bobalicious</h3>
			<h6 class="title inline u-pull-right"><a href="#">Shopping Cart (5)</a></h6>
		</div>
	</div>

	<div class="row top_margin">
		<div class="four columns column_border"> <!-- Left Bar -->
			<form action="#" method="post">
				<div class="row">
					<input class="u-pull-left" type="search" name="product_name_search" placeholder="product name">
					<input class="button u-pull-right" type="submit" value="Go">
				</div>
			</form>

			<strong>Categories</strong>
			<ul class="no_decoration">
				<li><a href="products_1.html">Milk Teas ({quantity})</a></li>
				<li><a href="products_2.html">Blended Coffee ({quantity})</a></li>
				<li><a href="products_3.html">Smoothies ({quantity})</a></li>
				<li><dfn><a href="products.html">Show All</a></dfn></li> <!-- dfn italicizes -->
			</ul>
		</div> 
		<div class="eight columns column_border"><!-- Content Box -->
			<div class="row"> <!-- Title and links-->
				<h4 class="inline">All Products</h4>
				<span class="u-pull-right"><a href="#">first</a> | <a href="#">prev</a> | 2 | <a href="#">next</a></span>
			</div>

			<div class="row"> <!-- Sorted by drop box-->
				<form action="#" method="post">
					<div class="u-pull-right">
						<label for="sorted_by" class="inline">Sorted by</label>
						<select  id="sorted_by" name="sorted_by">
							<option value="Price">Price</option>
							<option value="Most Popular">Most Popular</option>
						</select>
						<input type="submit" class="button" value="GO">
					</div>
				</form>
			</div>

			<div class="row">
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Taro Boba</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Other Boba</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Milk Tea</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Smoothies</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Blended Coffee</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Blended Coffee</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Biceps Boba</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Taro Boba</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Taro Boba</p>
					</a>
				</div>
				<div class="image">
					<a href="#">
						<img src="#">
						<p>Taro Boba</p>
					</a>
				</div>
			</div>

			<div class="row">
				<ul class="no_decoration">
					<li class="right_border"><a href="#">1</a></li>
					<li class="right_border"><a href="#">2</a></li>
					<li class="right_border"><a href="#">3</a></li>
					<li class="right_border"><a href="#">4</a></li>
					<li class="right_border"><a href="#">5</a></li>
					<li class="right_border"><a href="#">6</a></li>
					<li class="right_border"><a href="#">7</a></li>
					<li class="right_border"><a href="#">8</a></li>
					<li class="right_border"><a href="#">9</a></li>
					<li class="right_border"><a href="#">10</a></li>
					<li class="inline"><a href="#">-></a></li>
				</ul>
			</div>
		</div> 
	</div>

</div>

</body>
</html>