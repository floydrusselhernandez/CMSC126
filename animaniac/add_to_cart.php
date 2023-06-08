<?php

include 'DBConnector.php';

if (isset($_POST['user_id'], $_POST['product_id'])) {
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $cart_date = date('Y-m-d H:i:s');

    $query = "INSERT INTO cart (user_id, product_id, cart_date) 
              VALUES ('$user_id', '$product_id', '$cart_date')";
    
    // Execute the query
    if ($conn->query($query)) {
        // Success! The item was added to the cart.
        echo "<script>alert('Item added to cart successfully.');</script>";
    } else {
        // Error occurred. Failed to add the item to the cart.
        echo "<script>alert('Error adding item to cart: " . $conn->error . "');</script>";
    }
}
header("Location: product.php?product_id=" . $product_id);
?>
