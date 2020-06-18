<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="photos/plogo.png">
    <script src = "animations.js"></script>
    <title>Pet Shop</title>
</head>
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
<img class = "lbg" src = "photos/pbg.png">
<body>
    <img class = "loginlogo" src="photos/plogo.png">
    <p class = "loginlogotext">Create Acount</p>
    <form action = "login.php" method = "post" class = "log">
        <p class = "loginform">Name:</p>
        <input type = "text" name = "createusername" class = "input">
        <p class = "loginform">Username:</p>
        <input type = "text" name = "createusername" class = "input">
        <p class = "loginform">Email:</p>
        <input type="text" name = "createemail" class = "input">
        <p class = "loginform">Password:</p>
        <input type="password" name = "createpwd" class = "input">
        <p class = "loginform"><button class = "logbutton" value = "insert">Create Account</button></p>
    </form>

</body>

<footer>
</footer>
</html>