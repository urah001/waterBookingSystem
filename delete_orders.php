<?php
include("connection/connect.php");
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['order_del'])) {
    $order_id = intval($_GET['order_del']); // Sanitize input

    // Run the deletion
    $query = "DELETE FROM orders WHERE id = $order_id";
    $result = mysqli_query($db, $query);

    if ($result) {
        header("Location: your_orders.php?status=deleted");
        exit();
    } else {
        echo "Error deleting order: " . mysqli_error($db);
    }
} else {
    echo "Invalid request. No order ID provided.";
}
?>
