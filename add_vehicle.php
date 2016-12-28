<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="UTF-8">
	<meta http-equiv="refresh" content="3; url=add_info.php">
	<title>Vehicle Rental System : HomePage</title>
	<script src="vrs.js"></script>
	<link rel="stylesheet" type="text/css" href="vrs.css"/>
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
	<main id="main1">

<?php

$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "vrsDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

	$cat=$_POST['category'];
	$v_make=$_POST['v_make'];
	$v_name=$_POST['v_name'];
	echo $v_make." ".$v_name." added to the database.<br>";
?>

	</main>

	</body>
</html>