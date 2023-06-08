<?php
include 'DBConnector.php';

// Function to get a random product ID
function getRandomProductIDs($conn, $limit) {
    $sql = "SELECT product_id FROM product ORDER BY RAND() LIMIT $limit";
    $result = $conn->query($sql);
    
    $productIDs = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productIDs[] = $row['product_id'];
        }
    }
    
    return $productIDs;
}

// Retrieve random product IDs
$randomProductIDs = getRandomProductIDs($conn, 5);

// Query to retrieve random products based on the generated IDs
$sql = "SELECT p.product_id, p.product_name, p.price, p.product_img, AVG(r.rating) AS average_rating, c.category_name
        FROM product p
        INNER JOIN category c ON p.category_id = c.category_id
        LEFT JOIN review r ON p.product_id = r.product_id
        WHERE p.product_id IN (" . implode(",", $randomProductIDs) . ")
        GROUP BY p.product_id";

$result = $conn->query($sql);

// Check if there are any products in the result
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productId = $row['product_id'];
        $productName = $row['product_name'];
        $productPrice = $row['price'];
        $productImage = $row['product_img'];
        $averageRating = $row['average_rating'];
        $categoryName = $row['category_name'];

        echo '
        <div class="recommended-container">
            <div class="recommendedProducts">
                <div class="recom-item" id="recom-item' . $productId . '">
                    <div class="recom-img">
                        <a href="product.php?product_id=' . $productId . '">
                            <img src="' . $productImage . '" alt="' . $productName . '">
                        </a>
                    </div>
                    <div class="recom-info">
                        <div class="recom-title">
                            <h3>' . $productName . '</h3>
                            <a href="product.php?product_id=' . $productId . '" class="shop-btn">
                                <i class="fas fa-store"></i>
                            </a>
                        </div>
                        <p class="ctgry">' . $categoryName . '</p>
                        <div class="soldstar">
                            <div class="star-rating">';
                // Generate star ratings based on the average rating
                $fullStars = floor($averageRating);
                $halfStar = $averageRating - $fullStars >= 0.5;
                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                for ($i = 1; $i <= $fullStars; $i++) {
                    echo '<i class="fas fa-star"></i>';
                }
                if ($halfStar) {
                    echo '<i class="fas fa-star-half-alt"></i>';
                }
                for ($i = 1; $i <= $emptyStars; $i++) {
                    echo '<i class="far fa-star"></i>';
                }
                echo '</div>
                        </div>
                        <div class="align-price-remove">
                            <br>
                            <p class="price">₱' . $productPrice . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
} else {
    // Display a message if no recommended products are found
    echo 'No recommended products available.';
}

?>
