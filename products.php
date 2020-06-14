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
    <div id="cartnav" class="cartnav">
        <a href="javascript:void(0)" class="closecart" onclick="closeCart()">&times;</a>
        <a href = "#">Your Cart</a>
        <table class="cartTable" id = "cart1"></table>
        <table class="cartTable" id = "cart2"></table>
        <table class="cartTable" id = "cart3"></table>
        <table class="cartTable" id = "cart4"></table>
        <table class="cartTable" id = "cart5"></table>
        <table class="cartTable" id = "cart6"></table>
        <table class="cartTable" id = "cart7"></table>
        <table class="cartTable" id = "cart8"></table>
        <table class="cartTable" id = "cart9"></table>
        <table class = "total">
            <tr class="totalRow">
                <td class="totalWriting">TOTAL:</td>
                <td class="totalPrice" id = "total">$0.00</td>
            </tr>
        </table>
    </div>
    <div class = "sandwichHolder" onclick="openNav()">
        <div class = "bar"></div>
        <div class = "bar"></div>
        <div class = "bar"></div>
    </div>
    <p class="producttitle">Products</p>
</header>
<img class = "bgp" src = "photos/bg.png">
<button onclick="openCart()" class = "cart"><img class = "cartp" src="photos/cart.png"></button>
<body>
    <table class="productHolder">
        <tr class="tr">
            <td class="pb">
                <p class="pheader">Ecstasy x5</p>
                <img class = "pimage" src="photos/p1.png">
                <div class="add">
                    <p class = "atc">$30 - Add To Cart</p>
                    <button id = "ecs1" class="atcb1" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Ecstasy x10</p>
                <img class = "pimage" src="photos/p2.png">
                <div class="add">
                    <p class = "atc">$60 - Add To Cart</p>
                    <button id = "ecs2" class="atcb2" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Ecstasy x50</p>
                <img class = "pimage" src="photos/p3.png">
                <div class="add">
                    <p class = "atc">$250 - Add To Cart</p>
                    <button class="atcb3" id = "ecs3" onclick="addProductToCart(this.id)">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader">LSD x5</p>
                <img class = "pimage" src="photos/p4.png">
                <div class="add">
                    <p class = "atc">$30 - Add To Cart</p>
                    <button id = "lsd1" onclick="addProductToCart(this.id)" class="atcb4">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">LSD x10</p>
                <img class = "pimage" src="photos/p5.png">
                <div class="add">
                    <p class = "atc">$60 - Add To Cart</p>
                    <button id = "lsd2" onclick="addProductToCart(this.id)" class="atcb5">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">LSD x50</p>
                <img class = "pimage" src="photos/p6.png">
                <div class="add">
                    <p class = "atc">$250 - Add To Cart</p>
                    <button id = "lsd3" onclick="addProductToCart(this.id)" class="atcb6">+</button>
                </div>
            </td>
        </tr>
        <tr class="tr">
            <td class="pb">
                <p class="pheader">Xanax x5</p>
                <img class = "pimage" src="photos/p7.png">
                <div class="add">
                    <p class = "atc">$30 - Add To Cart</p>
                    <button id = "xan1" onclick="addProductToCart(this.id)" class="atcb7">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Xanax x10</p>
                <img class = "pimage" src="photos/p8.png">
                <div class="add">
                    <p class = "atc">$60 - Add To Cart</p>
                    <button id = "xan2" onclick="addProductToCart(this.id)" class="atcb8">+</button>
                </div>
            </td>
            <td class="pb">
                <p class="pheader">Xanax x50</p>
                <img class = "pimage" src="photos/p9.png">
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