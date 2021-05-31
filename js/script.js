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

