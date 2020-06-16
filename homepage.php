<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="photos/plogo.png">
    <script src = "animations.js"></script>
    <title>Pet Shop</title>
</head>
<?php include ('cart.php') ?>
<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.php">Home</a>
        <a href="products.php">Products</a>
        <a href="aboutus.php">About Us</a>
    </div>
    <div class = "sandwichHolder" onclick="openNav()">
        <div class = "bar"></div>
        <div class = "bar"></div>
        <div class = "bar"></div>
    </div>
</header>
<img class = "bg" src = "photos/pbg.png">
<body>
<img class = "logo" src="photos/plogo.png">
<p class = "logotext">Pet Food Shop</p>
<section>
    <div class = "categories"><a href="products.html"><img src = "photos/Category1.png" class = "categoryPhotos"></a></div>
    <div class = "categories"><a href="products.html"><img src = "photos/category2.png" class = "categoryPhotos"></a></div>
    <div class = "categories"><a href = "products.html"><img src = "photos/category3.png" class = "categoryPhotos"></a></div>
    <p class = "categoryTitle1"><a href="products.html" style = "text-decoration: none" class = "link">Dog Food</a></p>
    <p class = "categoryTitle2"><a href="products.html" style = "text-decoration: none" class = "link">Cat Food</a></p>
    <p class = "categoryTitle3"><a href="products.html" style = "text-decoration: none" class = "link">Rabbit Food</a></p>
</section>
</body>

<footer>
</footer>
</html>