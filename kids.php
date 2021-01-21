<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title> Home page </title>
</head>
<header>

		<div class "salvos">
<!--When clicked on logo redirect to home page -->
			<a href="index.php">Salvos</a>
		</div>
			<ul><div class="topnav">
				<li><a href="about.php">About</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Signup</a></li>
			    <li><a href="cart.php">Your Cart</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
			</div></ul>
</header>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
        float: left;
    }

    .price {
      color: grey;
      font-size: 22px;
    }

    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }
</style>
</head>
<body>

<p style="text-align:center">Shop for Kids</p>

<div class="card">
  <img src="Images/0468KindisCool2020_1800x1800.jpg" alt="Tshirt" style="width:100%">
  <h1>Kind is Cool Tshirt</h1>
  <p class="price">$33.99</p>
  <p>KIND IS COOL: Our beautifully soft ,100% cotton t shirts are a classic t shirt style, the perfect everyday tee! Our clothing is sold worldwide, designed and printed in Australia.</p>
  <p><button>Add to Cart</button></p>
</div>
    
<div class="card">
  <img src="Images/81GUjBp4f7L._AC_SL1500_.jpg" alt="Floormat" style="width:100%">
  <h1>Floor Piano Mat</h1>
  <p class="price">$73.99</p>
  <p>Floor mat Piano which is fun for kids to play and enjoy.</p>
  <p><button>Add to Cart</button></p>
</div>
<div class="card">
  <img src="Images/SEESAWBUBBLE_media-05.jpg" alt="SeeSaw" style="width:100%">
  <h1>Bubble See saw</h1>
  <p class="price">$100.99</p>
  <p>Maximum bounce! That's what we've packed into the Bubble See Saw.</p>
  <p><button>Add to Cart</button></p>
</div>
    
<div class="card">
  <img src="Images/spidermantracksuit.jpg" alt="Tracksuit" style="width:100%">
  <h1>Spiderman Track Suit</h1>
  <p class="price">$26.99</p>
  <p>Super comfortable clothing for kids to wear.</p>
  <p><button>Add to Cart</button></p>
</div>
</body>
</html>