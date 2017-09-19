<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "shop";

	$err = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	} 
	mysqli_set_charset($conn, "utf8");

	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);

	$prekes = [];

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	   //echo $row["Id"]. " - Name: " . $row["Name"]. " -Price " . $row["Price"]. " - Amount: " . $row["Amount"] . " - Description: " . $row["Description"] . "<br>";
	    	array_push($prekes, $row);
	    }
	} else {
	    $err = "produktų nerasta";
	}
	mysqli_close($conn);

	include "view.php";
?>
