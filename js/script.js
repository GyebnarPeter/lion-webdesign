// Cursor position
const cursor = document.querySelector(".cursor");
const editCursor = e => {
    const { clientX: x, clientY: y } = e;
    cursor.style.left = (x - 12) + "px";
    cursor.style.top = (y - 12) + "px";
};
window.addEventListener("mousemove", editCursor);

// Navigation
const navBtn = document.querySelector(".nav-btn");
const nav = document.querySelector(".nav");
const navList = document.querySelector(".nav__list");


let navListFade = () => {
    navList.classList.contains("navfade")
    ? navList.classList.remove("navfade")
    : navList.classList.add("navfade");
}

let navToggle = () => {
    nav.classList.contains("nav-toggle")
    ? nav.classList.remove("nav-toggle")
    : nav.classList.add("nav-toggle");
    setTimeout(navListFade, 1000);
}

navBtn.onclick = () => navToggle();

// Close the menu bar if click any link
const navLinks = document.querySelectorAll(".nav__link");
navLinks.forEach(link => link.onclick = () => navToggle() );

// Change the lion image if hover the mouse any link of nav
// Sadly with function not working form me, because the parcel image building
let navigationLion = document.querySelector("#nav-lion");

navLinks[0].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-0.png"))
navLinks[1].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-1.png"))
navLinks[2].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-2.png"))
navLinks[3].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-3.png"))
navLinks[4].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-4.png"))
navLinks[5].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-5.png"))
navLinks[6].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-6.png"))
navLinks[7].addEventListener("mouseover", () => navigationLion.src = require("../img/lion-7.png"))