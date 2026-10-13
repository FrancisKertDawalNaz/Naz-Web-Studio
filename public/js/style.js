const header = document.getElementById("fkHeader");
const links = document.querySelectorAll(".fk-nav__link");
const sections = [...links]
    .map((l) => document.querySelector(l.getAttribute("href")))
    .filter(Boolean);

function onScroll() {
    header.classList.toggle("fk-header--scrolled", window.scrollY > 20);

    let current = sections[0];
    sections.forEach((sec) => {
        if (window.scrollY + 120 >= sec.offsetTop) current = sec;
    });

    links.forEach((l) => {
        l.classList.toggle(
            "fk-nav__link--active",
            l.getAttribute("href") === "#" + current.id,
        );
    });
}

window.addEventListener("scroll", onScroll);
onScroll();
