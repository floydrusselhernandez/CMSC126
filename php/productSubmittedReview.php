<?php
    include 'DBConnector.php';

    $sql = "SELECT * FROM ((review JOIN product USING (product_id)) JOIN category USING (category_id))  ORDER BY review_id DESC;";

    $result = $conn->query($sql);

    if($result -> num_rows > 0){

        while($row = $result -> fetch_assoc()){
            $product_name = $row["product_name"];
            $product_img = $row["product_img"];
            $category_name = $row["category_name"];
            $review_id = $row["review_id"];
            $rating = $row["rating"];
            $comment = $row["comment"];

            echo '
            <div class="reviewContainer">
                <img class="rounded productIconSubmitted" src="' . $product_img . '">
                <div class="productInfoSubmitted">
                    <h2 class="productNameSubmitted">' . $product_name . '</h2>
                    <h2 class="productCategorySubmitted">' . $category_name . '</h2>
                    <div class="ratingSubmitted">
                        <div class="starIcon">
                            <div class="star-rating-submitted">';

                                // Display full stars
                                for ($i = 0; $i < $rating; $i++) {
                                    echo '<i class="fas fa-star fa-3x"></i>';
                                }

                                // Display remaining empty stars
                                $emptyStars = 5 - $rating;
                                for ($i = 0; $i < $emptyStars; $i++) {
                                    echo '<i class="far fa-star fa-3x"></i>';
                                }


                            echo '</div>
                        </div>
                    </div>
                </div>
                <div class="productReviewSubmitted">
                    <p class="reviewText">' . $comment . ' </p>
                </div>
            </div>
            <hr class="productLineSubmitted">';
        }
        
        
    }
?>
