<!DOCTYPE html>
<html lang="en">
<link href="style.css" rel="stylesheet" type="text/css">
<script src = "animations.js"></script>
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
    <button onclick="" class = "pay">Check Out</button>
    <table class = "total">
        <tr class="totalRow">
            <td class="totalWriting">TOTAL:</td>
            <td class="totalPrice" id = "total">$0.00</td>
        </tr>
    </table>
</div>
<button onclick="openCart()" class = "cart"><img class = "cartp" src="photos/pcart.png"></button>
</html>