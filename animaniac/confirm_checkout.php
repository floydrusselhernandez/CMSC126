<?php
include 'DBConnector.php';

// Retrieve the form data
$user_id = $_POST['user_id'];
$selected_products = $_POST['selected_products'];
$selected_quantities = $_POST['selected_quantities'];
$cart_ids = $_POST['cart_id']; // Retrieve the cart_ids array

// Split the selected products and quantities into arrays
$product_ids = explode(',', $selected_products);
$quantities = explode(',', $selected_quantities);

// Validate the form data
if (empty($user_id) || empty($selected_products) || empty($selected_quantities) || empty($cart_ids)) {
    // Handle the error, display an error message, or redirect to an error page
    echo "Error: Invalid form data.";
    exit;
}

// Insert the checkout data into the database
try {
    // Start a transaction
    $conn->begin_transaction();

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO checkout (user_id, cart_id, product_id, qty) VALUES (?, ?, ?, ?)");

    // Iterate over the selected products and quantities
    foreach ($product_ids as $index => $product_id) {
        $quantity = $quantities[$index];
        $cart_id = $cart_ids[$index]; // Retrieve the corresponding cart_id

        // Bind the parameters and execute the statement
        $stmt->bind_param("iiii", $user_id, $cart_id, $product_id, $quantity);
        $stmt->execute();
    }

    // Commit the transaction
    $conn->commit();

    // Redirect to checkout.php
    header("Location: checkout.php");
    exit();
} catch (Exception $e) {
    // Rollback the transaction in case of an error
    $conn->rollback();

    // Handle the error, display an error message, or redirect to an error page
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn->close();
?>
