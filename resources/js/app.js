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
    // Höhe des gescrollten Bereichs
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Winkel der Drehung, z.B. 0.1 Grad pro Pixel
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
    console.log(fadeInElements);

    const checkVisibility = () => {
        fadeInElements.forEach((fadeInElement) => {
            const rect = fadeInElement.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;
            console.log(rect.top, windowHeight, rect.bottom);
            // Überprüfen, ob das Element in den Sichtbereich gescrollt wurde
            if (rect.top <= windowHeight && rect.bottom >= 0) {
                console.log('Element ist sichtbar');
                //fadeInElement.classList.remove('opacity-0'); // Klasse entfernen
                fadeInElement.classList.add('fade-in');
                // fadeInElement.classList.add('opacity-1'); // Animation hinzufügen
            }
        });
    };

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Initiale Überprüfung, falls das Element bereits sichtbar ist
});

document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll('.zoom-image');
    const body = document.querySelector('body');
    const texts = document.querySelectorAll('.zoom-text');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Prüfen, ob das aktuelle Element ein Bild oder ein Text ist und die jeweilige Klasse anwenden
                    if (entry.target.classList.contains('zoom-image')) {
                        entry.target.classList.add('zoomed'); // Bild vergrößern
                    } else if (entry.target.classList.contains('zoom-text')) {
                        entry.target.classList.add('text-zoomed'); // Text vergrößern oder formatieren
                    }
                    body.classList.add('dark-bg');
                } else {
                    // Entferne die jeweilige Klasse beim Verlassen des sichtbaren Bereichs
                    if (entry.target.classList.contains('zoom-image')) {
                        entry.target.classList.remove('zoomed');
                    } else if (entry.target.classList.contains('zoom-text')) {
                        entry.target.classList.remove('text-zoomed');
                    }
                    body.classList.remove('dark-bg');
                }
            });
        },
        { threshold: 0.5 } // 50% des Elements müssen sichtbar sein, um den Effekt auszulösen
    );

    // Jedes Bild- und Textelement einzeln beobachten
    images.forEach(image => observer.observe(image));
    texts.forEach(text => observer.observe(text));
});
