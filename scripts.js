"use strict";
// @ts-check

// TOGGLE MENU
let menu = document.getElementById("menu-mobile");
menu.addEventListener("click", toggleMenu);

let menuList = document.getElementById("menu-list");

function toggleMenu() {
    menuList.classList.toggle("menu-list-on");
}

/* HIDE ON SCROLLDOWN */
var prevScrollpos = window.pageYOffset;

window.onscroll = function() {

    var currentScrollPos = window.pageYOffset;

    if (currentScrollPos > 0) {
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("menu-button").style.top = "0";
        } else {
            document.getElementById("menu-button").style.top = "-10em";
        }
    }

    prevScrollpos = currentScrollPos;

}

// SLIDER SCRIPT
let slides = document.getElementsByClassName('slide');
let dots = document.getElementsByClassName('dot');
let leftArrow = document.getElementsByClassName('left')[0];
let rightArrow = document.getElementsByClassName('right')[0];

var current = 0
setSlide(0);

for (let i = 0; i < 4; i++) {
    const dot = dots[i];
    dot.setAttribute("href", `#slide-${i}`);
    dot.addEventListener("click", function() {
        setSlide(i);
    });
}

rightArrow.addEventListener("click", plusSlide);
leftArrow.addEventListener("click", minusSlide);

function plusSlide() {
    current += 1;
    setSlide(current);
}

function minusSlide() {
    current -= 1;
    setSlide(current);
}

function setSlide(n) {
    current = n;
    if (n > 3) { current = 0 }
    if (n < 0) { current = 3 }

    for (const dot of dots) {
        dot.classList.remove("active-dot");
    };
    dots[current].classList.add("active-dot");

    leftArrow.setAttribute("href", `#slide-${(current - 1) < 0 ? 3 : (current - 1)}`);
    rightArrow.setAttribute("href", `#slide-${(current + 1) > 3  ? 0 : (current + 1)}`);
}
