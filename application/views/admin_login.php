<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="../assets/normalize.css">
	<link rel="stylesheet" href="../assets/skeleton.css">
	<style type="text/css">
		.margin_left{
			margin-left: 30px;
		}
		.inline{
  			display: inline;
	  	}
	  	.error{
			color: red;
			text-decoration: bold;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="five columns">
			<h4>Admin Login Page</h4>
			<?php
				if($this->session->flashdata("login_error"))
				{
					echo "<div class='error'>".$this->session->flashdata("login_error")."</div>";
				}
			?>
			<form action="/Admins/login" method="post">
				<div class="row">
					<label for="email" class="inline">Email:</label>
					<input type="email" class="u-pull-right" name="email" id="email">
				</div>
				<div class="row">
					<label for="password" class="inline">Password:</label>
					<input type="password" class="u-pull-right" name="password" id="password">
				</div>
				<div class="row u-pull-right">
					<input class="button-primary" type="submit" value="Login"> 
				</div>
			</form>
		</div>
	</div>


</body>
</html>