<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="photos/logo.png">
    <script src = "animations.js"></script>
    <title>Products</title>
</head>
<section></section>
<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="homepage.php">Home</a>
        <a href="products.php">Products</a>
        <a href="#">About Us</a>
        <a href="faq.php">FAQ</a>
    </div>
    <div class = "sandwichHolder" onclick="openNav()">
        <div class = "bar"></div>
        <div class = "bar"></div>
        <div class = "bar"></div>
    </div>
    <p class="producttitle">Products</p>
</header>
<?php include ('cart.php') ?>
<img class = "bgp" src = "photos/bg.png">
<body>
    <table class="productHolder">
        <tr class="tr">
            <td class="pb">
                <p class="pheader">Ecstasy x5</p>
                <img class = "pimage" src="photos/pp1.png">
                <div class="add">
                    <p class = "atc">$30 - Add To Cart</p>
                    <button id = "ecs1" class="atcb1" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Ecstasy x10</p>
                <img class = "pimage" src="photos/pp2.png">
                <div class="add">
                    <p class = "atc">$60 - Add To Cart</p>
                    <button id = "ecs2" class="atcb2" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Ecstasy x50</p>
                <img class = "pimage" src="photos/pp3.png">
                <div class="add">
                    <p class = "atc">$250 - Add To Cart</p>
                    <button class="atcb3" id = "ecs3" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader">LSD x5</p>
                <img class = "pimage" src="photos/pp4.png">
                <div class="add">
                    <p class = "atc">$30 - Add To Cart</p>
                    <button id = "lsd1" onclick="addProductToCart(this.id)" class="atcb4">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">LSD x10</p>
                <img class = "pimage" src="photos/pp5.png">
                <div class="add">
                    <p class = "atc">$60 - Add To Cart</p>
                    <button id = "lsd2" onclick="addProductToCart(this.id)" class="atcb5">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">LSD x50</p>
                <img class = "pimage" src="photos/pp6.png">
                <div class="add">
                    <p class = "atc">$250 - Add To Cart</p>
                    <button id = "lsd3" onclick="addProductToCart(this.id)" class="atcb6">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader">Xanax x5</p>
                <img class = "pimage" src="photos/pp7.png">
                <div class="add">
                    <p class = "atc">$30 - Add To Cart</p>
                    <button id = "xan1" onclick="addProductToCart(this.id)" class="atcb7">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Xanax x10</p>
                <img class = "pimage" src="photos/pp8.png">
                <div class="add">
                    <p class = "atc">$60 - Add To Cart</p>
                    <button id = "xan2" onclick="addProductToCart(this.id)" class="atcb8">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Xanax x50</p>
                <img class = "pimage" src="photos/pp9.png">
                <div class="add">
                    <p class = "atc">$250 - Add To Cart</p>
                    <button id = "xan3" onclick="addProductToCart(this.id)" class="atcb9">+</button>
                </div>
            </td>
        </tr>
    </table>
</body>

<footer>
</footer>
</html>