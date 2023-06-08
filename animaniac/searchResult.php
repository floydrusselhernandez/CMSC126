<?php
include 'sortResult.php';
session_start();

if (isset($_GET['search_query'])) {
  $searchQuery = $_GET['search_query'];
  $_SESSION['search_query'] = $searchQuery;
}

// Retrieve selected category checkboxes
$selectedCategories = isset($_GET['categories']) ? $_GET['categories'] : [];


// Apply sorting and retrieve the sorted and filtered result
$result = applySorting();

// Pagination variables
$itemsPerPage = 100;
$totalItems = $result->num_rows;
$totalPages = ceil($totalItems / $itemsPerPage);

// Retrieve the current page number
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset for the database query
$offset = ($page - 1) * $itemsPerPage;

// Apply pagination to the result query
$sql = $result->fetch_all(MYSQLI_ASSOC);
$paginatedResult = array_slice($sql, $offset, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/searchResult.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="res/logo1.png">
    <script src="js/searchResult.js"></script>
    <title>Search Results</title>
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="page-title">
        <h1>SEARCH RESULTS</h1>
        <?php if (isset($_SESSION['search_query'])) : ?>
        <p class="sRes">Showing results for: <?php echo $_SESSION['search_query']; ?></p>
    <?php endif; ?>
    <?php if (isset($_SESSION['category_query']) && is_array($_SESSION['category_query'])) : ?>
        <p class="sRes">Categories: <?php echo implode(', ', $_SESSION['category_query']); ?></p>
        <?php unset($_SESSION['category_query']); ?>
    <?php endif; ?>
    </div>
    <!-- Wishlist -->
    <div class="content-container">
        <table class="wishitems">
            <tr>
                <td class="cat" style="float: right">
                <div class="category">
                    <form class="cate" method="GET">
                        <label for="categories"><b>Categories:</b></label><br>
                        <input type="radio" id="books" name="categories" value="books" onchange="toggleApplyFilterBtn()">
                        <label for="books">Books</label><br>
                        <input type="radio" id="figures" name="categories" value="figures" onchange="toggleApplyFilterBtn()">
                        <label for="figures">Figures</label><br>
                        <input type="radio" id="clothing" name="categories" value="clothing" onchange="toggleApplyFilterBtn()">
                        <label for="clothing">Clothing</label><br>
                        <!-- Apply Filter Button -->
                        <div class="apply-filter">
                        <input type="submit" id="applyFilterBtn" class="apply-filter-btn" onclick="applyFilter()" value="Apply Filter" disabled></button>
                        </div>
                    </form>
                </div>
                </td>
                <td class="items">
                    <div class="wishlist">
                        <?php
                        // Wishlist items loop
                        if ($result->num_rows > 0) {
                            foreach ($paginatedResult as $row) {
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
                                        <a href="product.php?product_id=' . $productId . '">
                                            <img src="' . $productImg . '" alt="' . $productName . '">
                                        </a>
                                    </div>
                                    <div class="wishlist-info">
                                        <div class="wishlist-title">
                                            <h3>' . $productName . '</h3>
                                            <a href="product.php?product_id=' . $productId . '" class="shop-btn">
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
                            $shopLink = "shop.php";
                            echo '<p class="noItems">No results in your Search.</p>';
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
        <!-- Pagination -->
        <?php if ($totalPages > 1) : ?>
            <div class="pagination">
                <?php if ($page > 1) : ?>
                    <?php $prevPageUrl = updateUrlParam('page', $page - 1); ?>
                    <a href="<?php echo $prevPageUrl; ?>" class="prev">Previous</a>
                <?php else: ?>
                    <span class="prev disabled">Previous</span>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <?php $pageUrl = updateUrlParam('page', $i); ?>
                    <a href="<?php echo $pageUrl; ?>" class="<?php echo ($page === $i) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                <?php endfor; ?>

                <?php if ($page < $totalPages) : ?>
                    <?php $nextPageUrl = updateUrlParam('page', $page + 1); ?>
                    <a href="<?php echo $nextPageUrl; ?>" class="next">Next</a>
                <?php else: ?>
                    <span class="next disabled">Next</span>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php
    // Helper function to update or add a query parameter to the current URL
    function updateUrlParam($paramName, $paramValue) {
        $url = $_SERVER['REQUEST_URI'];
        $urlParts = parse_url($url);

        if (isset($urlParts['query'])) {
            parse_str($urlParts['query'], $queryParams);
        } else {
            $queryParams = array();
        }

        $queryParams[$paramName] = $paramValue;
        $updatedQuery = http_build_query($queryParams);

        $updatedUrl = $urlParts['path'] . '?' . $updatedQuery;

        return $updatedUrl;
    }
    ?>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
<script>
    function toggleApplyFilterBtn() {
        var booksRadio = document.getElementById("books");
        var figuresRadio = document.getElementById("figures");
        var clothingRadio = document.getElementById("clothing");
        var applyFilterBtn = document.getElementById("applyFilterBtn");
        applyFilterBtn.disabled = !(booksRadio.checked || figuresRadio.checked || clothingRadio.checked);
    }
</script>
</html>
