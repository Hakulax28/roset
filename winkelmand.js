// index.js
/**
    Link JS met HTML elementen
*/
const VOEG_NOTITIES_TOE_KNOP = document.getElementById("voegNotitieToeKnop");
const NOTITIE_LIJST = document.getElementById("notitieLijst");

const DIALOOG = document.getElementById("bestelling");
const SLUIT_DIALOOG_KNOP = document.getElementById("sluitDialoogKnop");

const NOTITIE_TITEL = document.getElementById("notitieTitel");
const NOTITIE_CONTENT = document.getElementById("notitieContent");
const NOTITIE_OPSLAAN_KNOP = document.getElementById("notitieOpslaanKnop");

const NOTITIE_WEERGAVE_TITEL = document.getElementById("notitieWeergaveTitel");
const NOTITIE_WEERGAVE_CONTENT = document.getElementById("notitieWeergaveContent");

// Maak dialoog input velden leeg.
function leegInputVelden() {
    NOTITIE_TITEL.value = "";
    NOTITIE_CONTENT.value = "";
}

if(!localStorage.getItem("notities")){
   localStorage.setItem("notities", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
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
   let notitie = {
       titel: NOTITIE_TITEL.value,
       content: NOTITIE_CONTENT.value
   };

   console.log(localStorage.getItem("notities"));

   // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
   let huidigeOpslag = JSON.parse(localStorage.getItem("notities"));

   // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
   huidigeOpslag.push(notitie);

   // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
   localStorage.setItem("notities", JSON.stringify(huidigeOpslag));

   leegInputVelden();

   // Dialoog kan weer verstopt worden.
   DIALOOG.style.display = 'none';
});

NOTITIE_OPSLAAN_KNOP.addEventListener('click', () => {
   // Object aanmaken met de gegevens uit de velden.
   let notitie = {
       titel: NOTITIE_TITEL.value,
       content: NOTITIE_CONTENT.value
   };

   // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
   let huidigeOpslag = JSON.parse(localStorage.getItem("notities"));

   // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
   huidigeOpslag.push(notitie);

   // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
   localStorage.setItem("notities", JSON.stringify(huidigeOpslag));

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
   let notities = JSON.parse(localStorage.getItem("notities"));

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
 function openNotitie(index) {
   let notities = JSON.parse(localStorage.getItem("notities"));
   NOTITIE_WEERGAVE_TITEL.innerText = notities[index].titel;
   NOTITIE_WEERGAVE_CONTENT.innerText = notities[index].content;
}