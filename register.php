<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registeration</title>	
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chewy"/>
	<link type="text/css" href="./css/register.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<li><a class="active" href="#register">Signup</a></li>
			    <li><a href="cart.php">Your Cart</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
			</div></ul>
</header>

<body>

<div class="form">
	<h2>Register for Salvos</h2>
<!-- Creating form for customer registration-->
	<form name="registerationform" class="elements" action="register.php" method = "POST">
<!-- Creating input fields. All fields have required parameter making sure, form is only submitted once all fields are filled-->
<!-- value parameter is setup with php code , such that in case of error, entered data is not lost-->
		<div class="inputfield">
			<label> First Name: </label>
			<input type="text" id="firstname" name="firstname" required <br>
		</div>
		<div class="inputfield">
			<label>Last Name: </label>
			<input type="text" id="lastname" name="lastname" required <br>
		</div>
<!--Radio button to choose the gender-->
		<div class="inputfield">		
			<label>Gender:</label>
			<input type="radio" id= "gender" name="gender" required value="male"> Male
			<input type="radio" id= "gender" name="gender" required value="female"> Female<br>	
			</div>
		<br>
<!--Email data type ensures that user input is according to the email format i.e. xyz@abc.com-->
		<div class="inputfield">		
			<label>Email ID: </label>
			<input type="email" id="emailid" name="emailid" required <br>
		</div>
<!--Pattern ensures that 10-digit phone number is entered by user-->
		<div class="inputfield">
			<label>Phone: (Enter 10 Digit Phone Number) </label>
			<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required <br>
		</div>
		<div class="inputfield">
			<label>Address: </label><br>
			<input <textarea type="text" class="textarea" id="address" name = "address" required </textarea><br>
		</div>
<!--Pattern ensures that 4-digit postcode is entered by user-->
		<div class="inputfield">
			<label>Postcode: (Enter 4 Digit Postcode)</label>
			<input type="tel" id="postcode" name="postcode" pattern="[0-9]{4}" required <br>
		</div>
<!--Password data type ensures that user input of password is not displayed-->
		<div class="inputfield">
			<label>Password: </label>
			<input type="password" id="password" name="password" required <br>
		</div>
		<div class="inputfield">
			<label>Confirm Password: </label>
			<input type="password" id="Cpassword" name="Cpassword" required <br>
		</div>
		<div>
<!--button created to submit the registration form-->
			<center><button type="Submit" class="registerbtn" name="register">Register</button> </center>
			<p id="register"></p>
		</div>
	</form>
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
