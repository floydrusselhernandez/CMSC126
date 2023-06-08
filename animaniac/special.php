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
    <div class="search-artist">
        <input type="search" id="search" placeholder="Search Artist...">
        <br>
    </div>
    <div class="artists">
        <table id="artist1">
            <td><img src="artworks/1_dfvj16c-1d07d492-2c9b-42ee-850b-7e8d890501e1.jpg" alt="profile-photo"></td>
            <td>
            <label class="artist-name">Anato Finnstark</label><br>
            <i>4 artworks</i><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <div class="samples">
                <td><img src="artworks/femto_and_zodd__berserk__by_anatofinnstark_dftva4h-fullview.jpg" alt="demon"></td>
                <td><img src="artworks/the_raven_s_nightmare___bloodborne___by_anatofinnstark_dfhk02h-pre.jpg" alt="raven"></td>
                <td><img src="artworks/her_by_anatofinnstark_dfgq3as-pre.jpg" alt="her"></td>
            </div>
        </table>
        <hr>
        <table id="artist2">
            <td><img src="artworks/2_galaxy_by_craftea_dckrmd5-pre.jpg" alt="galaxy" alt="profile-photo"></td>
            <td>
            <label class="artist-name">Craftea</label><br>
            4 artworks <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <div class="samples">
                <td><img src="artworks/2_lava_by_craftea_dfswyys-fullview.jpg" alt="dove"></td>
                <td><img src="artworks/2_free_by_craftea_ddn8dfs-fullview.jpg" alt="galaxy"></td>
                <td><img src="artworks/2_kamisato_ayaka_by_craftea_derx80o-fullview.jpg" alt="kamisato"></td>
            </div>
        </table>
        <hr>
        <table id="artist3">
            <td><img src="artworks/3_midjourney_3042_by_javier_lluesma_dfvpxxn-pre.jpg" alt="profile-photo"></td>
            <td><label class="artist-name">Javier Lluesma</label><br>
            4 artworks <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <div class="samples">
                <td><img src="artworks/3_midjourney_2972_by_javier_lluesma_dfvp4qe-pre.jpg" alt="demon"></td>
                <td><img src="artworks/3_midjourney_2983_by_javier_lluesma_dfvpscq-pre.jpg" alt="raven"></td>
                <td><img src="artworks/3_midjourney_3011_by_javier_lluesma_dfvpusk-pre.jpg" alt="her"></td>
            </div>
        </table>
        <hr>
        <table id="artist4">
            <td><img src="artworks/4_dfv500w-51a9f3da-5f56-4eb7-b2db-b5e51af39e56.jpg" alt="profile-photo"></td>
            <td><label class="artist-name">Nuimo</label><br>
            4 artworks <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <div class="samples">
                <td><img src="artworks/4_fallen_rosemary__rita_rossweisse__by_nuimo_dfs8k8a-pre.jpg" alt="demon"></td>
                <td><img src="artworks/4_the_brightest_days_has_the_darkest_nights_by_nuimo_dfsr3b1-fullview.jpg" alt="raven"></td>
                <td><img src="artworks/4_dft7d2m-d91331fc-c5c4-48b7-a0d8-57123005ba53.jpg" alt="her"></td>
            </div>
        </table>
    </div>
        <!-- Footer -->
        <?php
            include 'footer.php';
    ?>
</body>
</html>
