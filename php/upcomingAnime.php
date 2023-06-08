<?php
    include 'DBConnector.php';

    

    $sql = "SELECT headline, thumbnail, description, category, tag, article_connected
            FROM news
            WHERE upcoming = 1 AND category = 'anime'
            ORDER BY news_id DESC";

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
                <div class="card swiper-slide" onclick="openFile(\'newsArticle.php?article=' . urlencode($article_connected) . '\')"">
						<div class="image-content">
							<div class="card-image">
								<img class="card-img" src="' . $thumbnail . '">
							</div>
						</div>

						<div class="card-content">
							<p class="headline">' . $headline . '</p>
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