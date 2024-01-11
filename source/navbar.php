<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgusaniStore</title>
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <img src="imgs/logo.png">
        <div class="title-name"><a href="home.php">
                <h1>Agusan.I</h1>
            </a></div>
        <div class="searchbar-div">
            <form action="" class="searchbar">
                <input type="text" placeholder="search" id="searchbar" name="q">
                <button type="submit"><i class="fa-solid fa-search"></i></button>
            </form>
        </div>

        <ul class="navul" id="navul">
            <li class="messagebtn"><a href="message.php"><i class="fa-solid fa-message"></i><span>Message</span></a></li>
            <li class="cartbtn"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span>Add to cart</span></a></li>
            <li class="optionsbtn"><a href=""><i class="fa-solid fa-list"></i><span>Options</span></a>
                <ul class="dropdown" id="dropdown">
                    <li><a href="profile.php"><i class="fa-solid fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
                    <li><a href="home.php #about-list"><i class="fa-solid fa-address-card"></i>Abous Us</a></li>
                    <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</body>

</html>