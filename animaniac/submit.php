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
        
    </section>
    <br>

    <div id="submit-art">
        <h1>SUBMIT ARTWORK</h1>
    </div>
<div class="sub-artwork">
    <div class="submit-form">
        <div id="file-upload">
            <div id="upload-text">
                UPLOAD FILE
            </div>
            <br>
            <div>
                <input type="file" id="upload" name="UPLOAD FILE" required><br>
                JPEG, JPG, PNG, GIF maximum size: 50MB
            </div>
            <hr>
            <div>
                <label for="artwork-title">Artwork Title</label><br>
                <input type="text" id="artwork-title" name="Artwork Title">
                <hr>
            </div>
            <div id="description">
                <label for="description">Description:</label><br>
                <textarea name="description" rows="10" cols="45" placeholder="Describe your artwork here..."></textarea>
                <br> Please do not upload any copyright infringing content.<br>
            </div>
            <div id="sub-can">
                <button id="post">POST</button>
                <a href="gallery.php">Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="main-footer">
            <div class="footer-logo">
                <a href="#top" class="footer-logo-link">
                    <img id="Logo_White" src="res/Logo_White.png">
                    <img id="AnimaniacTxt_White" src="res/AnimaniacTxt_White.png">
                </a>
            </div>
        </footer>
</body>
</html>
