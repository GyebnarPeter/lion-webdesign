// Cursor
const cursor = document.querySelector(".cursor");
(function() {
    const editCursor = e => {
        const { clientX: x, clientY: y } = e;
        cursor.style.left = (x - 12) + "px";
        cursor.style.top = (y - 12) + "px";
    };

    window.addEventListener("mousemove", editCursor);
})();