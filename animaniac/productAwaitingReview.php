<?php
    include 'DBConnector.php';

    $sql = "SELECT * FROM ((delivered JOIN product USING (product_id)) JOIN category USING (category_id));";

    $result = $conn->query($sql);

    if($result -> num_rows > 0){

        while($row = $result -> fetch_assoc()){
            $delivered_id = $row["delivered_id"];
            $product_name = $row["product_name"];
            $product_img = $row["product_img"];
            $category_name = $row["category_name"];
            $delivered_id = $row["delivered_id"];
            $product_id = $row["product_id"];
            $user_id = $row["user_id"];

            echo '
                <div class="productReview">		
                    <div class="productIconContainer"><img class="rounded productIcon" src="' . $product_img . '"></div>
                    <div class="productInfoAwaiting">
                        <h2 class="productName">' . $product_name . '</h2>
                        <h2 class="productCategory">' . $category_name . '</h2>
                        <div class="rating">
                            <div class="starIcon">
                                <div id="product-rating" class="star-rating">
                                    <button onclick="openPopup(' . $product_id . ');getRating(' . $product_id . ');" class="star" name="trigger_star">&#9734;</button>
                                    <button onclick="openPopup(' . $product_id . ');getRating(' . $product_id . ');" class="star" name="trigger_star">&#9734;</button>
                                    <button onclick="openPopup(' . $product_id . ');getRating(' . $product_id . ');" class="star" name="trigger_star">&#9734;</button>
                                    <button onclick="openPopup(' . $product_id . ');getRating(' . $product_id . ');" class="star" name="trigger_star">&#9734;</button>
                                    <button onclick="openPopup(' . $product_id . ');getRating(' . $product_id . ');" class="star" name="trigger_star">&#9734;</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>	
                </div>
                <hr class="productLine">';
            
            include 'popup.php';
        }
        
        
    }
?>
