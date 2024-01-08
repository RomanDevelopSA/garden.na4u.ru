'use strict'

let catalog = document.querySelector(".btn_catalog");
let menu = document.querySelector(".menu");
let backdrop = document.querySelector(".js-backdrop");
let search = document.querySelector(".main_search");
let header = document.querySelector(".header_desktop");


let classList = new Map();
classList
    .set(catalog, "js-catalog-close")
    .set(menu, "js-menu-visible")
    .set(backdrop, "js-backdrop-visible");

const toggleClass = () => {
    classList.forEach((value, key) => {
        key.classList.toggle(value);
        //console.log(value);
    });
}

function removeClass () {
    classList.forEach((value, key) => {
        key.classList.remove(value);
    });
}

document.body.addEventListener("resize", removeClass);
document.body.addEventListener("click", event => {
    
    if(event.target.className === "btn_catalog") {
        toggleClass();
        return false;
    }
    removeClass();
    
});



