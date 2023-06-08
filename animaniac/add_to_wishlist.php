<?php

include 'DBConnector.php';

if (isset($_POST['user_id'], $_POST['product_id'])) {
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $wishlist_date = date('Y-m-d H:i:s');

    $query = "INSERT INTO wishlist (user_id, product_id, wish_date) 
          VALUES ('$user_id', '$product_id', '$wishlist_date')";
    
    // Execute the query
    if ($conn->query($query)) {
        // Success! The item was added to the wishlist.
        echo "<script>alert('Item added to wishlist successfully.');</script>";
    } else {
        // Error occurred. Failed to add the item to the wishlist.
        echo "<script>alert('Error adding item to wishlist: " . $conn->error . "');</script>";
    }
}
header("Location: product.php?product_id=" . $product_id);
?>
