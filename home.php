<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location : login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgusaniStore</title>
    <link rel="icon" href="imgs/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php
    include("source/navbar.php") ?>
    <header class="headnav">
        <ul>
            <li><a href="#">
                    <h2>HOME</h2>
                </a></li>
            <li><a href="#">
                    <h2>SHOPS</h2>
                </a></li>
            <li><a href="#productview">
                    <h2>FEATURE</h2>
                </a></li>
        </ul>
    </header>

    <!-- BANNER -->
    <section>
        <div class="prodcontainer">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="imgs/ads 1.png"></div>
                    <div class="swiper-slide"><img src="imgs/ads 2.png"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- END OF BANNER -->

    <!-- CATEGORIES -->
    <div class="card-list">
        <a href="#" class="card-item">
            <img src="imgs/Category/categoryschoolsupplies.jpg" alt="Card Image">
            <span class="categoryname">SCHOOL SUPPLIES</span>
        </a>

        <a href="#" class="card-item">
            <img src="imgs/Category/categoryclothes.jpg" alt="Card Image">
            <span class="categoryname">CLOTHES</span>
        </a>

        <a href="#" class="card-item">
            <img src="imgs/Category/categoryessentialcare.jpg" alt="Card Image">
            <span class="categoryname">ESSENTIAL CARE</span>
        </a>

        <a href="#" class="card-item">
            <img src="imgs/Category/categoryaccessories.jpg" alt="Card Image">
            <span class="categoryname">ACCESSORIES</span>
        </a>
    </div>
    <!--END CATEGORIES -->

    <!-- PRODUCT VIEW -->
    <section id="productview" class="productview">
        <h2>Featured Products</h2>
        <div class="productviewcontainer">

            <div class="product-card">
                <a href="items/item.php"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/item 4.jpg"></a>
                <div class="product-title">
                    <h5>6 in 1 Correction tape</h5>
                    <h4>₱50</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/item2.jpg"></a>
                <div class="product-title">
                    <h5>Korean style waffle aesthetic polo shirt for men long sleeve shirt loose oversize casual jacket coat</h5>
                    <h4>₱255</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/item5.jpg"></a>
                <div class="product-title">
                    <h5>A4 Long Clipboard</h5>
                    <h4>₱39</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <a href="#"><img src="imgs/Product/shirt 2.jpg"></a>
                <div class="product-title">
                    <h5>UNIFIT Men's Dri-Fit Casual Long Sleeve Shirts Plain Round Neck</h5>
                    <h4>₱109</h4>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <?php
    include("source/about_footer.php") ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="scripts/home.js"></script>
</body>

</html>