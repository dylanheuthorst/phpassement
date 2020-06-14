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

total = 0;

function addProductToCart(buttonID) {
    cart = document.getElementById("rightDiv");
    switch (buttonID) {
        case "ecs1":
            total = total+30;
            tr = document.getElementById("cart1")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p1.png' class='cartImage'></td><td class = 'cartPrice'>Ecstasy x5 - $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "ecs2":
            total = total+60;
            tr = document.getElementById("cart2")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p2.png' class='cartImage'></td><td class = 'cartPrice'>Ecstasy x10 - $60</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "ecs3":
            total = total+250;
            tr = document.getElementById("cart3")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p3.png' class='cartImage'></td><td class = 'cartPrice'>Ecstasy x50 - $250</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd1":
            total = total+30;
            tr = document.getElementById("cart4")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p4.png' class='cartImage'></td><td class = 'cartPrice'>LSD x5 - $30</td></tr>"
            pr2ceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd2":
            total = total+60;
            tr = document.getElementById("cart5")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p5.png' class='cartImage'></td><td class = 'cartPrice'>LSD x10 - $60</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd3":
            total = total+250;
            tr = document.getElementById("cart6")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p6.png' class='cartImage'></td><td class = 'cartPrice'>LSD x50 - $250</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan1":
            total = total+30;
            tr = document.getElementById("cart7")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p7.png' class='cartImage'></td><td class = 'cartPrice'>Xanax x5 - $30</td></tr>"
            pr2ceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan2":
            total = total+60;
            tr = document.getElementById("cart8")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p8.png' class='cartImage'></td><td class = 'cartPrice'>Xanax x10 - $60</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan3":
            total = total+250;
            tr = document.getElementById("cart9")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/p9.png' class='cartImage'></td><td class = 'cartPrice'>Xanax x50 - $250</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
    }
}

