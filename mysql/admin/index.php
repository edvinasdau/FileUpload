<?php
session_start();

if (isset($_GET['logout'])) {
         session_destroy();
         $_SESSION['user'] = null;
     }

if(isset($_SESSION['user'])){

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

    //ar bandoma pridet irasa
    if(isset($_POST['submit'])){
    	$sql = "INSERT INTO products (name, price, amount, weight, descr, color) VALUES ('".$_POST['name']."','".$_POST['price']."', '".$_POST['amount']."','".$_POST['weight']."','".$_POST['descr']."','".$_POST['color']."')";

    	mysqli_query($conn, $sql);
    }

    // ar bandoma istrint irasa

    if(isset($_GET['delete'])){

        //$_GET['delete'] reiksme gaunama is nuorodos ?delete

        $sql = "DELETE FROM products WHERE id = " . $_GET['delete'] ;

        mysqli_query($conn, $sql);

    }

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

    //print_r($_POST);
    //die();

    include "view.php";
} else {
    header ('Location: login.php');
}
?>
