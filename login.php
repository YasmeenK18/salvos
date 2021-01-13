<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="view port" content="width=device-width, initial scale=1">
		<title>Login</title>	
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chewy" />
		
		<link type="text/css" href="./css/style.css" rel="stylesheet"/>
	</head>
<header>
		<div class "salvos">
<!--When clicked on logo redirect to home page -->
			<a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
		</div>
			<ul><div class="topnav">
				<li><a href="about.php">About</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a class="active" href="#login">Login</a></li>
				<li><a href="register.php">Signup</a></li>
			    <li><a href="cart.php">Your Cart</a></li>
				<li><a href="admin.php">Admin</a></li>
			</div></ul>
</header>
<body>
	<div class="form">
	<h2>Login to Salvos</h2>
		<div class="customer">
		<form class="form-inline" action="login.php" method = "POST">
			<label for="customerid">Customer ID </label><br>
			<input type="text" id="customerid" name="customerid" required>
			<br>
			<br>
			<label for="password">Password</label><br>
			<input type="password" id="password" name="password" required>
			<br>
			<br>
			<center><button type="login" class="btn" name="login">login</button> </center>
			<p id="login"></p>
		</form>
		</div>
	</div>
<footer class = "footer">
	<br>
	<br>
		<center><hr style="width:50%">
		<h4>Follow us</h4>
		<a href="http://www.facebook.com" class="fa fa-facebook"></a>
		<a href="http://www.twitter.com" class="fa fa-twitter"></a>
		<a href="http://www.instagram.com" class="fa fa-instagram"></a>
		<br>
		&copy; Copyright 2020. All Rights Reserved.<br>
		<a href="mailto:salvos.com">salvos@gmail.com</a></center>
</footer>