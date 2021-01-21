<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chewy" />
<link rel="stylesheet" type="text/css" href="css/contact.css">


<link rel="stylesheet" href="./css/style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Salvos </title>
</head>
<header>

		<div class "salvos">
<!--When clicked on logo redirect to home page -->
			<a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
		</div>
			<ul><div class="topnav">
				<li><a href="about.html">About</a></li>
				<li><a href="product.html">Products</a></li>
				<li><a href="contactus.html">Contact Us</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="register.php">Signup</a></li>
			    <li><a href="cart.php">Your Cart</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
			</div></ul>
</header>
<h1 style="text-align:center;padding:20px;font-size:45px;"><i><u>Donate Now</u></i></h1>

<div class="main">
 <div class="container">
 <form action="action_page.php">
 

 <label for="amount"> Amount </label>
 <input type="text" required placeholder="$0.00" size="10">
 
 <div class= 'form-row'>
 <label class='checkbox-label' for='available'>
<input id='available'
	   name='available'
	   type='checkbox'
	   value='is-available'/>
<span> By ticking this box you are supporting our donation page.</span>
</label>
</div>

 <h2> Contact Information </h2>
 <label for="fname"> First Name </label>
 <input type="text" id="fname" name="firstname" placeholder="Your first name..">
 
 <label for="lname"> Last Name </label>
 <input type="text" id="lname" name="lastname" placeholder="Your last name..">
 
 <label for="email"> Email </label>
 <input type="text" id="email" name="email" placeholder="joe@example.com">
 
 <h2> Billing Address </h2>
 
<label for="country">Country </label>
<select id="country" name="country">
	<option value="australia"> Australia</option>
	<option value="canada"> Canada</option>
	<option value="usa"> USA</option>
</select>

 <label for="address"> Address </label>
<textarea id="address" name="address" placeholder="Write something.." style= "height:100px"> </textarea>

<label for="comment"> Comment </label>
<textarea id="comment" name="comment" placeholder="Write something.." style= "height:200px"> </textarea>
 

<center><br>

	<input type="submit" value="Donate Now">


</form>
</div>
</div>
</center>

</main>
</body>
<footer class = "footer">
	<br>
	<br>
		<center><hr style="width:50%">
		<p>Follow us</p>
		<a href="http://www.facebook.com" class="fa fa-facebook"></a>
		<a href="http://www.twitter.com" class="fa fa-twitter"></a>
		<a href="http://www.instagram.com" class="fa fa-instagram"></a>
		<br>
		<p>&copy; Copyright 2020. All Rights Reserved.</p>
		<p><a href="mailto:salvos.com">salvos@gmail.com</p>
</footer>

</html>