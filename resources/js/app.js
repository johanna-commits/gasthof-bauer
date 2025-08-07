import 'flowbite';
import 'photoswipe';
import PhotoSwipeLightbox from 'photoswipe/lightbox';

document.addEventListener("DOMContentLoaded", function() {
    console.log('DOM geladen');
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#roomgallery',
        children: 'a',
        secondaryZoomLevel: 1,
        maxZoomLevel: 2,
        pswpModule: () => import('photoswipe')
    });

    lightbox.init();

});

import {
    Collapse,
    Dropdown,
    initTWE,
} from "tw-elements";

// Initialize the components
initTWE({ Collapse, Dropdown });

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let rotationAngle = scrollTop * 0.1;

    // Das Bild auswählen und die Drehung anwenden
    let kastanienImageTop = document.getElementById('kastanien-image-top');
    let kastanienImageBottom = document.getElementById('kastanien-image-bottom');
    let kastanienImageMiddle = document.getElementById('kastanien-image-middle');
    kastanienImageTop.style.transform = 'rotate(' + rotationAngle + 'deg)';
    kastanienImageBottom.style.transform = 'rotate(' + rotationAngle + 'deg)';
    kastanienImageMiddle.style.transform = 'rotate(' + rotationAngle + 'deg)';
});

document.addEventListener("DOMContentLoaded", function() {
    const fadeInElements = document.querySelectorAll('.fading-in');

    const checkVisibility = () => {
        fadeInElements.forEach((fadeInElement) => {
            const rect = fadeInElement.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;
            console.log(rect.top, windowHeight, rect.bottom);
            if (rect.top <= windowHeight && rect.bottom >= 0) {
                fadeInElement.classList.add('fade-in');
            }
        });
    };

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Initiale Überprüfung, falls das Element bereits sichtbar ist
});
window.addEventListener('resize', () => {
    location.reload(); // Seite neu laden bei Größenwechsel
});
document.addEventListener("DOMContentLoaded", function () {
    // Nur aktivieren, wenn Bildschirm mindestens lg (1024px) ist
    if (window.matchMedia('(min-width: 1024px)').matches) {
        const images = document.querySelectorAll('.zoom-image');
        const body = document.querySelector('body');
        const texts = document.querySelectorAll('.zoom-text');

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.classList.contains('zoom-image')) {
                            entry.target.classList.add('zoomed');
                        } else if (entry.target.classList.contains('zoom-text')) {
                            entry.target.classList.add('text-zoomed');
                        }
                        body.classList.add('dark-bg');
                    } else {
                        if (entry.target.classList.contains('zoom-image')) {
                            entry.target.classList.remove('zoomed');
                        } else if (entry.target.classList.contains('zoom-text')) {
                            entry.target.classList.remove('text-zoomed');
                        }
                        body.classList.remove('dark-bg');
                    }
                });
            },
            { threshold: 0.5 }
        );

        images.forEach(image => observer.observe(image));
        texts.forEach(text => observer.observe(text));
    }
});
