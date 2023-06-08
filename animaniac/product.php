<?php
    // Include the database connection file

    $user_id = 1;
    
    include 'DBConnector.php';

    // Get the product ID from the query parameter
    $productID = $_GET['product_id'];

    // Prepare the SQL query to fetch product details
    $sql = "SELECT p.product_name, p.product_img, p.description, p.price, p.tag, p.sold, p.category_id, c.category_name
            FROM product p
            INNER JOIN category c ON p.category_id = c.category_id
            WHERE p.product_id = $productID";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful and fetch the data
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Extract the required information from the fetched row
        $productName = $row['product_name'];
        $productImg = $row['product_img'];
        $description = $row['description'];
        $price = $row['price'];
        $tag = $row['tag'];
        $sold = $row['sold'];
        $categoryName = $row['category_name'];

        // Check if the product is already in the cart for the user
        $cartQuery = "SELECT cart_id FROM cart WHERE user_id = $user_id AND product_id = $productID";
        $cartResult = mysqli_query($conn, $cartQuery);

        $isInCart = false;
        if ($cartResult && mysqli_num_rows($cartResult) > 0) {
            $isInCart = true;
        }

        // Check if the product is already in the wishlist for the user
        $wishlistQuery = "SELECT wishlist_id FROM wishlist WHERE user_id = $user_id AND product_id = $productID";
        $wishlistResult = mysqli_query($conn, $wishlistQuery);

        $isInWishlist = false;
        if ($wishlistResult && mysqli_num_rows($wishlistResult) > 0) {
            $isInWishlist = true;
        }

        // Prepare the SQL query to fetch the genre
        $genreSql = "SELECT g.genre_name
                     FROM product_genre pg
                     INNER JOIN genre g ON pg.genre_id = g.genre_id
                     WHERE pg.product_id = $productID";

        // Execute the genre query
        $genreResult = mysqli_query($conn, $genreSql);

        // Check if the genre query was successful and fetch the data
        if ($genreResult && mysqli_num_rows($genreResult) > 0) {
            // Create an array to store the genre names
            $genres = array();

            while ($genreRow = mysqli_fetch_assoc($genreResult)) {
                $genres[] = $genreRow['genre_name'];
            }
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // Handle the case when the product ID is not found or the query fails
        echo "Product not found.";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="res/logo1.png">
    <script src="js/wishlist.js"></script>
    <title><?php echo $productName?></title>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- Display the product details in your HTML structure -->
    <div class="product">
        <div class="product-img">
            <img src="<?php echo $productImg; ?>" alt="<?php echo $productName; ?>">
        </div>
        <div class="product-info">
            <div class="product-title">
                <h3><?php echo $productName; ?></h3>
            </div>
            <p class="description"><?php echo $description; ?></p>
            <div class="details">
                <div class="detail">
                    <p class="label"><b>Price:</b></p>
                    <p class="value"><?php echo $price; ?></p>
                </div>
                <div class="detail">
                    <p class="label"><b>Tag:</b></p>
                    <p class="value"><?php echo $tag; ?></p>
                </div>
                <div class="detail">
                    <p class="label"><b>Sold:</b></p>
                    <p class="value"><?php echo $sold; ?></p>
                </div>
                <div class="detail">
                    <p class="label"><b>Category:</b></b></p>
                    <p class="value"><?php echo $categoryName; ?></p>
                </div>
                <?php if (!empty($genres)) : ?>
                    <div class="detail">
                        <p class="label"><b>Genres:</b></p>
                        <p class="value"><?php echo implode(', ', $genres); ?></p>
                    </div>
                <?php endif; ?>

                <!-- Add to Cart Button -->
                <?php if (!$isInCart) { ?>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $productID; ?>">
                        <input type="submit" value="Add to Cart" class="add-to-cart-btn">
                    </form>
                <?php } else { ?>
                    <button disabled class="add-to-cart-btn">Added in Cart</button>
                <?php } ?>

                <!-- Add to Wishlist Button -->
                <?php if (!$isInWishlist) { ?>
                    <form action="add_to_wishlist.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $productID; ?>">
                        <input type="submit" value="Add to Wishlist" class="add-to-wishlist-btn">
                    </form>
                <?php } else { ?>
                    <button disabled class="add-to-wishlist-btn">Added in Wishlist</button>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="recommended-title">
        <h2>RECOMMENDED PRODUCTS</h2>
    </div>
    <div class="recomProd-container">
        <?php include 'recommendation.php'; ?>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>