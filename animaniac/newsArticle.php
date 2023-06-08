<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Article</title>
	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
	

	<!-- Swiper -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   	<script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   	<link rel="stylesheet" href="css/design.css">
   	<link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="icon" type="image/png" href="res/logo1.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>    
    <?php
        include 'DBConnector.php';

        $selectedArticle = $_GET['article'];
        

        $sql = "SELECT * FROM article WHERE article_id = $selectedArticle";
        
        $result = $conn->query($sql);

        if($result -> num_rows > 0){

            while($row = $result -> fetch_assoc()){
                $headline = $row["headline"];
                $main_image = $row["main_image"];
                $sub_image = $row["sub_image"];
                $date = $row["date"];
                $text1 = $row["text1"];
                $text2 = $row["text2"];

                //changes date format
                $date = strtotime($date);
                $date = date('F j, Y', $date);

                echo '
                <div class="article-body">
                <div class="article-header">
                    <h1 class="article-headline">' . $headline . '</h1>
                    <p class="article-date">' . $date . '</p>
                    <hr>
                </div>
                <img class="article-main-img" src="' . $main_image . '">
                <p class="article-text">' . $text1 . ' </p><br><br>
                <img class="article-img" src="' . $sub_image . '">
                <p class="article-text">' . $text2 . ' </p>
                
                </div>';


                // $article_connected = $row["article_connected"];

            }
        }
        
    ?>
	
    
    <div class="other-news-container">
    <hr>
	<h1 class="smallerHeader">other news</h1>
	<div class="upcoming-anime">
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<?php 
						include 'upcomingAnime.php';
					?>
					
				</div>
			

						<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
		</div>
	</div>

							
	<button class="newsButton" onclick="window.location.href ='news.php';">Return To News Page</button>
    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
<script src="js/news.js"></script>
</html>