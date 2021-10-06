import Scrollbar from 'smooth-scrollbar';
Scrollbar.init(document.querySelector('#my-scrollbar'));

function scripts() {
    const serviceInfoHeader = document.querySelectorAll(".services__info-header h2");
    const serviceInfoText = document.querySelectorAll(".services__info-text p");
    const headerCircle = document.querySelector(".header__decor-circle img");
    const servicesButtons = document.querySelectorAll('.services .button');
    const cursor = document.querySelector(".cursor");
    const scrollingContent = document.querySelector('#my-scrollbar');
    const hoverEffectItems = document.querySelectorAll(".hover-effect");

    const scrollbar = Scrollbar.init($('#my-scrollbar')[0]);
    scrollbar.addListener(function (status) {

        for(let i = 0; i < serviceInfoHeader.length; i++) {
            if(serviceInfoHeader[i].getBoundingClientRect().y < (window.innerHeight / 1.5) ) {
                serviceInfoHeader[i].classList.add("fade-services");
                serviceInfoText[i].classList.add("fade-services");
                servicesButtons[i].style.opacity = '1';
            }
        }
        
        let theta = status.offset.y / 500 % Math.PI;
        if(headerCircle) headerCircle.style.transform = `rotate(-${theta}rad)`;
    })

    hoverEffectItems.forEach(e => e.addEventListener("mouseover", () => {
        cursor.classList.add("cursor-hover");
    }));
    
    hoverEffectItems.forEach(e => e.addEventListener("mouseout", () => {
        cursor.classList.remove("cursor-hover");
    }));

    scrollingContent.style.display = 'none';
    setTimeout(function() {
        scrollingContent.style.display = 'block'
    }, 100);
}

scripts();

const swup = new Swup();
swup.on('contentReplaced', scripts);

