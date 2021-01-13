<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="view port" content="width=device-width, initial scale=1">
		<title>Admin Login</title>	
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
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Signup</a></li>
			    <li><a href="cart.php">Your Cart</a></li>
				<li><a class="active" href="adminlogin.php">Admin</a></li>
			</div></ul>
</header>
<body>
	<div class="form">
	<h2>Admin Login</h2>
		<div class="customer">
		<form class="form-inline" action="login.php" method = "POST">
			<label for="adminid">Admin ID </label><br>
			<input type="text" id="adminid" name="adminid" required>
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
