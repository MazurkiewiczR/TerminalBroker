const hamburgerMenu = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");

document.addEventListener("DOMContentLoaded", function () {
  hamburgerMenu.addEventListener("click", function () {
    hamburgerMenu.classList.toggle("active");
    mobileMenu.classList.toggle("active");

    document.body.classList.toggle("no-scroll");
  });
});

const scrollTargets = {
  /*   "#fun_fact_link_desktop": { target: "#fun_facts", duration: 10 },
  "#": { target: "#", duration: 20 },
  "#": { target: "#", duration: 10 },
  "#": { target: "#", duration: 10 },
  "#": { target: "#", duration: 20 },
  "#": { target: "#", duration: 10 }, */
};

for (const [selector, { target, duration }] of Object.entries(scrollTargets)) {
  document.querySelector(selector).addEventListener("click", function () {
    checkForClasses(),
      setTimeout(function () {
        scrollToSection(target, duration);
      }, 100);
  });
}

function checkForClasses() {
  if (
    hamburgerMenu.classList.contains("active") &&
    mobileMenu.classList.contains("active") &&
    document.body.classList.contains("no-scroll")
  ) {
    hamburgerMenu.classList.remove("active");
    mobileMenu.classList.remove("active");
    document.body.classList.remove("no-scroll");
  } else {
    return;
  }
}

function scrollToSection(sectionId, distance) {
  const section = document.querySelector(sectionId);
  if (section) {
    let sectionPosition =
      section.getBoundingClientRect().top + window.pageYOffset - distance;
    let space = sectionPosition - distance;
    window.scrollTo({
      top: space,
      behavior: "smooth",
    });
  }
}
