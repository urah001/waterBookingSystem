<?php
include("../connection/connect.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(isset($_GET['order_del'])){
    $order_id = intval($_GET['order_del']);  // Secure integer
    $query = "DELETE FROM orders WHERE id = '$order_id'";
    $result = mysqli_query($db, $query);

    if($result){
        echo "Deleted order with ID: " . $order_id;
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
} else {
    echo "No order_del GET parameter received.";
}
?>
