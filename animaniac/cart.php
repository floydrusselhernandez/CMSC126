<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="res/logo1.png">
    <script src="js/cart.js"></script>
    <title>Shopping Cart</title>
</head>

<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <?php include 'get_cart_products.php'; ?>

    <div class="recommended-title">
        <h2>RECOMMENDED PRODUCTS</h2>
    </div>

    <div class="recomProd-container">

        <?php include 'recommendation.php'; ?>

    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
<?php
if (isset($_GET['checkout_success']) && $_GET['checkout_success'] == 1) {
    echo '<script>alert("Checkout successful!");</script>';
}
?>
