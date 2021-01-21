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


<p style="text-align:center">Shop for Women</p>

<div class="card">
  <img src="Images/HEADSUPBLACK_UNISEX__31560.1608190222.webp" alt="Tshirt" style="width:100%">
  <h1>Heads up Sweater</h1>
  <p class="price">$63.99</p>
  <p>The Heads Up Sweater by P.E Nation is a relaxed easy-wear crew-neck with a large logo on the front for a sporty injection to your everyday wardrobe.</p>
  <p><button>Add to Cart</button></p>
</div>
    
<div class="card">
  <img src="Images/KIC0092_4038d983-cb9b-4180-8421-fb72ae981ecc_1800x1800.webp" alt="Tshirt" style="width:100%">
  <h1>Kind is cool Tshirt</h1>
  <p class="price">$33.99</p>
  <p>KASEY WOMENS T-SHIRT</p>
  <p><button>Add to Cart</button></p>
</div>
<div class="card">
  <img src="Images/camilla_bushfire_tee_7_2048x2048.jpg" alt="Jeans" style="width:100%">
  <h1>Mother Charity Tshirt</h1>
  <p class="price">$44.99</p>
  <p>Straight from our sore but full hearts, The Mother Charity Tee depicts the very spirit of Australia; our flora, fauna and land.</p>
  <p><button>Add to Cart</button></p>
</div>
    
<div class="card">
  <img src="Images/LSKD2241_8026e385-88f1-4d59-95ae-719867b8362c_1800x1800.jpg" alt="Shirt" style="width:100%">
  <h1>Rep Tight</h1>
  <p class="price">$56.99</p>
  <p>Our LSKD Rep tights have been designed from the ground up. We listened to you – our designers took your feedback and implemented it to create the ultimate tight.</p>
  <p><button>Add to Cart</button></p>
</div>
</body>
</html>