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
<img class = "lbg" src = "photos/pbg.png">
<body>
    <img class = "loginlogo" src="photos/plogo.png">
    <p class = "login1logotext">Login</p>
    <form action = "login.php" method = "post" class = "log">
        <p class = "loginform">Username:</p>
        <input type = "text" name = "username" class = "input" placeholder="Username">
        <p class = "loginform">Password:</p>
        <input type="password" name = "password" class = "input" placeholder="Password">
        <p class = "loginform"><input type="submit" class = "logbutton" value="Login"></p>
    </form>
</body>

<footer>
</footer>
</html>