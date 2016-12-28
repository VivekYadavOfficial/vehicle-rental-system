<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="UTF-8">
	<title>Vehicle Rental System : HomePage</title>
	<script src="vrs.js"></script>
	<link rel="stylesheet" type="text/css" href="vrs.css"/>
</head>
<body>
<div id="div1">
<img id="logo" src="logo.jpg" height="200" width="300" alt="vehicle rental system">
<header>
	<h1>Create Database : Vehicle Rental System</h1>
</header>
<hr>
</div>
	<a class="orderlink" href="order_history.html">Order History</a>
	<a class="defaultlink" href="default.html">Home</a>
	<main id="main1">
	<PRE>
		
		SJ

		SMDS

	</PRE>
 <?php
$servername = "localhost";
$username = "root";
$password = "system";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS vrsDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$sql3="USE vrsDB";

if($conn->query($sql3)===TRUE);
// sql to create table
$sql2 = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql2) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
</main>
 </body>
 </html>