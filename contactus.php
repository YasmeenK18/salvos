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
<h1 style="text-align:center;padding:20px;font-size:45px;"><i><u>Queries </u></i></h1>


<form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text1" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text1" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
	
	
	<div class="row">
      <div class="col-25">
        <label for="lname"> Email</label>
      </div>
      <div class="col-75">
        <input type="text1"  name="email" placeholder="example123@gmail.com">
      </div>
    </div>
	
	    <div class="row">
      <div class="col-25">
        <label>Phone Number</label>
      </div>
      <div class="col-75">
	   <input type="text1" name="code no" placeholder="+61" style="width:50px; height:20px">
        <input type="text1" name="mobile no" placeholder="410 260 186.." style="width:200px; height:20px">
      </div>
    </div>
	
	
	
	<div class="row">
      <div class="col-25">
        <label for="lname">Address </label>
      </div>
      <div class="col-75">
        <input name="Street Adress" type="text1"  placeholder="24 Walsh Street ormond 3204">
		
      </div>
	  <div class="col-75">
        <input name="Street Adress Line2" type="text1"  placeholder="Melbourne Victoria">
      </div>
	  <div class="col-25">
        <label > </label>
      </div>
	  <div class="col-75">
        <input name="City" type="text1"  placeholder="City"> 
      </div>
	  <div class="col-25">
        <label > </label>
      </div>
	  <div class="col-75">
        <input name="Region" type="text1"  placeholder="Region">
      </div>
    </div>
	
	
	
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
	
	
	
	


	
	
	
	
    <div class="row">
      <div class="col-25">
        <label for="subject">Message</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	
	
	
	
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
					</div>


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