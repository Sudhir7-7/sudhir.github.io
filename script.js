// Hamburger toggle
document.getElementById("hamburger").addEventListener("click", () => {
    const menu = document.getElementById("mobileMenu");
    menu.classList.toggle("hidden");
});

// Dark Mode toggle
document.getElementById("darkToggle").addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");
});

// Scrollspy
const navLinks = document.querySelectorAll(".nav-link");
const sections = document.querySelectorAll("section");

window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 80) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("text-indigo-400");
        if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("text-indigo-400");
        }
    });
});