<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . "/../src/Service/XLSXService.php";


if(!empty($_POST['newsletter_mail']) && $_POST['newsletter_mail'] != ""){
  (new XLSXService)->updateExcel($_POST['newsletter_mail']);
}
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terminal Broker</title>
    <meta
      name="description"
      content="Terminal broker pomaga przedsiębiorcom i ich firmom w znalezieniu i wynegocjowaniu najlepszych w obszarze użytkowania terminali płatniczych."
    />
    <link rel="icon" href="./assets/images/logo.png" />
    <link rel="stylesheet" href="./assets/style.css" />
    <script
      src="https://kit.fontawesome.com/c60739807b.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css"
    />
  </head>

  <body>
    <header>
      <div class="desktop-menu menu">
        <a href="#" class="logo">
          <img
            src="./assets/images/logo.png"
            alt="Terminal Broker Logo"
            width="40"
            height="40"
            loading="lazy"
          />
        </a>
        <nav>
          <ul>
            <li>
              <p id="desktop_about_link">O nas</p>
            </li>
            <li>
              <p id="desktop_mission_link">Misja</p>
            </li>
            <li>
              <p id="desktop_cooperation_link">Współpraca</p>
            </li>
            <li>
              <p id="desktop_faq_link">FAQ</p>
            </li>
            <li>
              <p id="desktop_contact_link">Kontakt</p>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <section id="hero" class="hero-section">
        <div class="hamburger-wrapper">
          <div class="logo">
            <img
              src="./assets/images/logo.png"
              alt="Terminal Broker Logo"
              width="40"
              height="40"
              loading="lazy"
            />
          </div>
          <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>

        <div class="mobile-menu menu">
          <nav>
            <div class="menu-logo-container">
              <img
                src="./assets/images/logo.png"
                alt="Terminal Broker Logo"
                width="40"
                height="40"
                loading="lazy"
              />
            </div>
            <ul>
              <li>
                <p id="mobile_about_link">O nas</p>
              </li>
              <li>
                <p id="mobile_mission_link">Misja</p>
              </li>
              <li>
                <p id="mobile_cooperation_link">Współpraca</p>
              </li>
              <li>
                <p id="mobile_faq_link">FAQ</p>
              </li>
              <li>
                <p id="mobile_contact_link">Kontakt</p>
              </li>
            </ul>
          </nav>
        </div>

        <div class="hero-container">
          <div class="hero-text-container">
            <h1>Terminal Broker</h1>
            <div class="spacer"></div>
            <p>Jesteśmy pierwsi, jedyni i najlepsi!</p>
            <p>
              Pomagamy naszym klientom w znajdowaniu oszczędności czasu i
              pieniędzy.
            </p>
          </div>
        </div>
        <div class="wave">
          <svg
            id="wave"
            style="transform: rotate(0deg); transition: 0.3s"
            viewBox="0 0 1440 110"
            version="1.1"
            xmlns="http://www.w3.org/2000/svg"
          >
            <defs>
              <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(248, 248, 248, 1)" offset="0%"></stop>
                <stop stop-color="rgba(248, 248, 248, 1)" offset="100%"></stop>
              </linearGradient>
            </defs>
            <path
              fill="url(#sw-gradient-0)"
              d="M0,66L48,56.8C96,48,192,29,288,23.8C384,18,480,26,576,36.7C672,48,768,62,864,69.7C960,77,1056,77,1152,69.7C1248,62,1344,48,1440,40.3C1536,33,1632,33,1728,29.3C1824,26,1920,18,2016,14.7C2112,11,2208,11,2304,18.3C2400,26,2496,40,2592,51.3C2688,62,2784,70,2880,71.5C2976,73,3072,70,3168,56.8C3264,44,3360,22,3456,11C3552,0,3648,0,3744,14.7C3840,29,3936,59,4032,69.7C4128,81,4224,73,4320,73.3C4416,73,4512,81,4608,69.7C4704,59,4800,29,4896,31.2C4992,33,5088,66,5184,71.5C5280,77,5376,55,5472,53.2C5568,51,5664,70,5760,80.7C5856,92,5952,95,6048,82.5C6144,70,6240,40,6336,36.7C6432,33,6528,55,6624,53.2C6720,51,6816,26,6864,12.8L6912,0L6912,110L6864,110C6816,110,6720,110,6624,110C6528,110,6432,110,6336,110C6240,110,6144,110,6048,110C5952,110,5856,110,5760,110C5664,110,5568,110,5472,110C5376,110,5280,110,5184,110C5088,110,4992,110,4896,110C4800,110,4704,110,4608,110C4512,110,4416,110,4320,110C4224,110,4128,110,4032,110C3936,110,3840,110,3744,110C3648,110,3552,110,3456,110C3360,110,3264,110,3168,110C3072,110,2976,110,2880,110C2784,110,2688,110,2592,110C2496,110,2400,110,2304,110C2208,110,2112,110,2016,110C1920,110,1824,110,1728,110C1632,110,1536,110,1440,110C1344,110,1248,110,1152,110C1056,110,960,110,864,110C768,110,672,110,576,110C480,110,384,110,288,110C192,110,96,110,48,110L0,110Z"
            ></path>
          </svg>
        </div>
      </section>

      <section id="about" class="about container">
        <h2 class="section-title">O nas</h2>
        <p class="section-details details-underline text-justify">
          <span>
            <strong>Jesteśmy pionierami rynku!</strong> Jesteśmy pierwsi,
            wyjątkowi i jedyni, którzy pomagają przedsiębiorcom i ich firmom w
            znalezieniu oraz wynegocjowaniu najlepszych warunków (nie tylko
            finansowych) w obszarze użytkowania terminali oraz bramek
            płatniczych.
          </span>
          <br />
          <span>
            <strong>Nasze usługi są w najwyższym stopniu profesjonalne.</strong>
            Gwarantem tego jest między innymi zespół, który tworzą ludzie z
            doświadczeniem w branży.
          </span>
          <br />
          <span>
            Jesteśmy z naszymi Klientami począwszy od sprawnego zdefiniowania i
            opracowania ich potrzeb, poprzez zebranie i negocjowanie ofert z
            rynku, poprzez sporządzenie profesjonalnego raportu zawierającego
            nasze rekomendacje. Na koniec oferujemy naszym Klientom pomoc w
            zawarciu umowy na użytkowanie terminala płatniczego bądź bramki
            płatniczej oraz wsparcie już w trakcie jej trwania.
          </span>
          <br />
          <span>
            My wiemy, że dla przedsiębiorców użytkowanie terminala płatniczego
            (bramki płatniczej) to usługa, na którą składa się wiele elementów i
            dlatego działamy w imieniu Klientów i na ich rzecz.
          </span>
        </p>
      </section>

      <section id="mission" class="mission container">
        <div class="grid-2-col">
          <div class="grid-item image-wrapper">
            <img
              src="./assets/images/watch-payment.jpg"
              alt="Płatność zegarkiem"
              width="200"
              height="200"
              loading="lazy"
            />
          </div>

          <div class="grid-item mission-text-container">
            <h2 class="section-title">Nasza misja</h2>
            <p class="section-details details-underline text-justify">
              <span>
                Naszą misją jest profesjonalne i skuteczne działanie na rzecz
                naszych Klientów poprzez dostarczanie im dostępu do możliwości,
                jakie daje rynek. Dzięki temu wspieramy przedsiębiorców w
                rozwoju ich biznesów oraz obniżaniu kosztów prowadzenia
                działalności.
              </span>
              <br />
              <span>
                Poprzez nasze usługi budujemy z naszymi Klientami relacje na
                długie lata.
              </span>
            </p>
          </div>
        </div>
      </section>

      <section id="cooperation-stages" class="cooperation-stages">
        <div class="container">
          <h2 class="section-title">Etapy współpracy</h2>
        </div>
        <div class="horizontal-img-container">
          <div class="image-wrapper horizontal-img">
            <img
              src="./assets/images/Group-horizontal.png"
              alt="Etapy Współpracy"
              height="600"
              width="600"
              loading="lazy"
            />
          </div>
        </div>

        <div class="container">
          <div class="image-wrapper vertical-img">
            <img
              src="./assets/images/Group-vertical.png"
              alt="Etapy Współpracy"
              height="600"
              width="300"
              loading="lazy"
            />
          </div>
        </div>
      </section>

      <section id="partnership" class="partnership">
        <div class="slider-container">
          <div class="title-wrapper">
            <h2 class="section-title">Nasi klienci</h2>
          </div>

          <div id="my-keen-slider" class="keen-slider">
            <div class="keen-slider__slide number-slide1">
              <img
                src="./assets/images/client-logo1.jpg"
                alt="Logo klienta 1"
                loading="lazy"
              />
            </div>
            <div class="keen-slider__slide number-slide2">
              <img
                src="./assets/images/logo2.png"
                alt="client logo 2"
                loading="lazy"
              />
            </div>
            <div class="keen-slider__slide number-slide3">
              <img
                src="./assets/images/logo3.png"
                alt="client logo 3"
                loading="lazy"
              />
            </div>
            <div class="keen-slider__slide number-slide4">
              <img
                src="./assets/images/logo4.png"
                alt="client logo 4"
                loading="lazy"
              />
            </div>
            <div class="keen-slider__slide number-slide5">
              <img
                src="./assets/images/logo5.png"
                alt="client logo 5"
                loading="lazy"
              />
            </div>
            <div class="keen-slider__slide number-slide6">
              <img
                src="./assets/images/logo5.png"
                alt="client logo 6"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <section id="faq" class="faq container">
        <h2 class="section-title">Najczęściej zadawane pytania</h2>
        <div class="faq-grid">
          <div class="grid-item">
            <h3 class="question">
              Czy dla przedsiębiorcy usługa Terminal Broker jest płatna?
            </h3>

            <p class="answer text-justify hidden">Nie!</p>
          </div>

          <div class="grid-item">
            <h3 class="question">Jak wygląda współpraca?</h3>

            <p class="answer text-justify hidden">
              Najkrócej rzecz ujmując – otrzymujemy od klienta pełnomocnictwo i
              na jego podstawie zajmujemy się wszystkim: od zebrania potrzeb
              klienta przez sporządzenie zapytania ofertowego, negocjowanie
              ofert. Na koniec opracowujemy profesjonalny raport z rekomendacją
              oferty. W niektórych przypadkach, na życzenie klienta (i w jego
              imieniu), zawieramy umowę
            </p>
          </div>

          <div class="line"></div>

          <div class="grid-item">
            <h3 class="question">
              Czy klient otrzyma jakiś dokument z przebiegu pracy z Terminal
              Broker?
            </h3>

            <p class="answer text-justify hidden">
              Oczywiście! Finalnie każdy klient otrzyma profesjonalny raport.
            </p>
          </div>

          <div class="grid-item">
            <h3 class="question">
              Czy Terminal Broker pomoże w obliczeniu kosztów, które aktualnie
              ponoszę?
            </h3>

            <p class="answer text-justify hidden">Jak najbardziej.</p>
          </div>

          <div class="line"></div>

          <div class="grid-item">
            <h3 class="question">
              Jak długo będę musiał/a czekać na raport i waszą rekomendację?
            </h3>

            <p class="answer text-justify hidden">
              Zwykle zajmuje to 7-10 dni.
            </p>
          </div>

          <div class="grid-item">
            <h3 class="question">
              Prowadzę jednoosobową działalność gospodarczą i nie mam czasu na
              zajmowanie się wszystkimi szczegółami. Czy mogę wam to zlecić? Czy
              za to będzie jakaś opłata?
            </h3>

            <p class="answer text-justify hidden">
              Oczywiście można nam zlecić także proces zawarcia umowy i to
              również będzie bezpłatne.
            </p>
          </div>

          <div class="line"></div>

          <div class="grid-item">
            <h3 class="question">
              Czy z usług Terminal Broker można skorzystać nie mając terminala,
              ale posiadając tzw. bramkę płatniczą (branża e-commerce)?
            </h3>

            <p class="answer text-justify hidden">
              Oczywiście! Działamy również w obszarze płatności on-line.
            </p>
          </div>
        </div>
      </section>

      <section id="contact_section" class="contact-section container">
        <div class="grid-2-col">
          <div class="grid-item">
            <div class="underline-overflow">
              <h2 class="section-title before-underline">
                Jesteś zainteresowany naszą ofertą lub chcesz zadać nam pytanie?
              </h2>
              <p class="section-details">
                Zostaw wiadomość, a my skontaktujemy się z Tobą.
              </p>
            </div>
            <div class="call-us">
              <h2 class="section-title">Wolisz porozmawiać?</h2>
              <p class="section-details">Zadzwoń do nas!</p>

              <div>
                <p class="phone-num">+48 123 123 123</p>
                <p class="phone-num">+48 12 123 12 34</p>
              </div>
            </div>
          </div>
          <div class="grid-item contact-form-container">
            <form action="#" method="get" class="contact-form">
              <label for="company_name">Nazwa firmy</label>
              <input
                id="company_name"
                type="text"
                required
                class="input"
                placeholder="Moja firma"
              />

              <label for="tel">Telefon</label>
              <input
                id="tel"
                type="tel"
                required
                class="input"
                placeholder="123 456 789"
                pattern="[0-9]{9}"
                minlength="9"
                maxlength="9"
              />

              <label for="note">Notatka</label>
              <textarea
                name="note"
                id="note"
                cols="30"
                rows="10"
                class="input textarea"
                required
                placeholder="Tu wpisz swoją wiadomość"
              ></textarea>

              <input type="submit" class="btn" value="Wyślij" />
            </form>
          </div>
        </div>
      </section>

      <section id="newsletter" class="newsletter-section container">
        <form action="#" method="post" class="newsletter-container">
          <h2 class="newsletter-title">Zapisz się do Newslettera</h2>
          <p class="newsletter-details">
            Otrzymuj od nas regularne informacje na temat obecnych promocji i
            innych akcji
          </p>
          <input
            id="email"
            type="email"
            required
            class="input"
            placeholder="jan.kowalski@email.pl"
            pattern="[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$"
            name="newsletter_mail"
          />
          <p class="newsletter-warning">
            Wysyłając adres wyrażam zgodę na otrzymywanie informacji o
            charakterze marketingowym
          </p>

          <div class="newsletter-btn-wrapper">
            <input type="submit" class="btn" value="Zapisz się!" />
          </div>
        </form>
      </section>

      <button id="scrollToTopBtn">
        <i class="fa-solid fa-arrow-up"></i>
      </button>
    </main>

    <footer id="footer">
      <div class="footer-container">
        <div class="row">
          <a href="https://www.facebook.com/profile.php?id=61556078977116"
            ><i class="fa-brands fa-facebook-f"></i
          ></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/terminal-broker/about/"
            ><i class="fa-brands fa-linkedin"></i
          ></a>
        </div>

        <div class="row">
          <ul>
            <li><a href="#">Kontakt</a></li>
            <li><a href="#">Usługi</a></li>
            <li><a href="#">Polityka prywatności</a></li>
            <li><a href="#">Regulamin</a></li>
          </ul>
        </div>

        <div class="row">
          Terminal Broker Copyright © 2024 Terminal Broker - All rights reserved
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.js"></script>
    <script src="./scripts/script.js"></script>
    <script src="./scripts/keen-slider-setup.js"></script>
  </body>
</html>
