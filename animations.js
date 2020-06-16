function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function openCart() {
    document.getElementById("cartnav").style.width = "250px";
}

function closeCart() {
    document.getElementById("cartnav").style.width = "0";
}
var i = 0;
var images = [];
var time = 3000;

images[0] = 'photos/slide2.png';
images[1] = 'photos/slideshow.png';
images[2] = 'photos/rabbit.png';

function changeImg(){
    document.slide.src = images[i];
    if (i < images.length - 1){
        i++;
    }
    else{
        i = 0;
    }
    setTimeout("changeImg()", time);
}

window.onload = changeImg;

total = 0;
p1 = 0;
p2 = 0;
p3 = 0;
p4 = 0;
p5 = 0;
p6 = 0;
p7 = 0;
p8 = 0;
p9 = 0;
function addProductToCart(buttonID) {
    cart = document.getElementById("rightDiv");
    switch (buttonID) {
        case "ecs1":
            total = total+30;
            p1 = p1+1;
            tr = document.getElementById("cart1");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp1.png' class='cartImage'></td><td class = 'cartPrice' id = 'c1'></td></tr>";
            priceupdate = document.getElementById("total");
            pan = document.getElementById("c1");
            pan.innerHTML = "$"+p1*30+" Pedigree x"+p1;
            priceupdate.innerHTML = "$" + total;
            console.log(tr);
            break;
        case "ecs2":
            total = total+30;
            p2 = p2+1;
            tr = document.getElementById("cart2");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp2.png' class='cartImage'></td><td class = 'cartPrice' id = 'c2'></td></tr>";
            u = document.getElementById("c2");
            u.innerHTML = "$"+p2*30+" Hills x"+p2;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "ecs3":
            total = total+30;
            p3 = p3+1;
            tr = document.getElementById("cart3");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp3.png' class='cartImage'></td><td class = 'cartPrice' id = 'c3'>/td></tr>";
            u = document.getElementById("c3");
            u.innerHTML = "$"+p3*30+" Hills x"+p3;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd1":
            total = total+30;
            p4 = p4+1;
            tr = document.getElementById("cart4");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp4.png' class='cartImage'></td><td class = 'cartPrice' id = 'c4'></td></tr>";
            u = document.getElementById("c4");
            u.innerHTML = "$"+p4*30+" Eukanuba x"+p4;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd2":
            total = total+30;
            p5 = p5+1;
            tr = document.getElementById("cart5");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp5.png' class='cartImage'></td><td class = 'cartPrice' id = 'c5'></td></tr>";
            u = document.getElementById("c5");
            u.innerHTML = "$"+p5*30+" Black Hawk x"+p5;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd3":
            total = total+30;
            p6 = p6+1;
            tr = document.getElementById("cart6");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp6.png' class='cartImage'></td><td class = 'cartPrice' id = 'c6'></td></tr>";
            u = document.getElementById("c6");
            u.innerHTML = "$"+p6*30+" Royal Canin x"+p6;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan1":
            total = total+30;
            p7=p7+1;
            tr = document.getElementById("cart7");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp7.png' class='cartImage'></td><td class = 'cartPrice' id = 'c7'></td></tr>";
            u = document.getElementById("c7");
            u.innerHTML = "$"+p7*30+" Pedigree x"+p7;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan2":
            total = total+30;
            p8=p8+1;
            tr = document.getElementById("cart8");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp8.png' class='cartImage'></td><td class = 'cartPrice' id = 'c8'></td></tr>";
            u = document.getElementById("c8");
            u.innerHTML = "$"+p8*30+" Purina x"+p8;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan3":
            p9=p9+1;
            total = total+30;
            tr = document.getElementById("cart9");
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp9.png' class='cartImage'></td><td class = 'cartPrice' id = 'c9'></td></tr>";
            u = document.getElementById("c9");
            u.innerHTML = "$"+p9*30+" K9 Natural x"+p9;
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
    }
}

