// Functie voor het responisve menu

function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.classList.toggle("show");
}

// Functie voor dropdown 

var dropdown = document.getElementById("dropdown");

function dropDown() {
    dropdown.classList.toggle("display");
}

function dontShow() {
    dropdown.classList.remove("display");
}