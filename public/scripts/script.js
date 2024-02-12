// MENU

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
  "#desktop_about_link": { target: ".about", duration: 50 },
  "#desktop_mission_link": { target: ".mission", duration: 50 },
  "#desktop_cooperation_link": { target: ".cooperation-stages", duration: 50 },
  "#desktop_faq_link": { target: ".faq", duration: 50 },
  "#desktop_contact_link": { target: ".contact-section", duration: 50 },
  "#mobile_about_link": { target: ".about", duration: 30 },
  "#mobile_mission_link": { target: ".mission", duration: 30 },
  "#mobile_cooperation_link": { target: ".cooperation-stages", duration: 30 },
  "#mobile_faq_link": { target: ".faq", duration: 30 },
  "#mobile_contact_link": { target: ".contact-section", duration: 30 },
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

// MENU SCROLL EFFECT

const stickyNavbar = document.querySelector(".desktop-menu");

document.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    stickyNavbar.classList.add("scroll");
  } else {
    stickyNavbar.classList.remove("scroll");
  }
});

// COLLAPSIBLE CONTENT TRIGGER

const questions = document.querySelectorAll(".question");

function toggleAnswer(e) {
  const answer = e.target.nextElementSibling;

  answer.classList.toggle("hidden");

  e.target.classList.toggle(
    "hide-collapsible",
    !answer.classList.contains("hidden")
  );
}

questions.forEach(function (question) {
  question.addEventListener("click", toggleAnswer);
});

// SCROLL TO TOP BTN

const scrollToTopBtn = document.querySelector("#scrollToTopBtn");

document.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    scrollToTopBtn.style.opacity = "1";
  } else {
    scrollToTopBtn.style.opacity = "0";
  }
});

function scrollToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
