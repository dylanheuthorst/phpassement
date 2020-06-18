<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="photos/plogo.png">
    <script src = "animations.js"></script>
    <title>About Us</title>
</head>
<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="Cart.php">Products</a>
        <a href="aboutus.php">About Us</a>
        <a href="loginform.php">Login</a>
        <a href="createaccount.php">Create Account</a>
    </div>
    <div class = "sandwichHolder" onclick="openNav()">
        <div class = "bar"></div>
        <div class = "bar"></div>
        <div class = "bar"></div>
    </div>
</header>
<img class = "bg2" src = "photos/pbg.png">
<img class  = "alogo" src = "photos/plogo.png">
<p class = "producttitle1">About Us</p>
<body>
<img class = "slideshow" name = "slide">
<p class="aboutusdesc">
    We strive to be the fastest and easiest online pet food shop.
    We currently have 3 shops in Auckland and are expanding.
    Our orders should ship within 3 days else we will refund you the price of shipping.
</p>
<p class="aboutusdesc">
    If you want to make a refund request or return you have 30 days to send your request.
    Once you have sent a request we will look over the request within 24 ours and if we see a valid reason we will refund or return you.
</p>
</body>

<footer>
    <?php include ('footer.php') ?>
</footer>
</html>