const winkelmandProducten = document.getElementById("winkelmandProducten");

if (winkelmandProducten) {
    winkelwagen();
}

if (!localStorage.getItem("product")) {
    localStorage.setItem("product", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
}

function voegToeAanWinkelwagen(id, naam, price_per_kg) {
    let product = {
        id: id,
        naam: naam,
        prijs: price_per_kg,
    };

    let huidigeOpslag = JSON.parse(localStorage.getItem("product"));

    huidigeOpslag.push(product);

    localStorage.setItem("product", JSON.stringify(huidigeOpslag));

    console.log(huidigeOpslag);
}

function winkelwagen() {
    let products = JSON.parse(localStorage.getItem("product"));

    for (let i = 0; i < products.length; i++) {
        winkelmandProduct.innerHTML +=
        "<p>" + products[i].naam + " " + products[i].prijs + "</p>" + "<input type='hidden' name='id[]' value=" + products[i].id + ">" +
        "</form>";
        console.log(products[i]);
    }
}