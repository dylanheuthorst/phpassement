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
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp1.png' class='cartImage'></td><td class = 'cartPrice'>Pedigree $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "ecs2":
            total = total+30;
            tr = document.getElementById("cart2")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp2.png' class='cartImage'></td><td class = 'cartPrice'>Hills $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "ecs3":
            total = total+30;
            tr = document.getElementById("cart3")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp3.png' class='cartImage'></td><td class = 'cartPrice'>Hills $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd1":
            total = total+30;
            tr = document.getElementById("cart4")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp4.png' class='cartImage'></td><td class = 'cartPrice'>Eukanuba $30</td></tr>"
            pr2ceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd2":
            total = total+30;
            tr = document.getElementById("cart5")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp5.png' class='cartImage'></td><td class = 'cartPrice'>Black Hawk $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "lsd3":
            total = total+30;
            tr = document.getElementById("cart6")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp6.png' class='cartImage'></td><td class = 'cartPrice'>Royal Canin $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan1":
            total = total+30;
            tr = document.getElementById("cart7")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp7.png' class='cartImage'></td><td class = 'cartPrice'>Pedigree $30</td></tr>"
            pr2ceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan2":
            total = total+30;
            tr = document.getElementById("cart8")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp8.png' class='cartImage'></td><td class = 'cartPrice'>Purina $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
        case "xan3":
            total = total+30;
            tr = document.getElementById("cart9")
            tr.innerHTML = "<tr class = 'cartRow'><td class = 'cartImg'><img src = 'photos/pp9.png' class='cartImage'></td><td class = 'cartPrice'>K9 Natural $30</td></tr>"
            priceupdate = document.getElementById("total");
            priceupdate.innerHTML = "$"+total;
            console.log(tr);
            break;
    }
}

