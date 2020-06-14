<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="photos/plogo.png">
    <script src = "animations.js"></script>
    <title>Pet</title>
</head>
<section></section>
<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.html">Home</a>
        <a href="products.html">Products</a>
        <a href="#">About Us</a>
        <a href="faq.php">FAQ</a>
    </div>
    <div class = "sandwichHolder" onclick="openNav()">
        <div class = "bar"></div>
        <div class = "bar"></div>
        <div class = "bar"></div>
    </div>
</header>
<?php include ('cart.php') ?>
<img class = "bg" src = "photos/pbg.png">
<body>
<img class = "logo" src="photos/plogo.png">
<p class = "logotext">Pet Food Shop</p>
</body>

<footer>
</footer>
</html>