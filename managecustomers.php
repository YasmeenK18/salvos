<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="view port" content="width=device-width, initial scale=1">
		<title>Manage Customers</title>	
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Chewy" />
		<link type="text/css" href="./css/style.css" rel="stylesheet"/>
	</head>
<header>
		<div class "salvos">
<!--When clicked on logo redirect to home page -->
			<a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
		</div>
			<ul><div class="topnav">
					<li><a href="addproduct.php">Add Product</a></li>
			    <li><a href="manageprodcut.php">Manage Products</a></li>
				<li><a href="addcustomer.php">Add Customer</a></li>
				<li><a class="active" href="managecustomers.php">Manage Customers</a></li>
			</div></ul>
</header>
<body>
<h1> Customer Details </h1>
<!--creating table headings for customer details -->
	<table class="table1" align="center" width="100%">
		<tr>
			<th>CustomerID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Gender</th>
			<th>Email ID</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Post code</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>S123456</th>
			<td>Yasmeen</td>
			<td>Ayub</td>
			<td>Female</td>
			<td>k180602@student.kent.edu.au</td>
			<td>0123456789</td>
			<td>45 XYZ Street </td>
			<td>1234</td>
			<td> <a href="edit.php?GetID=">Edit</a>
			     <a href="delete.php?GetID=">Delete</a></td>
		</tr>
</body>