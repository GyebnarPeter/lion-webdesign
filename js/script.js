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
navBtn.onclick = () => {
    console.log("klikk");
};