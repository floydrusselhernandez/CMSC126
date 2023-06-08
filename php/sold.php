<?php
require_once 'DBConnector.php';

if (isset($_POST['submitCheck'])) {
    // Include the DBConnector.php file

    // Get the posted arrays
    $selectedProducts = $_POST['selected_products'];
    $selectedCarts = $_POST['selected_carts'];
    $selectedQuantities = $_POST['selected_qtys'];

    foreach ($selectedProducts as $cartId => $productData) {
        $productId = $productData['product_id'];
        $quantity = $selectedQuantities[$cartId]['quantity'];

        // Update the sold column in the product table with the individual quantity
        $productUpdateQuery = "UPDATE product SET sold = sold + $quantity WHERE product_id = $productId";
        $resultUpdate = $conn->query($productUpdateQuery);

        // Inserts purchased product into Delivered Table
        $cartDeliveryQuery = "INSERT INTO delivered (product_id, user_id) SELECT c.product_id, c.user_id FROM cart AS c WHERE cart_id = $cartId;";
        $resultDelivery = $conn->query($cartDeliveryQuery);
        // Delete the cart row
        $cartDeleteQuery = "DELETE FROM cart WHERE cart_id = $cartId";
        $resultDelete = $conn->query($cartDeleteQuery);
    }

    // Close the database connection
    $conn->close();

    // Redirect to cart.php with success parameter
    header('Location: cart.php?checkout_success=1');
    exit;
}
?>
