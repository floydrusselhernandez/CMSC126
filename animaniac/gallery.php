<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Best</title>
        <link rel="icon" href="res/BlackLogo.png">
        <link rel="stylesheet" href="css/design.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>

<body>
    <!-- Header -->
    <?php
            include 'header.php';
    ?>
    <section class="gallery" id="gallery">
        <div class="gallery">
                <h1>WANNA SHARE YOUR OWN ANIME ARTWORK?</h1>
        </div>
        <div class="submit">
            <a href="submit.php">Submit Now</a>
        </div>
        <br> 
    </section>
    <br>

    <div class="navbar">
            <a href="gallery.php">Featured</a>
            <a href="best.php">Best</a>
            <a href="random.php">Random</a>
            <a href="special.php">Special Creators</a>   
    </div>
    <br>
    <section>
        <div class="featured">
            <div class="image">
                <img src="images/demon-slayer.jpg" alt="demon-slayer">
                <img src="images/one piece.jpg" alt="one piece">
                <img src="images/tokyo-ghoul.jpg" alt="tokyo-ghoul">
                <img src="images/digi.jpg" alt="digi">
            </div>
            <div class="image">
                <img src="images/sexy.jpg" alt="sexy">
                <img src="images/hero.jpeg" alt="hero">
                <img src="images/jujutsu-kaisen.jpg" alt="jujutsu-kaisen">
                <img src="images/cells.jpg" alt="cells">
                <img src="images/purple boy.jpg" alt="purple">
            </div>
            <div class="image">
                <img src="images/one_piece_phone.jpg" alt="one_piece_phone">
                <img src="images/digi.jpg" alt="digi">
                <img src="images/Tanjiro Kamado.jpg" alt="Tanjiro">
                <img src="images/boy_anime.jpg" alt="boy">
                <img src="images/jujutsu-kaisen.jpg" alt="jujutsu-kaisen">
                <img src="images/goku.jpeg" alt="goku">
            </div>
            <div class="image">
                <img src="images/girl_anime.jpg" alt="girl_anime">
                <img src="images/hunters.png" alt="hunters">
                <img src="images/solo-levelling.jpg" alt="solo-levelling">
                <img src="images/digi.jpg" alt="digi">
                <img src="images/Tanjiro Kamado.jpg" alt="Tanjiro">
                <img src="images/haikyuuu.jpg" alt="haikyuuu">
            </div>
        </div>
    </section>
	<?php
            include 'footer.php';
    ?>
</body>
</html>