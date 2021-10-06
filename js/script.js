// Cursor position
const cursor = document.querySelector(".cursor");
const editCursor = e => {
    const { clientX: x, clientY: y } = e;
    cursor.style.left = (x - 5) + "px";
    cursor.style.top = (y - 5) + "px";
};
window.addEventListener("mousemove", editCursor);

// Navigation
const navBtn = document.querySelector(".nav-btn");
const nav = document.querySelector(".nav");
const navList = document.querySelector(".nav__container-left-column");
const navLion = document.querySelector(".nav__container-right-column");


let navListFade = () => {
    navList.classList.contains("navfade")
        ? navList.classList.remove("navfade")
        : navList.classList.add("navfade");
}

let navLionFade = () => {
    navLion.classList.contains("navfade")
        ? navLion.classList.remove("navfade")
        : navLion.classList.add("navfade");
}

let navToggle = () => {
    nav.classList.contains("nav-toggle")
        ? nav.classList.remove("nav-toggle")
        : nav.classList.add("nav-toggle");
    setTimeout(navListFade, 1000);
    setTimeout(navLionFade, 2000);
}

navBtn.onclick = () => {
    navToggle();
    navBtn.classList.contains("nav-btn-animation")
        ? navBtn.classList.remove("nav-btn-animation")
        : navBtn.classList.add("nav-btn-animation");
};

// Close the menu bar if click any link
const navLinks = document.querySelectorAll(".nav__link");
navLinks.forEach( link => {
    link.onclick = () => {
        navToggle();
        navBtn.classList.contains("nav-btn-animation")
            ? navBtn.classList.remove("nav-btn-animation")
            : navBtn.classList.add("nav-btn-animation");
    } 
});

// Change the lion image if hover the mouse any link of nav
// Sadly with function not working form me, because the parcel image building
let navigationLion = document.querySelector("#nav-lion");

navLinks[0].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-0.webp"))
navLinks[1].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-1.webp"))
navLinks[2].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-2.webp"))
navLinks[3].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-3.webp"))
navLinks[4].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-4.webp"))
navLinks[5].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-5.webp"))
navLinks[6].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-6.webp"))
navLinks[7].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-7.webp"))