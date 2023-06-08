<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
	<!-- Header -->
        <?php
            include 'header.php';
        ?>
    <!-- Body -->
	<div class="image-container">
		<a href="trending.html">
	    <img class="rounded" id="trending" src="res/images/holder.jpg">
	    <div class="image-text">trending</div>
		</a>
	</div>
	

	<h1 class="bigHeader">special promotions</h1>
	<table>
		<tr>
			<td id="promoData">
				<a href="specialPromotions.html">
				<img class="rounded" id="specialPromos" src="res/images/product8.jpg"></a>
			</td>
			<td id="promoData">
				<a href="specialPromotions.html">
				<img class="rounded" id="specialPromos" src="res/images/product.jpg"></a>
			</td>
			<td id="promoData">
				<a href="specialPromotions.html">
				<img class="rounded" id="specialPromos" src="res/images/product9.jpg"></a>
			</td>
		</tr>
	</table>
	<a href="specialPromotions.html"><button id="shopNow">Shop Now</button></a>

	<div class="image-container">
		<a href="popular.html">
	    <img class="rounded" id="trending" src="res/images/popular2.png">
	    <div class="image-text">popular</div>
		</a>
	</div>

	<div class="newArrivalDiv">
	<h1 class="smallerHeader">new arrival</h1>
	<table>
		<tr>
			<td id="newArrivalData">
				<a href="newArrival.html">
				<img class="rounded" id="newArrival" src="res/images/product10.jpg"></a>
			</td>
			<td id="newArrivalData">
				<a href="newArrival.html">
				<img class="rounded" id="newArrival" src="res/images/product11.jpg"></a>
			</td>
			<td id="newArrivalData">
				<a href="newArrival.html">
				<img class="rounded" id="newArrival" src="res/images/product12.jpg"></a>
			</td>
			<td id="newArrivalData">
				<a href="newArrival.html">
				<img class="rounded" id="newArrival" src="res/images/product13.jpg"></a>
			</td>
		</tr>
	</table>
	</div>

	<div class="categoryDiv">
	<h1 class="smallerHeader">categories</h1>
	<table>
		<tr>
			<td id="categoryData">
				<div class="catImgContainer">
					<a href="shop.html">
					<img class="rounded" id="category" src="res/images/book.jpg">
					<div class="catImg-text">books</div></a>
				</div>
			</td>
			<td id="categoryData">
				<div class="catImgContainer">
					<a href="shop.html">
					<img class="rounded" id="category" src="res/images/popular2.jpg">
					<div class="catImg-text">figures</div></a>
				</div>
			</td>
			<td id="categoryData">
				<div class="catImgContainer">
					<a href="shop.html">
					<img class="rounded" id="category" src="res/images/clothes.jpg">
					<div class="catImg-text">clothing</div></a>
				</div>
			</td>
		</tr>
	</table>
	</div>

	<div class="genreDiv">
	<h1 class="smallerHeader">by genre</h1>
	<table>
		<tr>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product14.jpg">
					<div class="genreImg-text">adventure</div></a>
				</div>
			</td>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product15.jpg">
					<div class="genreImg-text">action</div></a>
				</div>
			</td>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product16.jpg">
					<div class="genreImg-text">comedy</div></a>
				</div>
			</td>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product17.jpg">
					<div class="genreImg-text">drama</div></a>
				</div>
			</td>
		</tr>
		<tr>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product18.jpg">
					<div class="genreImg-text">fantasy</div></a>
				</div>
			</td>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product19.jpg">
					<div class="genreImg-text">horror</div></a>
				</div>
			</td>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html" target="_blank">
					<img class="rounded" id="genre" src="res/images/product20.jpg">
					<div class="genreImg-text">romance</div></a>
				</div>
			</td>
			<td id="genreData">
				<div class="genreImgContainer">
					<a href="shop.html">
					<img class="rounded" id="genre" src="res/images/product21.jpg">
					<div class="genreImg-text">sci-fi</div></a>
				</div>
			</td>
		</tr>
	</table>
	</div>
	<!-- footer -->
	<footer>
        <div class="footer-logo">
            <a href="#">
                <img id="Logo_White"src="res/Logo_White.png">
                <img id="AnimaniacTxt_White"src="res/AnimaniacTxt_White.png">
            </a>
        </div>
    </footer>
</body>
</html>
