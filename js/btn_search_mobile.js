'use strict'

let searchBtn = document.querySelector(".js-search-show");
let searchWrap = document.querySelector(".search-wrap");
let searchClose = document.querySelector(".js-search-close");

searchBtn.addEventListener("click",()=>searchWrap.classList.add("js-search-visible"));
searchClose.addEventListener("click",()=>searchWrap.classList.remove("js-search-visible"));
