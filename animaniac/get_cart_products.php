<?php
include 'DBConnector.php';

// User ID
$userId = 1; // Assuming user 1 is logged in

// Query to retrieve products from the cart table for the specific user
$sql = "SELECT c.cart_id, p.product_id, p.product_name, p.description, p.product_img, p.price
        FROM cart c
        INNER JOIN product p ON c.product_id = p.product_id
        WHERE c.user_id = $userId
        ORDER BY c.cart_date DESC";
$result = $conn->query($sql);

// Check if there are any products in the cart for the user
if ($result && $result->num_rows > 0) {
    ?>
    <div class="shopPage">
        <div class="page-title">
            <h1>SHOPPING CART</h1>
        </div>
        <form action="checkout.php" method="POST">
            <table class="carts">
                <tr>
                    <td class="contents">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $productId = $row['product_id'];
                            $productName = $row['product_name'];
                            $productDescription = $row['description'];
                            $productImage = $row['product_img'];
                            $productPrice = $row['price'];
                            $productCartId = $row['cart_id'];
                            ?>

                        <div class="content-container">
                            <div class="shoppingCart">
                                <div class="shipmentNum">
                                    <h2 class="itemPrice">Price: ₱<?php echo $productPrice; ?></h2>
                                </div>
                                <div class="cartItem">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="selected_products[<?php echo $productCartId; ?>][product_id]" value="<?php echo $productId; ?>" data-price="<?php echo $productPrice; ?>" onchange="calculateTotalPrice()">
                                        <span class="checkmark"></span>
                                        <input type="hidden" name="selected_carts[<?php echo $productCartId; ?>][cart_id]" value="<?php echo $productCartId; ?>">
                                        <input type="hidden" name="selected_qtys[<?php echo $productCartId; ?>][quantity]" value="<?php echo $quantity; ?>">
                                    </label>
                                    <div class="itemImg">
                                        <img src="<?php echo $productImage; ?>">
                                    </div>
                                    <div class="itemInfo">
                                        <div class="itemName">
                                            <a href="item.html"><?php echo $productName; ?></a>
                                        </div>
                                        <div class="itemDescription">
                                            <p class="itemDescription"><?php echo $productDescription; ?></p>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="quantity-<?php echo $productId; ?>">Quantity:</label>
                                        <input type="number" id="quantity-<?php echo $productId; ?>" name="selected_qtys[<?php echo $productCartId; ?>][quantity]" value="1" min="1" max="5" onchange="calculateTotalPrice()" onkeydown="return false">
                                    </div>
                                    <div class="remove-addToWish-btn">
                                        <button onclick="openPopup(<?php echo $productId; ?>)" class="remove" type="button">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div id="popup-<?php echo $productId; ?>" class="modal">
                                <div class="modal-content">
                                    <p>Remove from Cart?</p>
                                    <div class="button-container">
                                        <button onclick="closePopup(<?php echo $productId; ?>, true)" class="yes-btn" type="button">Yes</button>
                                        <button onclick="closePopup(<?php echo $productId; ?>, false)" class="no-btn" type="button">No</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </td>
                    <td class="checkout">
                        <div class="checkout-container">
                            <h1>Order Subtotal: ₱<span id="totalPrice">0</span></h1>
                            <div id="breakdown"></div>
                            <div>
                                <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                                <input name="checkout" type="submit" id="checkoutBtn" class="checkout-btn" value="Proceed to Checkout" disabled>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>

    </div>

    <?php
} else {
    // Display a message if there are no products in the cart for the user
    echo '<p class="noItems">No products in the cart. Find more in <a href=home_result.php?sortby=null" class="findMore">Shop</a>.</p>';
}

// Close the database connection
$conn->close();
?>

<script>
    // Function to calculate the total price and generate the breakdown
    function calculateTotalPrice() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var totalPrice = 0;
        var breakdown = "";
        var isChecked = false; // Add this line to initialize the variable

        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                var productPrice = parseFloat(checkbox.getAttribute("data-price"));
                var productId = checkbox.getAttribute("value");
                var quantityInput = document.getElementById("quantity-" + productId);
                var quantity = parseInt(quantityInput.value);

                if (!isNaN(productPrice) && !isNaN(quantity)) {
                    var subTotal = productPrice * quantity;
                    totalPrice += subTotal;
                    breakdown += "<p>₱" + productPrice.toFixed(2) + " x " + quantity + " = ₱" + subTotal.toFixed(2) + "</p>";
                }
                isChecked = true; // Add this line to update the variable
            }
        });

        document.getElementById("totalPrice").textContent = totalPrice.toFixed(2);
        document.getElementById("breakdown").innerHTML = breakdown;

        // Enable or disable the checkout button based on checkbox selection
        var checkoutBtn = document.getElementById("checkoutBtn");
        checkoutBtn.disabled = !isChecked;
    }
</script>