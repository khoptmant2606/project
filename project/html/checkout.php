<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}

$item = isset($_POST['item']) ? $_POST['item'] : 'N/A';
$price = isset($_POST['price']) ? $_POST['price'] : 'N/A';
$address = isset($_POST['address']) ? $_POST['address'] : 'N/A';
$phone = isset($_POST['phone']) ? $_POST['phone'] : 'N/A';
$credit_card = isset($_POST['credit_card']) ? $_POST['credit_card'] : 'N/A';

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

$order_details = "Username: $username\n";
$order_details .= "Item: $item\n";
$order_details .= "Price: $price PHP\n";
$order_details .= "Address: $address\n";
$order_details .= "Phone Number: $phone\n";
$order_details .= "Credit Card Number: $credit_card\n";
$order_details .= "------------------------------------\n";

$file = 'orders.txt';
file_put_contents($file, $order_details, FILE_APPEND);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<Header class="coffee.header">
    <center><h1>Checkout Details</h1></center>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.php" class="link">CATEGORY</a></li>
    </ul>
</Header>
<body>
    <div class="checkout-details">
        <h3>Order Summary for <?php echo htmlspecialchars($username); ?></h3>
        <p><strong>Item:</strong> <?php echo htmlspecialchars($item); ?></p>
        <p><strong>Price:</strong> <?php echo htmlspecialchars($price); ?> PHP</p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
        <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($phone); ?></p>
        <p><strong>Credit Card Number:</strong> <?php echo htmlspecialchars($credit_card); ?></p>
    </div>
</body>
</html>

<?php 
echo "<h3>Order Successfully Placed!</h3>";
echo "<p>Your order details have been saved. Thank you!</p>";
?>