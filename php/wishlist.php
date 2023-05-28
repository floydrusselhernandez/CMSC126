<?php
include 'sort.php';

// Retrieve selected sort option
$selectedOption = $_GET['sortby'] ?? 'newest'; // Default sorting option

// Retrieve selected category checkboxes
$selectedCategories = isset($_GET['categories']) ? $_GET['categories'] : [];

// Retrieve selected genre checkboxes
$selectedGenres = isset($_GET['genre']) ? $_GET['genre'] : [];

// Apply sorting and retrieve the sorted and filtered result
$result = applySorting($selectedOption, $selectedCategories, $selectedGenres);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/wishlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="res/logo1.png">
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
        <select id="sortby" name="sortby"onchange="applySort()">
            <option value="newest" <?php if ($selectedOption === 'newest') echo 'selected'; ?>>
                Newest
            </option>
            <option value="oldest" <?php if ($selectedOption === 'oldest') echo 'selected'; ?>>
                Oldest
            </option>
            <option value="price-low" <?php if ($selectedOption === 'price-low') echo 'selected'; ?>>
                Price: Low to High
            </option>
            <option value="price-high" <?php if ($selectedOption === 'price-high') echo 'selected'; ?>>
                Price: High to Low
            </option>
        </select>
    </div>

    <!-- Wishlist -->
    <div class="content-container">
        <table class="wishitems">
            <tr>
                <td class="cat" style="float: right">
                <div class="category">
                    <label for="filterby" class="filterby">Filter by...</label><br>
                    <label for="categories">Categories:</label><br>
                    <input type="radio" id="books" name="categories" value="books">
                    <label for="books">Books</label><br>
                    <input type="radio" id="figures" name="categories" value="figures">
                    <label for="figures">Figures</label><br>
                    <input type="radio" id="clothing" name="categories" value="clothing">
                    <label for="clothing">Clothing</label>
                </div>
                <div class="genre">
                    <label for="genre"><br>Genre:</label><br>
                    <input type="radio" id="adventure" name="genre" value="adventure">
                    <label for="adventure">Adventure</label><br>
                    <input type="radio" id="action" name="genre" value="action">
                    <label for="action">Action</label><br>
                    <input type="radio" id="comedy" name="genre" value="comedy">
                    <label for="comedy">Comedy</label><br>
                    <input type="radio" id="drama" name="genre" value="drama">
                    <label for="drama">Drama</label><br>
                    <input type="radio" id="fantasy" name="genre" value="fantasy">
                    <label for="fantasy">Fantasy</label><br>
                    <input type="radio" id="horror" name="genre" value="horror">
                    <label for="horror">Horror</label><br>
                    <input type="radio" id="romance" name="genre" value="romance">
                    <label for="romance">Romance</label><br>
                    <input type="radio" id="sci-fi" name="genre" value="sci-fi">
                    <label for="sci-fi">Sci-fi</label>
                </div>
                    <!-- Apply Filter Button -->
                    <div class="apply-filter">
                        <button id="apply-filter-btn" class="apply-filter-btn" onclick="applyFilter()">Apply Filter</button><br>
                        <button id="reset-filter-btn" class="reset-filter-btn" onclick="resetFilter()">Reset Filter</button>
                    </div>
                </td>
                <td class="items">
                    <div class="wishlist">
                        <?php
                        $sortBy = $_GET['sortby'] ?? 'newest'; // Default sorting option

                        // Apply sorting and retrieve the sorted result
                        $result = applySorting($selectedOption, $selectedCategories, $selectedGenres);

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
                            echo '<p class="noItems">No items in your wishlist.</p>';
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <script src="js/wishlist.js"></script>
</body>

</html>
