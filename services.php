<!DOCTYPE html>
<html lang="en">
<?php
require_once("connection/connect.php");
session_start();
error_reporting(E_ALL);

if (isset($_POST['book'])) {
    $user_id = $_SESSION['user_id'] ?? 1; // default for testing
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $status = "Paid";
    $order_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO orders(user_id, item, quantity, price, status, order_date)
            VALUES('$user_id', '$item', '$quantity', '$price', '$status', '$order_date')";
    if (mysqli_query($db, $sql)) {
        $success = "Order placed successfully! You have paid ₦" . $price;
    } else {
        $error = "Error: " . mysqli_error($db);
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Book & Pay for Water</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    
    <div class="container mt-5">
        
        <h2 class="text-center mb-4">Book & Pay for Water</h2>

        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?= $success; ?></div>
        <?php elseif (isset($error)): ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="item">Select Water Type:</label>
                <select name="item" id="item" class="form-control" onchange="updatePrice()">
                    <option value="Pure Water Sachet" data-price="10">Pure Water Sachet - ₦10</option>
                    <option value="Bottled Water" data-price="30">Bottled Water - ₦30</option>
                    <option value="jerican of water" data-price="50">jerican of water  - ₦50</option>
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1"
                    onchange="updatePrice()">
            </div>

            <div class="form-group">
                <label for="total">Total Price (₦):</label>
                <input type="text" name="price" id="total" class="form-control" readonly>
            </div>

            <button type="submit" name="book" class="btn btn-primary btn-block">Book & Pay</button>
        </form>
    </div>

    <script>
        function updatePrice() {
            let item = document.getElementById("item");
            let price = item.options[item.selectedIndex].getAttribute("data-price");
            let quantity = document.getElementById("quantity").value;
            document.getElementById("total").value = price * quantity;
        }
        window.onload = updatePrice;
    </script>

</body>

</html>