<?php
include 'DBConnector.php';

// User ID
$userId = 1; // Assuming user 1 is logged in

// Query to retrieve products from the cart table for the specific user
$sql = "SELECT p.product_id, p.product_name, p.description, p.product_img, p.price
        FROM cart c
        INNER JOIN product p ON c.product_id = p.product_id
        WHERE c.user_id = $userId
        ORDER BY c.cart_date DESC";
$result = $conn->query($sql);

// Array to store selected product IDs and prices
$selectedProductIDs = [];
$selectedProductPrices = [];

// Check if there are any products in the cart for the user
if ($result && $result->num_rows > 0) {
?>

<div class="shopPage">
    <div class="page-title">
        <h1>SHOPPING CART</h1>
    </div>
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
                ?>

                <div class="content-container">
                    <div class="shoppingCart">
                        <div class="shipmentNum">
                            <h2 class="itemPrice">Price: ₱<?php echo $productPrice; ?></h2>
                        </div>
                        <div class="cartItem">
                            <label class="custom-checkbox">
                                <input type="checkbox" value="<?php echo $productId; ?>" data-price="<?php echo $productPrice; ?>">
                                <span class="checkmark"></span>
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
                            <form>
                                <label for="quantity">Quantity:</label>
                                <input type="number" id="quantity-<?php echo $productId; ?>" value="1" min="1" max="5" onchange="calculateTotalPrice()" onkeydown="return false">
                            </form>
                            <div class="remove-addToWish-btn">
                                <button onclick="openPopup(<?php echo $productId; ?>)" class="remove">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="popup-<?php echo $productId; ?>" class="modal">
                    <div class="modal-content">
                        <p>Remove from Cart?</p>
                        <div class="button-container">
                            <button onclick="closePopup(<?php echo $productId; ?>, true)" class="yes-btn">Yes</button>
                            <button onclick="closePopup(<?php echo $productId; ?>, false)" class="no-btn">No</button>
                        </div>
                    </div>
                </div>
                <?php
                    $selectedProductIDs[] = $productId;
                    $selectedProductPrices[$productId] = $productPrice;
                }
                ?>
            </td>
            <td class="checkout">
                <div class="checkout-container">
                    <h1>Order Subtotal: ₱<span id="totalPrice">0</span></h1>
                    <div id="breakdown"></div>
                    <form action="checkout.html">
                        <button class="checkout-btn">Proceed to Checkout</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</div>

<?php
} else {
    // Display a message if there are no products in the cart for the user
    echo '<p class="noItems">No products in the cart. Find more in <a href="<?php echo $shopLink; ?>"class="findMore">Shop</a>.</p>';
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

        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                var productPrice = parseFloat(checkbox.getAttribute("data-price"));
                var productId = checkbox.getAttribute("value");
                var quantityInput = document.getElementById("quantity-" + productId);
                var quantity = parseInt(quantityInput.value);

                if (!isNaN(productPrice) && !isNaN(quantity)) {
                    var subTotal = productPrice * quantity;
                    totalPrice += subTotal;
                    breakdown += "<p>₱" + subTotal.toFixed(2) + "</p>";
                }
            }
        });

        document.getElementById("totalPrice").textContent = totalPrice.toFixed(2);
        document.getElementById("breakdown").innerHTML = breakdown;
    }

    // Event listener for checkboxes to recalculate total price
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            calculateTotalPrice();
        });
    });
</script>
