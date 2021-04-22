// Cursor position
const cursor = document.querySelector(".cursor");
const editCursor = e => {
    const { clientX: x, clientY: y } = e;
    cursor.style.left = (x - 12) + "px";
    cursor.style.top = (y - 12) + "px";
};
window.addEventListener("mousemove", editCursor);

// Cursor hover effect
const hoverEffectItems = document.querySelectorAll(".hover-effect");

hoverEffectItems.forEach(e => e.addEventListener("mouseover", () => {
    cursor.classList.add("cursor-hover");
}));

hoverEffectItems.forEach(e => e.addEventListener("mouseout", () => {
    cursor.classList.remove("cursor-hover");
}));


// Navigation
const navBtn = document.querySelector(".nav-btn");
const nav = document.querySelector(".nav");
const navList = document.querySelector(".nav__list");

navBtn.onclick = () => {
    nav.classList.contains("nav-toggle")
        ? nav.classList.remove("nav-toggle")
        : nav.classList.add("nav-toggle");
        
    setTimeout(navListFade, 1000);
}

let navListFade = () => {
    navList.classList.contains("navfade")
        ? navList.classList.remove("navfade")
        : navList.classList.add("navfade");
}

// Scroll effect
//window.onscroll = function() {
//    document.querySelector(".header__decor-circle").style.transform = "rotate(-360deg)";
//};