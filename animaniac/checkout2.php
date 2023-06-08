<?php
include 'DBConnector.php';

$userId = 1; // Assuming the user ID is 1

// Replace 'your_database_table' with the actual table name and 'email_column' with the actual column name storing the email
$sql = "SELECT email FROM user WHERE user_id = $userId";
$result = $conn->query($sql);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the email value
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];

    // Free the result variable
    mysqli_free_result($result);
} else {
    // Handle the error if the query fails or no matching record found
    $email = ""; // Set a default value if retrieval fails or no record found
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="res/logo1.png">
    <script src="js/checkout.js"></script>
    <title>Checkout</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <table class="division">
        <tr>
            <td>
                <div class="container">
                    <h1>CHECKOUT</h1>
                    <form action="sold.php" method="post">
                        <div class="form-group">
                            <label for="name">Full Name</label><br>
                            <input type="text" id="name" name="name" required oninput="validateForm()">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required oninput="validateForm()">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label><br>
                            <input type="text" id="address" name="address" required oninput="validateForm()">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP Code</label><br>
                            <input type="number" id="zip" min="0" max="99950" name="zip" required oninput="validateForm()">
                        </div>
                        <div class="form-group">
                        <label for="payment">Payment Method</label><br>
                        <div class="payment-options">
                            <input type="radio" id="gcash" name="payment" value="gcash" required>
                            <label for="gcash">GCash</label><br>
                            <input type="radio" id="paymaya" name="payment" value="paymaya" required>
                            <label for="paymaya">PayMaya</label><br>
                            <input type="radio" id="cod" name="payment" value="cod" required>
                            <label for="cod">Cash on Delivery (COD)</label>
                        </div>
                        </div>
                        <div class="form-group">
                            <button onclick="openPopup('checkoutPop')" type="button" class="checkout-btn checkout" id="checkoutBtn" disabled>Place Order</button>
                            <button onclick="openPopup('cancelPop')" type="button" class="cancel">Cancel</button>
                        </div>
                </div>
            </td>
            <td>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $selectedProducts = $_POST['selected_products'];
                    $selectedCarts = $_POST['selected_carts'];
                    $selectedQuantities = $_POST['selected_qtys'];
                    $userID = $_POST['user_id'];

                    echo '<div class="checked-products">';
                    echo '<h1>Checked Products</h1>';
                    echo '<div class="products">';

                    // Display the selected products, cart IDs, and quantities
                    $totalPrice = 0; // Initialize total price

                    foreach ($selectedProducts as $cartId => $productData) {
                        $productId = $productData['product_id'];
                        $quantity = $selectedQuantities[$cartId]['quantity'];
                        $cartId = $selectedCarts[$cartId]['cart_id'];

                        echo '<input type="hidden" name="selected_products[' . $cartId . '][product_id]" value="' . $productId . '">';
                        echo '<input type="hidden" name="selected_carts[' . $cartId . '][cart_id]" value="' . $cartId . '">';
                        echo '<input type="hidden" name="selected_qtys[' . $cartId . '][quantity]" value="' . $quantity . '">';

                        $productQuery = "SELECT * FROM product WHERE product_id = $productId";
                        $productResult = $conn->query($productQuery);

                        if ($productResult && $productResult->num_rows > 0) {
                            while ($row = $productResult->fetch_assoc()) {
                                $productName = $row['product_name'];
                                $productPrice = $row['price'];
                                $productImage = $row['product_img'];

                                echo '<div class="product">';
                                echo "<img src=\"$productImage\" alt=\"product\">";
                                echo '<div class="product-info">';
                                echo "<h3>$productName</h3>";
                                echo " <p>Price: ₱ $productPrice</p>";
                                echo " <p>Quantity: $quantity</p>";
                                echo '</div>';
                                echo '</div>';

                                // Calculate subtotal and add it to the total price
                                $subTotal = $productPrice * $quantity;
                                $totalPrice += $subTotal;
                            }
                        }
                    }

                    echo '</div>';

                    // Display the total price
                    echo '<div class="total-price">';
                    echo 'Total Price: ₱ ' . number_format($totalPrice, 2);
                    echo '</div>';

                    echo '</div>';
                }
                ?>
            </td>
        </tr>
        <div class="modal">
            <div class="modal-content">
                <p id="orderText">Place your Order?</p>
                <div class="button-container">
                    <button onclick="closePopup(this)" name="submitCheck" data-action="checkout" class="yes-btn" type="submit">Yes</button>
                    <button onclick="closePopup(this)" data-action="no" class="no-btn" type="button">No</button>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <p id="cancelText">Cancel Checkout?</p>
                <div class="button-container">
                    <button onclick="closePopup(this)" data-action="cancel" class="yes-btn" type="button">Yes</button>
                    <button onclick="closePopup(this)" data-action="no" class="no-btn" type="button">No</button>
                </div>
            </div>
        </div>
        </form>
    </table>

    <?php include 'footer.php'; ?>
</body>

</html>
