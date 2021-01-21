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
<body>
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
    
<p style="text-align:center" size="15px;">Shop for Men</p>

<div class="card">
  <img src="Images/12507399-1-multi.webp" alt="Tshirt" style="width:100%">
  <h1>T-shirt</h1>
  <p class="price">$33.99</p>
  <p>ASOS DESIGN relaxed t-shirt in vertical stripe with aesthetic embroidery.</p>
  <p><button>Add to Cart</button></p>
</div>
    
<div class="card">
  <img src="Images/5d5525078af33033547c754f-large.jpg" alt="Hoodie" style="width:100%">
  <h1>Hoodie</h1>
  <p class="price">$39.99</p>
  <p>Personality Street Style Graffiti Hip hop Print Hoodie Men's Casual Large Size Loose Sweater Long Sleeve Sweatshirt</p>
  <p><button>Add to Cart</button></p>
</div>
<div class="card">
  <img src="Images/51003-6590-89-Z01W.webp" alt="Jeans" style="width:100%">
  <h1>Tapered Jeans</h1>
  <p class="price">$44.99</p>
  <p>3301 Straight Tapered Jeans</p>
  <p><button>Add to Cart</button></p>
</div>
    
<div class="card">
  <img src="Images/11-12-20Studio1_RM_DJ_10-34-10_38_MKS0073_BlackYellow_4077_WG_5d6385e8-d14c-47ff-b94b-e883c8db5084_760x.webp" alt="Shirt" style="width:100%">
  <h1>Shirt</h1>
  <p class="price">$36.99</p>
  <p>Gold Leaf Long Sleeve Woven Top - Black/Yellow</p>
  <p><button>Add to Cart</button></p>
</div>
</body>
</html>