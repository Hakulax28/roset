// index.js
/**
    Link JS met HTML elementen
*/
const VOEG_NOTITIES_TOE_KNOP = document.getElementById("voegBestelingToeKnop");
const NOTITIE_LIJST = document.getElementById("BestelingLijst");

const DIALOOG = document.getElementById("winkelmand");
const SLUIT_DIALOOG_KNOP = document.getElementById("sluitWinkelmandKnop");

const NOTITIE_TITEL = document.getElementById("BestelingTitel");
const NOTITIE_CONTENT = document.getElementById("BestelingContent");
const NOTITIE_OPSLAAN_KNOP = document.getElementById("BestelingOpslaanKnop");

const NOTITIE_WEERGAVE_TITEL = document.getElementById("BestelingWeergaveTitel");
const NOTITIE_WEERGAVE_CONTENT = document.getElementById("BestelingWeergaveContent");

// Maak dialoog input velden leeg.
function leegInputVelden() {
    NOTITIE_TITEL.value = "";
    NOTITIE_CONTENT.value = "";
}

if(!localStorage.getItem("products")){
   localStorage.setItem("products", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
}

VOEG_NOTITIES_TOE_KNOP.addEventListener('click', () => {
   DIALOOG.style.display = 'block';
});

SLUIT_DIALOOG_KNOP.addEventListener('click', () => {
   DIALOOG.style.display = 'none';
   leegInputVelden();
});

NOTITIE_OPSLAAN_KNOP.addEventListener('click', () => {
   // Object aanmaken met de gegevens uit de velden.
   let products = {
       titel: NOTITIE_TITEL.value,
       content: NOTITIE_CONTENT.value
   };

   console.log(localStorage.getItem("products"));

   // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
   let huidigeOpslag = JSON.parse(localStorage.getItem("products"));

   // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
   huidigeOpslag.push(notitie);

   // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
   localStorage.setItem("products", JSON.stringify(huidigeOpslag));

   leegInputVelden();

   // Dialoog kan weer verstopt worden.
   DIALOOG.style.display = 'none';
});

NOTITIE_OPSLAAN_KNOP.addEventListener('click', () => {
   // Object aanmaken met de gegevens uit de velden.
   let products = {
       titel: NOTITIE_TITEL.value,
       content: NOTITIE_CONTENT.value
   };

   // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
   let huidigeOpslag = JSON.parse(localStorage.getItem("products"));

   // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
   huidigeOpslag.push(notitie);

   // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
   localStorage.setItem("products", JSON.stringify(huidigeOpslag));

   leegInputVelden();

   haalNotitiesOp(); // Haal alle notities opnieuw (Zodat de nieuwe notitie komt te staan)

   // Dialoog kan weer verstopt worden.
   DIALOOG.style.display = 'none';
});

/**
 * Haal alle notities op die in je localStorage staan.
 */
 function haalNotitiesOp() {
   // Maak notitie lijst leeg.
   NOTITIE_LIJST.innerHTML = "";

   // Pak de notities lijst die nog in string fromaat is en zet on in leesbaar JSON formaat.
   let notities = JSON.parse(localStorage.getItem("products"));

   // Elke opgeslagen notitie pakken en in de HTML zetten.
   // onClick functie koppelen met de index van "i" zodat de functie kan indentificeren 
   // welk notitie uit de lijst is geklikt door de gebruiker.
   for (let i = 0; i < notities.length; i++) {
       NOTITIE_LIJST.innerHTML += "<h6 onClick='openNotitie(" + i + ")'>" + notities[i].titel + "</h6>";
   }
}

haalNotitiesOp();

/**
 * Open de notitie bij index die in localStorage zit.
 * @param {Number} index 
 */
 function openProduct(index) {
   let products = JSON.parse(localStorage.getItem("products"));
   NOTITIE_WEERGAVE_TITEL.innerText = products[index].titel;
   NOTITIE_WEERGAVE_CONTENT.innerText = products[index].content;
}