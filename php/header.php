<!-- Header -->
<header class="main-header" id="top">
    <div class="logo-explore-container">
        <!-- Logo and Name -->
        <div class="header-logo">
            <a href="home.php">
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
                        <th><a href="gallery_shop/gallery.php"><b><u>Gallery</u></b></a></th>
                        <th><a href="news.php"><b><u>News</u></b></a></th>
                    </tr>
                    <tr>
                        <td><a href="special.php">Artist</a></td>
                    </tr>
                    <tr>
                        <td><a href="submit.php">Submit Artworks</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="search-filter-container">
        <!-- Search Bar -->
        <div class="search">
            <form action="searchResult.php" method="POST">
                <input type="text" placeholder="Search..." name="search_query" value="<?php echo isset($_SESSION['search_query']) ? $_SESSION['search_query'] : ''; ?>">
                <button type="submit">
                    <div class="fas fa-search" id="search-btn"></div>
                </button>
            </form>
        </div>
    </div>

    <!-- Icons -->
    <div class="icons">
        <a href="wishlist.php" class="wish">
            <div class="fas fa-heart" id="wishlist-btn"></div>
        </a>
        <a href="cart.php" class="cart">
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
        </a>
        <a href="feedbackAwaiting.php" class="notif">
            <div class="fas fa-bell" id="notif-btn"></div>
        </a>
        <a href="gallery_shop/php/user-login.php" class="user">
            <div class="fas fa-user" id="user-btn"></div>
        </a>
    </div>
</header>