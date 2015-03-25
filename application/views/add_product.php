<html>
<head>
	<title>Add New Product</title>
	<link rel="stylesheet" href="../assets/normalize.css">
	<link rel="stylesheet" href="../assets/skeleton.css">
	<style type="text/css">

		label {
			display: inline-block;
		}

	</style>
</head>
<body>

<div class="container">
	<h4>Add New Product</h4>
	<div class="six columns">
		<form action="/dashboard/create_product" method="post">
			<div class="row">
				<label for="name">Name</label>
				<input class="u-pull-right" type="text" name="name" id="name"> 
			</div>
			<div class="row">
				<label for="description">Description</label>
				<textarea class="u-pull-right" name="description" id="description"></textarea>
			</div>
			<div class="row">
				<label for="categories">Categories</label>
				<select class="u-pull-right" id="categories" name='category'>
					<option value="hot drinks">Hot drinks</option>
					<option value="milk tea">Milk tea</option>
					<option value="smoothies">Smoothies</option>
				</select>
			</div>
			<div class="row">
				<label for="other">or add new category:</label>
				<input class="u-pull-right" type="text" name="other" id="other">
			</div>
			<div class="row">
				<label for="price">Price</label>
				<input class="u-pull-right" type="text" name="price" id="price">
			</div>
<!-- 			<div class="row">
				<label for="image">Images</label>
				<input class="u-pull-right" type="file" name="images" id="image">
			</div> -->
<!-- 			<div class="row">
				<form action="#" method="post">
					<div class="row">
						<img src="#">
						img.png 
						{trash icon} 
						<input type="checkbox" name="main" value="main">
					</div>
					<div class="row">
						<img src="#">
						img.png 
						{trash icon} 
						<input type="checkbox" name="main" value="main">
					</div>
					<div class="row">
						<img src="#">
						img.png 
						{trash icon} 
						<input type="checkbox" name="main" value="main">
					</div>
				</form>
			</div> -->
			<div class="row">
				<a href="/dashboard/products"><button>Cancel</button></a>
				<input class="button-primary" type="submit" value="Add Product">
			</div>
		</form>
	</div>
</div>

</body>
</html>