<?php include 'DBConnector.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/wishlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/wishlist.js"></script>
    <title>My Wishlist</title>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="page-title">
        <h1>MY WISHLIST</h1>
    </div>

    <!-- Sort By -->
    <div class="sort-by">
        <label for="sortby">Sort by:</label>
        <select name="sortby">
            <option value="newest">Newest</option>
            <option value="oldest">Oldest</option>
            <option value="price-low">Price: Low to High</option>
            <option value="price-high">Price: High to Low</option>
        </select>
    </div>

    <!-- Wishlist -->
    <div class="content-container">
        <table class="wishitems">
            <tr>
            <td class="cat" style="float: right">
                    <div class="category">
                        <label for="categories">Categories:</label><br>
                        <input type="checkbox" id="books" name="categories" value="books">
                        <label for="books">Books</label><br>
                        <input type="checkbox" id="figures" name="categories" value="figures">
                        <label for="figures">Figures</label><br>
                        <input type="checkbox" id="clothing" name="categories" value="clothing">
                        <label for="clothing">Clothing</label>
                    </div>
                    <div class="genre">
                        <label for="genre"><br>By Genre:</label><br>
                        <input type="checkbox" id="adventure" name="genre" value="adventure">
                        <label for="adventure">Adventure</label><br>
                        <input type="checkbox" id="action" name="genre" value="action">
                        <label for="action">Action</label><br>
                        <input type="checkbox" id="comedy" name="genre" value="comedy">
                        <label for="comedy">Comedy</label><br>
                        <input type="checkbox" id="drama" name="genre" value="drama">
                        <label for="drama">Drama</label><br>
                        <input type="checkbox" id="fantasy" name="genre" value="fantasy">
                        <label for="fantasy">Fantasy</label><br>
                        <input type="checkbox" id="horror" name="genre" value="horror">
                        <label for="horror">Horror</label><br>
                        <input type="checkbox" id="romance" name="genre" value="romance">
                        <label for="romance">Romance</label><br>
                        <input type="checkbox" id="sci-fi" name="genre" value="sci-fi">
                        <label for="sci-fi">Sci-fi</label>
                    </div>
                    <div class="prices">
                        <label for="price"><br>By Price:</label><br>
                        <input type="checkbox" id="price1" name="price" value="1-1000">
                        <label for="price1">₱1 - ₱1,000</label><br>
                        <input type="checkbox" id="price2" name="price" value="1001-3000">
                        <label for="price2">₱1,001 - ₱3,000</label><br>
                        <input type="checkbox" id="price3" name="price" value="3001-5000">
                        <label for="price3">₱3,001 - ₱5,000</label><br>
                        <input type="checkbox" id="price4" name="price" value="5001-10000">
                        <label for="price4">₱5,001 - ₱10,000</label><br>
                        <input type="checkbox" id="price5" name="price" value="10000+">
                        <label for="price5">Over ₱10,000</label>
                    </div>
                </td>
                <td class="items">
                    <div class="wishlist">
                        <?php
                        // Retrieve wishlist items from the database
                        $user_id = 1; // Replace '1' with the desired user ID
                        $sql = "SELECT p.product_id, p.product_name, p.price, p.product_img, AVG(r.rating) AS average_rating, c.category_name
                                FROM product p
                                INNER JOIN wishlist w ON p.product_id = w.product_id
                                INNER JOIN category c ON p.category_id = c.category_id
                                LEFT JOIN review r ON p.product_id = r.product_id
                                WHERE w.user_id = $user_id
                                GROUP BY p.product_id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $productId = $row['product_id'];
                                $productName = $row['product_name'];
                                $price = $row['price'];
                                $productImg = $row['product_img'];
                                $averageRating = $row['average_rating'];
                                $category = $row['category_name'];

                                // Convert average rating to stars
                                $fullStars = floor($averageRating);
                                $halfStar = $averageRating - $fullStars > 0 ? true : false;

                                echo '
                                <div class="wishlist-item">
                                    <div class="wishlist-img">
                                        <a href="shop_page.php">
                                            <img src="' . $productImg . '" alt="' . $productName . '">
                                        </a>
                                    </div>
                                    <div class="wishlist-info">
                                        <div class="wishlist-title">
                                            <h3>' . $productName . '</h3>
                                            <a href="shop_page.php" class="shop-btn">
                                                <i class="fas fa-store"></i>
                                            </a>
                                        </div>
                                        <p class="ctgry">' . $category . '</p>
                                        <div class="soldstar">
                                            <div class="star-rating">';

                                // Display full stars
                                for ($i = 0; $i < $fullStars; $i++) {
                                    echo '<i class="fas fa-star"></i>';
                                }

                                // Display half star if applicable
                                if ($halfStar) {
                                    echo '<i class="fas fa-star-half-alt"></i>';
                                }

                                // Display remaining empty stars
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                for ($i = 0; $i < $emptyStars; $i++) {
                                    echo '<i class="far fa-star"></i>';
                                }

                                echo '
                                            </div>
                                        </div>
                                        <div class="align-price-remove">
                                            <br>
                                            <p class="price">₱' . $price . '</p>
                                            <div class="remove-btn">
                                                <button onclick="openPopup(' . $productId . ')" class="remove">Remove from Wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="popup-' . $productId . '" class="modal">
                                    <div class="modal-content">
                                        <p>Remove from Wishlist?</p>
                                        <div class="button-container">
                                            <button onclick="closePopup(' . $productId . ', true)" class="yes-btn">Yes</button>
                                            <button onclick="closePopup(' . $productId . ', false)" class="no-btn">No</button>
                                        </div>
                                    </div>
                                </div>';
                            }
                        } else {
                            echo '<p>No items in your wishlist.</p>';
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>
