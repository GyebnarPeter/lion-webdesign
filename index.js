import Scrollbar from 'smooth-scrollbar';
Scrollbar.init(document.querySelector('#my-scrollbar'));

// Home page scroll animations scripts
function mainPageScrollEffects() {
    if (document.querySelector('.header')) {

        const serviceInfoHeader = document.querySelectorAll(".services__info-header h2");
        const serviceInfoText = document.querySelectorAll(".services__info-text p");
        const headerCircle = document.querySelector(".header__decor-circle img");
        const servicesButtons = document.querySelectorAll('.services .button');

        const scrollbar = Scrollbar.init($('#my-scrollbar')[0]);
        scrollbar.addListener(function (status) {

            function serviceFadeEffect() {
                for(let i = 0; i < serviceInfoHeader.length; i++) {
                    if(serviceInfoHeader[i].getBoundingClientRect().y < (window.innerHeight / 1.5) ) {
                        serviceInfoHeader[i].classList.add("fade-services");
                        serviceInfoText[i].classList.add("fade-services");
                        servicesButtons[i].style.opacity = '1';
                    }
                }
            }

            serviceFadeEffect();

            // Header circle rotation
            let theta = status.offset.y / 500 % Math.PI;
            if(headerCircle) headerCircle.style.transform = `rotate(-${theta}rad)`;
        })
    }
}
mainPageScrollEffects();


// Cursor hover effect
const cursor = document.querySelector(".cursor");
function cursorHover() {
    if (document.querySelector('.nav')) {
        const hoverEffectItems = document.querySelectorAll(".hover-effect");
        
        hoverEffectItems.forEach(e => e.addEventListener("mouseover", () => {
            cursor.classList.add("cursor-hover");
        }));
        
        hoverEffectItems.forEach(e => e.addEventListener("mouseout", () => {
            cursor.classList.remove("cursor-hover");
        }));
    }
}
cursorHover();


// Reload the actual page, because the swup not scrolling the content to the top, when switching the page
// The swup own build-in function is not workink for me
const scrollingContent = document.querySelector('#my-scrollbar');
function reloadPage() {
    scrollingContent.style.display = 'none';
    setTimeout(function() {
        scrollingContent.style.display = 'block'
    }, 100);
}
reloadPage();

const swup = new Swup();
swup.on('contentReplaced', mainPageScrollEffects);
swup.on('contentReplaced', cursorHover);
swup.on('contentReplaced', reloadPage);

