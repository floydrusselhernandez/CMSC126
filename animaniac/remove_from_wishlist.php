<?php
include 'DBConnector.php';

// Check if a product ID was provided for removal
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    $user_id = 1; // Replace '1' with the actual user ID

    // Perform the removal from the wishlist in the database
    $sql = "DELETE FROM wishlist WHERE user_id = $user_id AND product_id = $product_id";
    $result = $conn->query($sql);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}
?>