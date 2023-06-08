<?php
    include 'DBConnector.php';

if (isset($_POST['review_submit'])){
    $delivered_id = $_POST['delivered_id'];       
    $product_id = $_POST['product_id'];
    $user_id = $_POST['user_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $escapedText = str_replace("'", "''", $comment);
    // error_log($product_id);

    $sql = "INSERT INTO review (product_id, user_id, rating, comment)
    VALUES  ('$product_id','$user_id','$rating','$escapedText');";
    
    if (mysqli_query($conn, $sql)){
        $sql2 = "DELETE FROM delivered WHERE delivered_id = '$delivered_id';";
        mysqli_query($conn, $sql2);
        Header("Location: feedbackAwaiting.php");
    } else {
        // echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>