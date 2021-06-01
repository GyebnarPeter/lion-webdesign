import Scrollbar from 'smooth-scrollbar';
Scrollbar.init(document.querySelector('#my-scrollbar'));

// Home page scroll animations scripts
function mainPageScrollEffects() {
    if (document.querySelector('.services')) {

        const serviceInfoHeader = document.querySelectorAll(".services__info-header h2");
        const serviceInfoText = document.querySelectorAll(".services__info-text p");
        const headerCircle = document.querySelector(".header__decor-circle img");

        const scrollbar = Scrollbar.init($('#my-scrollbar')[0]);
        scrollbar.addListener(function (status) {

            function serviceFadeEffect(division) {
                for(let i = 0; i < serviceInfoHeader.length; i++) {
                    if(status.offset.y > serviceInfoHeader[i].offsetTop + ($(window).height() / division )) {
                        serviceInfoHeader[i].classList.add("fade-services");
                        serviceInfoText[i].classList.add("fade-services");
                    }
                }
            }

            // Header circle rotation
            let theta = status.offset.y / 500 % Math.PI;
            headerCircle.style.transform = `rotate(-${theta}rad)`;

            // Services fade effect
            if(window.innerWidth < 768) {
                serviceFadeEffect(0.6);
            }
            if(window.innerWidth > 768) {
                serviceFadeEffect(2);
            }
        })
    }
}
mainPageScrollEffects();

const swup = new Swup();

swup.on('contentReplaced', mainPageScrollEffects);


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
swup.on('contentReplaced', cursorHover);


// Reload the actual page, because the swup not scrolling the content to the top, when switching the page
const scrollingContent = document.querySelector('#my-scrollbar');
function reloadPage() {
    scrollingContent.style.display = 'none';
    setTimeout(function() {
        scrollingContent.style.display = 'block'
    }, 100);
}
reloadPage();
swup.on('contentReplaced', reloadPage);