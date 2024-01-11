<?php
date_default_timezone_set('Asia/Manila');
include 'dba.inc.php';
include 'comments.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgusaniStore</title>
    <link rel="icon" href="imgs/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/item.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/comments.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php
    include("source/navbar.php") ?>

    <section id="product-details">
        <div class="prodcontainer">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="imgs/shirt 2.jpg"></div>
                    <div class="swiper-slide"><img src="imgs/shirt 3.jpg"></div>
                    <div class="swiper-slide"><img src="imgs/shirt 4.jpg"></div>
                    <div class="swiper-slide"><img src="imgs/shirt 5.jpg"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <div class="description">
        <div class="proddescription">
            <h1>Product Name</h1><br>
            <h3>₱109</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius eligendi eveniet ipsam dolore, labore libero ad facere architecto dolorum a quod consectetur illum, nisi, quaerat sed rem aliquam aliquid sit?</p>
        </div>
        <!-- QUANTITY -->
        <div class="quantwrapper">
            <span class="minus">-</span>
            <span class="counter">01</span>
            <span class="addition">+</span>
        </div>
        <!-- END OF QUANTITY -->
        <button>Add to Cart</button>
        <button>Trade</button>
    </div>

    <section class="aboutseller">
        <table style="width:100%">
            <tr>
                <td><img src="imgs/jee.jpg"></td>
                <td>Seller's Shop Name <br>Active Now</td>
                <td>Ratings: 5<i class="fa-solid fa-star"></i>
                    <hr>Products: 0
                </td>
                <td>Response Rate
                    <hr>Response time within hr
                </td>
            </tr>
        </table>
        </div>
    </section>


    <section>
        <?php
        echo "<form method='POST' action='" . setComments($conn) . "'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
        <textarea name='message'></textarea> <br>
        <button type='submit' name='commentSubmit' class='comments-button'>Comment</button>
    </form>";

        getComments($conn);
        ?>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="scripts/item.js"></script>
</body>

</html>