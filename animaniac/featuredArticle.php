<?php
    include 'DBConnector.php';

    

    $sql = "SELECT headline, thumbnail, description, category, tag, article_connected
            FROM news
            WHERE featured = 1";

    $result = $conn->query($sql);

    if($result -> num_rows > 0){

        while($row = $result -> fetch_assoc()){
            $headline = $row["headline"];
            $thumbnail = $row["thumbnail"];
            $description = $row["description"];
            $category = $row["category"];
            $tag = $row["tag"];
            $article_connected = $row["article_connected"];

            echo '
                <div class="featured-card swiper-slide" onclick="openFile(\'newsArticle.php?article=' . urlencode($article_connected) . '\')"">
                    <div class="featured-image-content">
                        <div class="featured-card-image">
                            <img class="featured-card-img" src="' . $thumbnail . '">
                        </div>
                    </div>

                    <div class="featured-card-content">
                        <p class="newsTags">' . $category . '</p>
                        <p class="newsTags">' . $tag . '</p>
                        <h1 class="featured-headline">' . $headline . '</h1>
                        <p class="featured-description">' . $description . '</p>
                    </div>
                </div>';
        }
        
    }
?>
<script>
    function openFile(url) {
        window.location.href = url;
    }
</script>