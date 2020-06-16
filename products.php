<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="photos/plogo.png">
    <script src = "animations.js"></script>
    <title>Products</title>
</head>
<section></section>
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
    <p class="producttitle">Products</p>
    <img class  = "productphoto" src = "photos/plogo.png">
<img class = "bgp" src = "photos/pbg.png">
<?php include ('cart.php') ?>
<body>
<table class="productHolder">
    <tr class="tr">
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp1.png">
            <div class="add">
                <p class = "atc">$30 - Pedigree</p>
                <button id = "ecs1" class="atcb1" onclick="addProductToCart(this.id)">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp2.png">
            <div class="add">
                <p class = "atc">$30 - Hills</p>
                <button id = "ecs2" class="atcb2" onclick="addProductToCart(this.id)">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp3.png">
            <div class="add">
                <p class = "atc">$30 - Hills</p>
                <button class="atcb3" id = "ecs3" onclick="addProductToCart(this.id)">+</button>
            </div>
        </td>
    </tr>
    <tr class="tr">
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp4.png">
            <div class="add">
                <p class = "atc">$30 - Eukanuba</p>
                <button id = "lsd1" onclick="addProductToCart(this.id)" class="atcb4">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp5.png">
            <div class="add">
                <p class = "atc">$30 - Black Hawk</p>
                <button id = "lsd2" onclick="addProductToCart(this.id)" class="atcb5">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp6.png">
            <div class="add">
                <p class = "atc">$30 - Royal Canin</p>
                <button id = "lsd3" onclick="addProductToCart(this.id)" class="atcb6">+</button>
            </div>
        </td>
    </tr>
    <tr class="tr">
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp7.png">
            <div class="add">
                <p class = "atc">$30 - Pedigree</p>
                <button id = "xan1" onclick="addProductToCart(this.id)" class="atcb7">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp8.png">
            <div class="add">
                <p class = "atc">$30 - Purina</p>
                <button id = "xan2" onclick="addProductToCart(this.id)" class="atcb8">+</button>
            </div>
        </td>
        <td class="pb">
            <p class="pheader"></p>
            <img class = "pimage" src="photos/pp9.png">
            <div class="add">
                <p class = "atc">$30 - K9Natural</p>
                <button id = "xan3" onclick="addProductToCart(this.id)" class="atcb9">+</button>
            </div>
        </td>
    </tr>
</table>
</body>

<footer>

</footer>
</html>