<?php

function applySorting()
{
    $categoryFilter = "";
    $searchQuery = "";

    // Check if category filter is selected
    if (isset($_GET['categories'])) {
        $selectedCategories = (array)$_GET['categories']; // Cast the value to an array
        $categoryFilter = "c.category_name IN ('" . implode("','", $selectedCategories) . "')";
        $_SESSION['category_query'] = $selectedCategories;
    }

    // Check if search query is provided
    if (isset($_POST['search_query'])) {
        $searchQuery = $_POST['search_query'];
        $_SESSION['search_query'] = $searchQuery;
    }

    include 'DBConnector.php';

    $sql = "SELECT p.product_id, p.product_name, p.price, p.product_img, AVG(r.rating) AS average_rating, c.category_name
            FROM product p
            INNER JOIN category c ON p.category_id = c.category_id
            INNER JOIN product_genre pg ON p.product_id = pg.product_id
            INNER JOIN genre g ON pg.genre_id = g.genre_id
            LEFT JOIN review r ON p.product_id = r.product_id
            WHERE ";

    // Append category filter condition if categories are selected
    if (!empty($categoryFilter)) {
        $sql .= " $categoryFilter";
    }

    // Append search condition if search query is provided
    if (!empty($searchQuery)) {
        // Modify the SQL query based on your search logic
        if (!empty($categoryFilter)) {
            $sql .= " AND (p.product_name LIKE '%$searchQuery%' OR c.category_name LIKE '%$searchQuery%')";
        } else {
            $sql .= " (p.product_name LIKE '%$searchQuery%' OR c.category_name LIKE '%$searchQuery%')";
        }
        $searchSql = "INSERT INTO `search`(`search_id`, `searchtxt`) VALUES (NULL,'$searchQuery')";
        $conn->query($searchSql);
    } elseif (empty($searchQuery) && !empty($categoryFilter)) {
        $searchTable = "SELECT `searchtxt`FROM `search` ORDER BY `search_id` DESC LIMIT 1";
        $lastSearch = $conn->query($searchTable);
        if ($lastSearch && $lastSearch->num_rows > 0) {
            $row = $lastSearch->fetch_assoc();
            $searchQuery = $row['searchtxt'];
            $sql .= " AND (p.product_name LIKE '%$searchQuery%' OR c.category_name LIKE '%$searchQuery%')";
        }
        $lastSearch->free_result();
    }

    // If no search query or category filter is provided, match all rows
    if (empty($searchQuery) && empty($categoryFilter)) {
        $sql .= "1"; // This condition will match all rows
    }

    $sql .= " GROUP BY p.product_id, p.product_name, p.price, p.product_img, c.category_name";

    $result = $conn->query($sql);

    // Return the sorted result
    return $result;
}
?>
