const btn = document.querySelector(".menu-toggle");
const links = document.querySelector(".navbar__menu");
const navbar = document.querySelector(".navbar");

btn.addEventListener("click", () => {
    btn.classList.toggle("is-active");
    navbar.classList.toggle("navbar-active");
    links.classList.toggle("active");
});
