<?php
// error management
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('html_errors', 1);


//main connection file for both admin & front end
$servername = "127.0.0.1"; //localhost server address
$username = "root"; //username
$password = ""; //password
$dbname = "onlinewater";  //database name

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>