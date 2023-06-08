<!DOCTYPE html>

<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial scale = 1">
    <link rel="icon" href="images/BlackLogo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>ANIMANIAC - Submit Artwork</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="submit.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <!-- Header -->
    <header class="main-header" id="top">
        <div class="logo-explore-container">
            <!-- Logo and Name -->
            <div class="header-logo">
                <a href="home.html">
                    <img id="Logo_White" src="res/Logo_White.png">
                    <img id="AnimaniacTxt_White" src="res/AnimaniacTxt_White.png">
                </a>
            </div>
            <!-- Explore Dropdown -->
            <div class="explore">
                <button class="explorebtn">Explore
                    <div class="fas fa-caret-down" id="search-btn"></div>
                </button>
                <div class="explore-content">
                    <table style="width:100%">
                        <tr>
                            <th><a href="gallery.html"><b><u>Gallery</u></b></a></th>
                            <th><a href="news.html"><b><u>News</u></b></a></th>
                        </tr>
                        <tr>
                            <td><a href="special.html">Artist</a></td>
                        </tr>
                        <tr>
                            <td><a href="submit.html">Submit Artworks</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="search-filter-container">
            <!-- Filter -->
            <div class="filter-container">
                <select name="filter" id="filter">
                    <option value="" disabled selected hidden>Filter by</option>
                    <option value="all">All</option>
                    <option value="figures">Figures</option>
                    <option value="books">Books</option>
                    <option value="clothing">Clothing</option>
                    <option value="news">News</option>
                    <option value="artworks">Artworks</option>
                </select>
            </div>
            <!-- Search Bar -->
            <div class="search">
                <input type="text" placeholder="Search...">
                <a href="#">
                    <div class="fas fa-search" id="search-btn"></div>
                </a>
            </div>
        </div>

        <!-- Icons -->
        <div class="icons">
            <a href="wishlist.html" class="wish">
                <div class="fas fa-heart" id="wishlist-btn"></div>
            </a>
            <a href="shop.html" class="cart">
                <div class="fas fa-shopping-cart" id="cart-btn"></div>
            </a>
            <a href="feedbackAwaiting.html" class="notif">
                <div class="fas fa-bell" id="notif-btn"></div>
            </a>
            <a href="user-login.html" class="user">
                <div class="fas fa-user" id="user-btn"></div>
            </a>
        </div>
    </header>
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
                <a href="gallery.html">Cancel</a>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="footer-logo">
            <a href="#top" class="footer-logo-link">
                <img id="logoWhite" src="res/Logo_White.png">
                <img id="animaniacTxtWhite" src="res/AnimaniacTxt_White.png">
            </a>
        </div>
    </footer>
</body>
</html>
