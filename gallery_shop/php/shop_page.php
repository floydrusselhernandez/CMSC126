<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Best</title>
        <link rel="icon" href="res/BlackLogo.png">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="shop_page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <script src="shop_page.js"></script>        
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
    <table class="shop-item" style="width:100%">
        <tr>
            <td></td>
            <td></td>
        
            <td style="width:45%" rowspan="6">
                <div id="item-name">
                    <b>Jujutsu Kaisen 0: The Movie Yuta Okkotsu and Special Grade Vengeful Cursed Spirit Rika Orimoto 1/7 Scale Figure </b>
                </div>
                (101 sold items)
                <div id="item-type">
                    <i>Figure</i>
                </div>
                <hr>
                
                <div class="variations">
                    VARIATIONS
                <br>
                    <img src="rika/1.png" alt="">
                    <img src="rika/2.png" alt="">
                </div>
                
                <div class="sizes">
                    SIZES
                    <br>
                    <input type="button" value="15cm">
                    <input type="button" value="20cm">
                    <input type="button" value="25cm">
                    <input type="button" value="30cm">
                    <input type="button" value="40cm"> <br>
                </div>

                <div class="item-price">
                    <del>₱2,780</del> <b>₱2,580</b>
                </div>
                <input type="submit" value="ADD TO CART">
                <input type="submit" value="ADD TO WISHLIST">
                <hr>
                <table>
                    <tr id="delivery"><b>Delivery</b></tr>
                    <tr>
                        <td>
                            <div id="location" class = "address-container">
                                    Iloilo, Miagao, Bagumbayan

                                    <input type="button" value="CHANGE" onclick="handleChangeAddress()">
                            </div>
                            <div id="location-input" class = "hide-item">
                                <input name="address" value="Iloilo, Miagao, Bagumbayan">
                                <form method="post">
                                    <input type="submit" value="Save" onclick="handleChangeAddress()">
                                </form>
                        </div>
                        </td>
                    </tr>
                    <div id="shipping-delivery">
                        <tr>
                            <td>Shipping Fee: <b>₱120.00</b></td>
                        </tr>
                        <tr>
                            <td>Delivery by: <b>May 8 - May 22</b></td>
                        </tr>
                    </div>
                        <tr>
                            <div id="policy">
                                <td><b>30-day Return Policy</b></td>
                                <td><b>Cash on Delivery</b></td>
                            </div>
                        </tr>
                    <div id="description">
                        <tr>
                            <td colspan="3" id="product-info">
                                <hr>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="button" value="action">
                                <input type="button" value="adventure">
                                <input type="button" value="fantasy">
                            <hr>
                            </td>
                        </tr>
                        <hr>
                    </div>
                </table>
                <table>
                    <div>
                        <tr>
                            <b>Product Details</b>
                            <td id="product-details">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                                    <li>adipiscing elit, sed do eiusmod tempor </li>
                                    <li>incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur</li>
                                    <li>adipiscing elit, sed do eiusmod tempor </li>
                                    <li>incididunt ut labore et dolore magna aliqua.</li>
                                </ul>                                
                            </td>
                        </tr>
                    </div>
                </table>
                <table>
                    <div>
                        <tr>
                            <td>
                                <hr>
                                <b>Ratings and Reviews</b><br>
                                <b>4.67</b><div class="star-rating">
                                    <!-- Display 3 full stars -->
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <!-- Display a half star -->
                                    <!-- <i class="fas fa-star-half-alt"></i> -->
                                    <!-- Display 1 empty star -->
                                    <i class="far fa-star"></i>
                                </div> (27 reviews) <br>
                                sort by: 
                                <select name="menu" id="rating">Review
                                    <option value="Highest Rating">5-star rating</option>
                                    <option value="Highest Rating">4-star rating</option>
                                    <option value="Highest Rating">3-star rating</option>
                                    <option value="Highest Rating">2-star rating</option>
                                    <option value="Highest Rating">1-star rating</option>
                                    <option value="Highest Rating">with media</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                                <b>Review Header</b><br>
                                <!-- Display 5 full stars -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <br>
                                by: Dim**** <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                                <img src="rika/13.png" style="width: 3cm; height: 3cm;"><br>
                                <small>variation: 15cm</small>
                            <hr>
                            
                                <b>Review Header</b><br>
                                <!-- Display 5 full stars -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <br>
                                by: Dim**** <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                                <img src="rika/8.png" style="width: 3cm; height: 3cm;"><br>
                                <small>variation: 40cm</small>                            
                            
                            <hr>
                                <b>Review Header</b><br>
                                <!-- Display 5 full stars -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <br>
                                by: Dim**** <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
                                <img src="rika/3.png" style="width: 3cm; height: 3cm;"><br>
                                <small>variation: 20cm</small>
                            </td>
                        </tr>
                    </div>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <div class="center-image">
                    <img src="rika/4.png" alt="">
                </div>
            </td>
            <td>
                <div class="center-image">
                    <img src="rika/5.png" alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="center-image">
                    <img src="rika/6.png" alt="">
                </div>
            </td>
            <td>
                <div class="center-image">
                    <img src="rika/7.png" alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="center-image">
                    <img src="rika/8.png" alt="">
                </div>
            </td>
            <td>
                <div class="center-image">
                    <img src="rika/9.png" alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="center-image">
                    <img src="rika/10.png" alt="">
                </div>
            </td>
            <td>
                <div class="center-image">
                    <img src="rika/11.png" alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="center-image">
                    <img src="rika/12.png" alt="">
                </div>
            </td>
            <td>
                <div class="center-image">
                    <img src="rika/13.png" alt="">
                </div>
            </td>
        </tr>
    </table>
    
    <table class="related-products">
        <tr>
            
            <div id="related-items">
                <hr>You Might Also Like
            </div>
            <td>
                <div class="item-info">
                    <div class="wishlist-img">
                        <img src="rika/6.png" alt="figure3" style="border-radius: 5px;
                        width: 200px;
                        height: 250px;
                        object-fit: cover;
                        display: flexbox;
                        margin: 10px;">
                    </div>
                    <div class="wishlist-info">
                        <div class="wishlist-title">
                            <h3>Uchusen Bessatsu</h3>
                            <a href="#" class="shop-btn">
                            <i class="fas fa-heart"></i>
                            </a>
                        </div>                                  
                        <p class="ctgry">Figures</p>
                        <div class="soldstar">
                            <p class="sold">21 sold</p>
                            <div class="star-rating">
                                <!-- Display 3 full stars -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <!-- Display a half star -->
                                <!-- <i class="fas fa-star-half-alt"></i> -->
                                <!-- Display 1 empty star -->
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="align-price-remove">
                            <br>
                            <p class="price">₱500</p>
                        </div>
                    </div>
                </div>
                
            </td>
            <td>
                <div class="wishlist-img">
                    <img src="rika/6.png" alt="figure3" style="border-radius: 5px;
                    width: 200px;
                    height: 250px;
                    object-fit: cover;
                    display: flexbox;
                    margin: 10px;">
                </div>
                <div class="wishlist-info">
                    <div class="wishlist-title">
                        <h3>Uchusen Bessatsu</h3>
                        <a href="#" class="shop-btn">
                        <i class="fas fa-heart"></i>
                        </a>
                    </div>                                  
                    <p class="ctgry">Figures</p>
                    <div class="soldstar">
                        <p class="sold">21 sold</p>
                        <div class="star-rating">
                            <!-- Display 3 full stars -->
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <!-- Display a half star -->
                            <!-- <i class="fas fa-star-half-alt"></i> -->
                            <!-- Display 1 empty star -->
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="align-price-remove">
                        <br>
                        <p class="price">₱500</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="wishlist-img">
                    <img src="rika/6.png" alt="figure3" style="border-radius: 5px;
                    width: 200px;
                    height: 250px;
                    object-fit: cover;
                    display: flexbox;
                    margin: 10px;">
                </div>
                <div class="wishlist-info">
                    <div class="wishlist-title">
                        <h3>Uchusen Bessatsu</h3>
                        <a href="#" class="shop-btn">
                        <i class="fas fa-heart"></i>
                        </a>
                    </div>                                  
                    <p class="ctgry">Figures</p>
                    <div class="soldstar">
                        <p class="sold">21 sold</p>
                        <div class="star-rating">
                            <!-- Display 3 full stars -->
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <!-- Display a half star -->
                            <!-- <i class="fas fa-star-half-alt"></i> -->
                            <!-- Display 1 empty star -->
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="align-price-remove">
                        <br>
                        <p class="price">₱500</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="wishlist-img">
                    <img src="rika/6.png" alt="figure3" style="border-radius: 5px;
                    width: 200px;
                    height: 250px;
                    object-fit: cover;
                    display: flexbox;
                    margin: 10px;">
                </div>
                <div class="wishlist-info">
                    <div class="wishlist-title">
                        <h3>Uchusen Bessatsu</h3>
                        <a href="#" class="shop-btn">
                        <i class="fas fa-heart"></i>
                        </a>
                    </div>                                  
                    <p class="ctgry">Figures</p>
                    <div class="soldstar">
                        <p class="sold">21 sold</p>
                        <div class="star-rating">
                            <!-- Display 3 full stars -->
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <!-- Display a half star -->
                            <!-- <i class="fas fa-star-half-alt"></i> -->
                            <!-- Display 1 empty star -->
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="align-price-remove">
                        <br>
                        <p class="price">₱500</p>
                    </div>
                </div>
            </td>
            <td>
                <div class="wishlist-img">
                    <img src="rika/6.png" alt="figure3" style="border-radius: 5px;
                    width: 200px;
                    height: 250px;
                    object-fit: cover;
                    display: flexbox;
                    margin: 10px;">
                </div>
                <div class="wishlist-info">
                    <div class="wishlist-title">
                        <h3>Uchusen Bessatsu</h3>
                        <a href="#" class="shop-btn">
                        <i class="fas fa-heart"></i>
                        </a>
                    </div>                                  
                    <p class="ctgry">Figures</p>
                    <div class="soldstar">
                        <p class="sold">21 sold</p>
                        <div class="star-rating">
                            <!-- Display 3 full stars -->
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <!-- Display a half star -->
                            <!-- <i class="fas fa-star-half-alt"></i> -->
                            <!-- Display 1 empty star -->
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="align-price-remove">
                        <br>
                        <p class="price">₱500</p>
                    </div>
                </div>
            </td>
        </tr>
    </table>

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