<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}

// Get item details from the query parameters
$item = isset($_GET['item']) ? $_GET['item'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<Header class="coffee.header">
    <center><h1>Order Details</h1></center>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.php" class="link">CATEGORY</a></li>
    </ul>
</Header>
<body>
    <div class="order-details">
        <h3>Item: <?php echo htmlspecialchars($item); ?></h3>
        <h4>Price: <?php echo htmlspecialchars($price); ?> PHP</h4>

        <!-- Order Form -->
        <form action="checkout.php" method="POST">
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="credit_card">Credit Card Number:</label>
                <input type="text" id="credit_card" name="credit_card" required>
            </div>

            <input type="hidden" name="item" value="<?php echo htmlspecialchars($item); ?>">
            <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">

            <button type="submit">Proceed to Checkout</button>
        </form>
    </div>
</body>
</html>
