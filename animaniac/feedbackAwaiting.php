<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback</title>
	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<script type="text/javascript" src="js/reviewScript.js"></script>
</head>
<body>
	<!-- Header -->
        <?php include 'header.php' ?>
	<!-- Body -->
	<div class="awaitingReviewContainer">
		<h1 class="smallerHeader">ratings & reviews center</h1>
		<div class="tabHeaders">
			<button  class="activeTab awaitingReview">Awaiting Review </button>
			<button class="unactiveTab submittedReview" onclick="window.location.href ='feedbackSubmitted.php';">Submitted Review </button>
		</div>
		<?php 
			include 'productAwaitingReview.php';
		?>

		<!-- <div class="productReview">		
			<img class="rounded productIcon" id="productIcon1" src="res/products/product2.jpg">
			<div class="productInfoAwaiting">
				<h2 class="productName" id="productName1">hololive English -Myth- Gawr Gura 1/7 Scale Figure</h2>
				<h2 class="productCategory" id="productCategory1">Figures</h2>
				<div class="tags">
					<p class="productTags" id="productTags1A">Variations: Goob</p>
					<p class="productTags" id="productTags1B">Size: One-size</p>
				</div>
				<div class="rating">
					<div class="starIcon">
						<div id="product-rating" class="star-rating">
							<button class="star">&#9734;</button>
							<button class="star">&#9734;</button>
							<button class="star">&#9734;</button>
							<button class="star">&#9734;</button>
							<button class="star">&#9734;</button>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<hr class="productLine"> -->



	</div>


	
	<?php
		include 'footer.php';
	?>
</body>
<script type="text/javascript" src="js/reviewScript.js"></script>
</html>