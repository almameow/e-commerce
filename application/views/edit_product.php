<html>
<head>
	<title>Edit Product - ID #<?= $edit_product->id ?></title>
	<link rel="stylesheet" href="/../assets/normalize.css">
	<link rel="stylesheet" href="/../assets/skeleton.css">
	<style type="text/css">

		label {
			display: inline-block;
		}

	</style>
</head>

<body>
<div class="container">
	<h4>Edit Product - ID #<?= $edit_product->id ?></h4>
	<div class="six columns">
		<form action="/dashboard/edit_product" method="post">
			<div class="row">
				<label for="name">Name</label>
				<input class="u-pull-right" type="text" value="<?= $edit_product->name ?>" name="name" id="name"> 
			</div>
			<div class="row">
				<label for="description">Description</label>
				<textarea class="u-pull-right" name="description" id="description"><?= $edit_product->description ?></textarea>
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
				<label for="image">Images</label>
				<input class="u-pull-right" type="file" name="images" id="image">
			</div>
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
					</div> -->
					<div class="row">
						<a href="#"><button>Cancel</button></a> <!-- Link closes this window? Redirect? I dunno -->
						<a href="#" target="_blank"><button>Preview</button></a> <!-- Link opens new tab w/ approperiate product page -->
						<input type='hidden' name='id' value='<?= $edit_product->id ?>'>
						<input class="button-primary" type="submit" value="Update">
					</div>
<!-- 			</div> -->
		</form>
	</div>
</div>

</body>
</html>