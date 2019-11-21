<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_shoppinglist";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!mysqli_set_charset($conn,"utf8")) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo "Connected successfully";


?>