<?php
function applySorting($selectedCategories)
{
    $categoryFilter = "";
    $searchQuery = "";

    // Check if category filter is selected
    if (!empty($selectedCategories)) {
        $categoryFilter = "AND c.category_name IN ('" . implode("','", (array)$selectedCategories) . "')";
    }

    // Check if search query is provided
    if (isset($_POST['search_query'])) {
        $searchQuery = $_POST['search_query'];
    }

    include 'DBConnector.php';

    $sql = "SELECT p.product_id, p.product_name, p.price, p.product_img, AVG(r.rating) AS average_rating, c.category_name
            FROM product p
            INNER JOIN category c ON p.category_id = c.category_id
            INNER JOIN product_genre pg ON p.product_id = pg.product_id
            INNER JOIN genre g ON pg.genre_id = g.genre_id
            LEFT JOIN review r ON p.product_id = r.product_id
            WHERE 1 = 1";

    // Append category filter condition if categories are selected
    if (!empty($categoryFilter)) {
        $sql .= " $categoryFilter";
    }

    // Append search condition if search query is provided
    if (!empty($searchQuery)) {
        // Modify the SQL query based on your search logic
        $sql .= " AND (p.product_name LIKE '%$searchQuery%' OR c.category_name LIKE '%$searchQuery%' OR g.genre_name LIKE '%$searchQuery%')";
        $searchSql = "INSERT INTO search VALUES ('NULL','$searchQuery', 'rainer')";
        $conn->query($searchSql);             
    }

    $sql .= " GROUP BY p.product_id";

    $result = $conn->query($sql);

    // Close the database connection
    $conn->close();

    // Return the result object
    return $result;
}
?>