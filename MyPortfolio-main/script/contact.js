document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav ul li a');
    const contactSection = document.getElementById('contact');
    const inputs = document.querySelectorAll('input[placeholder], textarea[placeholder]');
    let placeholdersAnimated = false;

    window.addEventListener('scroll', () => {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active');
            }
        });

        // Détecter quand la section de contact devient visible
        const contactTop = contactSection.offsetTop;
        const contactHeight = contactSection.clientHeight;
        if (pageYOffset >= contactTop - contactHeight / 3 && !placeholdersAnimated) {
            placeholdersAnimated = true;
            inputs.forEach(input => {
                typeEffect(input, 100); // Ajustez la vitesse ici (100ms par caractère)
            });
        }
    });

    // Animation de saisie manuelle pour les placeholders
    function typeEffect(element, speed) {
        const text = element.getAttribute('placeholder');
        element.setAttribute('placeholder', '');
        let i = 0;
        const timer = setInterval(function() {
            if (i < text.length) {
                element.setAttribute('placeholder', element.getAttribute('placeholder') + text.charAt(i));
                i++;
            } else {
                clearInterval(timer);
            }
        }, speed);
    }
});