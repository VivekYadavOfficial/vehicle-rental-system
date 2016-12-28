<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="UTF-8">
	<title>Add New Vehicles : Vehicle Rental System : HomePage</title>
	<script src="vrs.js"></script>
	<link rel="stylesheet" type="text/css" href="vrs.css"/>
	<link rel="stylesheet" type="text/css" href="add_info.css"/>
</head>
<body>
<div id="div1">
<img id="logo" src="logo.jpg" height="200" width="300" alt="vehicle rental system">
<header>
	<h1>Vehicle Rental System</h1>
</header>
<hr>
</div>
	<a class="orderlink" href="order_history.html">Order History</a>
	<a class="defaultlink" href="default.html">Home</a>
	<nav id="navigation">
  <a href="add_info.php">Add New Vehicle</a> |
  <a href="create_db.php">Create Database</a> |
  <a href="general.html">General</a> |
  <a href="special.html">Special</a> |
  <a href="remove_vehicle.php">Remove Vehicle</a> |
</nav>
	<main id="main_add">

	<form id="form1" action="add_vehicle.php" method="post">
		Table Name 		:
		 <select required name="category" >
  			<option value="car">Car</option>
  			<option value="bike">Bike</option>
  			<option value="scooter">Scooter</option>
  			<option value="other">Other</option>
		</select>
		<br>
		<pre>Vehicle Make 	:</pre>
		<input required type="text" name="v_make">
		<br>
		<pre>Vehicle Model 	:</pre>
		<input required type="text" name="v_model">
		<br>
		<pre>Vehicle No. 	:</pre>
		<input required type="text" name="v_no">
		<br>
		<pre>No. of wheels 	:</pre>
		<input required type="number" maxlength="1" value="2" name="wheels">
		<br>
		<button name="submit_form_1" type="submit" value="Add_Vehicle">Add Vehicle</button>
	</form>
	</main>
	</body>
</html>