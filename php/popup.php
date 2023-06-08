<?php
    include 'DBConnector.php';

        echo '
        <div class="popup" id="popup-' . $product_id . '" >
            <div class="popup-content">
                <img id="close-button" class="popup-close" onclick="closePopup(' . $product_id . ')" src="res/close.png">
                <div class="popup-header">
                <img class="rounded popup-productIcon" id="popup-productImg" src="' . $product_img . '">
                <div class="popup-productDetails">
                    <h2 class="popup-productName" id="popup-productName">' . $product_name . '</h2>
                    <h2 class="popup-productCategory" id="popup-productCategory">' . $category_name . '</h2>
                    <div id="popup-star-rating" class="popup-rating">
                        <div class="popup-starIcon">
                            <div class="popup-star">
                                <a href="#" class="bi bi-star-fill" onclick="getRating(' . $product_id . ')"></a>
                                <a href="#" class="bi bi-star-fill" onclick="getRating(' . $product_id . ')"></a>
                                <a href="#" class="bi bi-star-fill" onclick="getRating(' . $product_id . ')"></a>
                                <a href="#" class="bi bi-star-fill" onclick="getRating(' . $product_id . ')"></a>
                                <a href="#" class="bi bi-star-fill" onclick="getRating(' . $product_id . ')"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                <div class="popup-reviewSubmission">
                    <form id="popup-form-' . $product_id . '"  class="popup-imgSubmission" action="insertReview.php" method="POST">
                        <input type="hidden" name="delivered_id" value="' . $delivered_id . '">
                        <input type="hidden" name="product_id" value="' . $product_id . '">
                        <input type="hidden" name="user_id" value="' . $user_id . '">
                        <input type="hidden" id="rating_input-' . $product_id . '" name="rating">
                        <textarea class="popup-reviewText" name="comment" rows="10"  placeholder="Tell us more about it! (Optional)"></textarea>
                        <input  type="submit" name="review_submit" value="Submit" class="popup-submitReview">
                    </form>
                </div>
            </div>
        </div>';

        
    
?>
