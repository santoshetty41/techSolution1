var navbar = document.querySelector(".navbar");

window.addEventListener('scroll', () => {
    if (window.scrollY >= 600) {
        navbar.classList.add('navbar-scroll');
    }
    else {
        navbar.classList.remove('navbar-scroll');
    }
})