<?php

?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News</title>

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
<div >
	<!-- Header -->
	<?php include 'header.php'; ?>
        <!--  -->
	<!-- Body -->
	<h1 class="featured-article-header">featured articles</h1>
	
		<div class="featured-articles">
			<div class="featured-slide-container swiper">
				<div class="featured-slide-content">
					<div class="card-wrapper swiper-wrapper">
						<?php
							include 'featuredArticle.php';
							
						?>

					</div>
			

			<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
			</div>
		</div>

	<h1 class="smallerHeader">upcoming anime</h1>
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

	<h1 class="smallerHeader">upcoming products</h1>
	<div class="upcoming-products">
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<?php 
						include 'upcomingProducts.php';
					?>
					
				</div>
			

						<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
		</div>
	</div>

	<h1 class="smallerHeader">upcoming promotions</h1>
	<div class="upcoming-promotions">
		<div class="slide-container swiper">
			<div class="slide-content">
				<div class="card-wrapper swiper-wrapper">
					<?php 
						include 'upcomingPromotions.php';
					?>
					
				</div>
			

						<div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
		</div>
	</div>

	
</div>
<!-- Footer -->
<?php include 'footer.php'; ?>

	<!-- Swiper JS -->
      <!--Uncomment this line-->
    <!-- <script src="swiper-bundle.min.js"></script> -->

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="js/news.js"></script>
</body>
	
</html>