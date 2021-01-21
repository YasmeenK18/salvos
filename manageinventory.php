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
  </style>
</head>
<body>

<h1>Manage Inventory</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Add Product</div>
        <button>Add Product</button>
      </div>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Edit Product</div>
        <button>Edit Product</button>
      </div>
    </div>
      <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Delete Product</div>
        <button>Delete Product</button>
      </div>
    </div>
  </div>
          <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">View your stock</div>
        <button>Stocktake</button>
      </div>
    </div>
  </div>
</div><br>

</body>
</html>
