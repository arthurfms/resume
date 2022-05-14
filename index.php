<?php include "sendemail.php"; ?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <!-- http://authenticgoods.co/wrapbootstrap/themes/articulate-v1.2/ -->
    <meta name="author" content="Arthur Fernandes" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arthur Fernandes</title>
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./js/script.js"></script>
    <script src="./js/test.js"></script>
  </head>
  <body class="page">
    <nav class="menu">
      <ul class="menu__list">
        <li class="menu__link">
          <a href="#">Home</a>
        </li>
        <li class="menu__link">
          <a href="#">About Me</a>
        </li>
        <li class="menu__link">
          <a href="#">Skills</a>
        </li>
        <li class="menu__link">
          <a href="#">Experience</a>
        </li>
        <li class="menu__link">
          <a href="#">Education</a>
        </li>
        <li class="menu__link">
          <a href="#">Contact</a>
        </li>
      </ul>
    </nav>
    <header class="header">
      <h1 class="header__title">Arthur Fernandes</h1>
      <h2 class="header__subtitle" id="header__subtitle"></h2>
      <ul class="social-links">
        <li class="social-links__item">
          <a href="https://www.linkedin.com/in/arthur-fms/" target="_blank">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              width="15"
              height="15"
              viewBox="0 0 256 256"
              xml:space="preserve"
            >
              <desc>linkedin icon</desc>
              <defs></defs>
              <g transform="translate(128 128) scale(0.72 0.72)">
                <g
                  style="
                    stroke: none;
                    stroke-width: 0;
                    stroke-dasharray: none;
                    stroke-linecap: butt;
                    stroke-linejoin: miter;
                    stroke-miterlimit: 10;
                    fill: none;
                    fill-rule: nonzero;
                    opacity: 1;
                  "
                  transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)"
                >
                  <path
                    class="social-links__item-color"
                    d="M 1.48 29.91 h 18.657 v 60.01 H 1.48 V 29.91 z M 10.809 0.08 c 5.963 0 10.809 4.846 10.809 10.819 c 0 5.967 -4.846 10.813 -10.809 10.813 C 4.832 21.712 0 16.866 0 10.899 C 0 4.926 4.832 0.08 10.809 0.08"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                  <path
                    class="social-links__item-color"
                    d="M 31.835 29.91 h 17.89 v 8.206 h 0.255 c 2.49 -4.72 8.576 -9.692 17.647 -9.692 C 86.514 28.424 90 40.849 90 57.007 V 89.92 H 71.357 V 60.737 c 0 -6.961 -0.121 -15.912 -9.692 -15.912 c -9.706 0 -11.187 7.587 -11.187 15.412 V 89.92 H 31.835 V 29.91 z"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                </g>
              </g>
            </svg>
          </a>
        </li>
        <li class="social-links__item">
          <a href="https://github.com/arthurfms" target="_blank">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              width="15"
              height="15"
              viewBox="0 0 256 256"
              xml:space="preserve"
            >
              <desc>GitHub icon</desc>
              <defs></defs>
              <g transform="translate(128 128) scale(0.72 0.72)">
                <g
                  style="
                    stroke: none;
                    stroke-width: 0;
                    stroke-dasharray: none;
                    stroke-linecap: butt;
                    stroke-linejoin: miter;
                    stroke-miterlimit: 10;
                    fill: none;
                    fill-rule: nonzero;
                    opacity: 1;
                  "
                  transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)"
                >
                  <path
                    class="social-links__item-color"
                    d="M 5.46 63.31 c 0 0 3.998 1.875 6.773 8.925 c 0 0 3.581 10.887 20.55 7.197 c 0.017 3.237 0.046 6.354 0.064 8.571 C 32.857 89.112 33.758 90 34.867 90 h 26.238 c 1.11 0 2.012 -0.89 2.019 -2 c 0.02 -3.124 0.056 -8.131 0.056 -13.951 c 0 -5.691 -1.949 -9.403 -4.137 -11.296 c 13.583 -1.51 27.853 -6.668 27.853 -30.097 c 0 -6.659 -2.366 -12.101 -6.278 -16.373 c 0.633 -1.537 2.722 -7.741 -0.599 -16.143 c 0 0 -5.115 -1.638 -16.757 6.253 c -4.875 -1.352 -10.097 -2.029 -15.281 -2.053 C 42.798 4.365 37.58 5.043 32.714 6.394 C 21.058 -1.497 15.936 0.141 15.936 0.141 c -3.312 8.402 -1.224 14.606 -0.591 16.143 c -3.902 4.272 -6.286 9.713 -6.286 16.373 c 0 23.372 14.243 28.603 27.792 30.145 c -1.745 1.523 -3.325 4.215 -3.873 8.157 c -3.481 1.559 -12.311 4.254 -17.751 -5.07 c 0 0 -3.226 -5.856 -9.35 -6.287 C 5.877 59.602 -0.075 59.524 5.46 63.31 z"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                </g>
              </g>
            </svg>
          </a>
        </li>
        <li class="social-links__item">
          <a href="mailto:arthurfms@yahoo.com" target="_blank">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              width="15"
              height="15"
              viewBox="0 0 256 256"
              xml:space="preserve"
            >
              <desc>E-mail icon</desc>
              <defs></defs>
              <g transform="translate(128 128) scale(0.72 0.72)">
                <g
                  style="
                    stroke: none;
                    stroke-width: 0;
                    stroke-dasharray: none;
                    stroke-linecap: butt;
                    stroke-linejoin: miter;
                    stroke-miterlimit: 10;
                    fill: none;
                    fill-rule: nonzero;
                    opacity: 1;
                  "
                  transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)"
                >
                  <path
                    class="social-links__item-color"
                    d="M 45 42.768 l 45 -20.785 v -3.587 c 0 -3.186 -2.582 -5.768 -5.768 -5.768 H 5.768 C 2.582 12.627 0 15.209 0 18.395 v 3.587 L 45 42.768 z"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                  <path
                    class="social-links__item-color"
                    d="M 45 52.626 L 0 31.84 v 39.765 c 0 3.186 2.582 5.768 5.768 5.768 h 78.464 c 3.186 0 5.768 -2.582 5.768 -5.768 V 31.84 L 45 52.626 z"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                </g>
              </g>
            </svg>
          </a>
        </li>
        <li class="social-links__item">
          <a
            href="https://api.whatsapp.com/send?phone=34644350581"
            target="_blank"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              width="15"
              height="15"
              viewBox="0 0 256 256"
              xml:space="preserve"
            >
              <desc>Whatsapp icon</desc>
              <defs></defs>
              <g transform="translate(128 128) scale(0.97 0.97)">
                <g
                  style="
                    stroke: none;
                    stroke-width: 0;
                    stroke-dasharray: none;
                    stroke-linecap: butt;
                    stroke-linejoin: miter;
                    stroke-miterlimit: 10;
                    fill: none;
                    fill-rule: nonzero;
                    opacity: 1;
                  "
                  transform="translate(-130.05 -130.05000000000004) scale(2.89 2.89)"
                >
                  <path
                    class="social-links__item-color"
                    d="M 0.576 44.596 C 0.573 52.456 2.626 60.129 6.53 66.892 L 0.201 90 l 23.65 -6.201 c 6.516 3.553 13.852 5.426 21.318 5.429 h 0.019 c 24.586 0 44.601 -20.009 44.612 -44.597 c 0.004 -11.917 -4.633 -23.122 -13.055 -31.552 C 68.321 4.65 57.121 0.005 45.188 0 C 20.597 0 0.585 20.005 0.575 44.595 M 14.658 65.727 l -0.883 -1.402 c -3.712 -5.902 -5.671 -12.723 -5.669 -19.726 C 8.115 24.161 24.748 7.532 45.201 7.532 c 9.905 0.004 19.213 3.865 26.215 10.871 c 7.001 7.006 10.854 16.32 10.851 26.224 c -0.009 20.439 -16.643 37.068 -37.08 37.068 h -0.015 c -6.655 -0.004 -13.181 -1.79 -18.872 -5.168 l -1.355 -0.803 l -14.035 3.68 L 14.658 65.727 z M 45.188 89.228 L 45.188 89.228 L 45.188 89.228 C 45.187 89.228 45.187 89.228 45.188 89.228"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                  <path
                    class="social-links__item-color"
                    d="M 34.038 25.95 c -0.835 -1.856 -1.714 -1.894 -2.508 -1.926 c -0.65 -0.028 -1.394 -0.026 -2.136 -0.026 c -0.744 0 -1.951 0.279 -2.972 1.394 c -1.022 1.116 -3.902 3.812 -3.902 9.296 c 0 5.485 3.995 10.784 4.551 11.529 c 0.558 0.743 7.712 12.357 19.041 16.825 c 9.416 3.713 11.333 2.975 13.376 2.789 c 2.044 -0.186 6.595 -2.696 7.524 -5.299 c 0.929 -2.603 0.929 -4.834 0.651 -5.299 c -0.279 -0.465 -1.022 -0.744 -2.137 -1.301 c -1.115 -0.558 -6.595 -3.254 -7.617 -3.626 c -1.022 -0.372 -1.765 -0.557 -2.509 0.559 c -0.743 1.115 -2.878 3.625 -3.528 4.368 c -0.65 0.745 -1.301 0.838 -2.415 0.28 c -1.115 -0.559 -4.705 -1.735 -8.964 -5.532 c -3.314 -2.955 -5.551 -6.603 -6.201 -7.719 c -0.65 -1.115 -0.069 -1.718 0.489 -2.274 c 0.501 -0.499 1.115 -1.301 1.673 -1.952 c 0.556 -0.651 0.742 -1.116 1.113 -1.859 c 0.372 -0.744 0.186 -1.395 -0.093 -1.953 C 37.195 33.666 35.029 28.154 34.038 25.95"
                    style="
                      stroke: none;
                      stroke-width: 1;
                      stroke-dasharray: none;
                      stroke-linecap: butt;
                      stroke-linejoin: miter;
                      stroke-miterlimit: 10;
                      fill: #ffffff;
                      fill-rule: nonzero;
                      opacity: 1;
                    "
                    transform=" matrix(1 0 0 1 0 0) "
                    stroke-linecap="round"
                  />
                </g>
              </g>
            </svg>
          </a>
        </li>
      </ul>
    </header>
    <main>
      <section class="profile">
        <div class="section-header">
          <h2 class="section-header__title">About Me</h2>
          <div class="section-header__line"></div>
          <h3 class="section-header__subtitle">Brazilian, 28 years</h3>
        </div>
        <div class="two-columns">
          <div class="two-columns__head">
            <img
              class="profile__photo"
              src="./images/low_DSC2974.jpg"
              alt="Arthur Santos profile photo"
            />
          </div>
          <div class="two-columns__content">
            <p>
              Software Development and Journalism graduated, working as Data
              Implementation Specialist at Doctoralia Spain.
            </p>
            <p>
              I have over a year experience working with big databases
              maintenance and manipulation, developing and managing process and
              technical support. I also have experience working with
              multicultural teams, talking in portuguese, english and spanish
              about technical issues.
            </p>
          </div>
        </div>
      </section>
      <section class="skills">
        <div class="section-header">
          <h2 class="section-header__title">Skills</h2>
          <div class="section-header__line"></div>
          <h3 class="section-header__subtitle">Some of my main skills</h3>
        </div>
        <ul class="skills__list">
          <li class="skills__item">
            <div class="skills__level">
              <p>75</p>
            </div>
            <h4 class="skills__name">HTML</h4>
          </li>
          <li class="skills__item">
            <div class="skills__level">
              <p>75</p>
            </div>
            <h4 class="skills__name">CSS</h4>
          </li>
          <li class="skills__item">
            <div class="skills__level">
              <p>50</p>
            </div>
            <h4 class="skills__name">JavaScript</h4>
          </li>
          <li class="skills__item">
            <div class="skills__level">
              <p>75</p>
            </div>
            <h4 class="skills__name">SQL</h4>
          </li>
          <li class="skills__item">
            <div class="skills__level">
              <p>100</p>
            </div>
            <h4 class="skills__name">Portuguese</h4>
          </li>
          <li class="skills__item">
            <div class="skills__level">
              <p>80</p>
            </div>
            <h4 class="skills__name">English</h4>
          </li>
          <li class="skills__item">
            <div class="skills__level">
              <p>100</p>
            </div>
            <h4 class="skills__name">Spanish</h4>
          </li>
        </ul>
      </section>
      <section class="education">
        <div class="section-header">
          <h2 class="section-header__title">Education</h2>
          <div class="section-header__line"></div>
          <h3 class="section-header__subtitle">
            Main graduation and other courses
          </h3>
        </div>
        <div class="cards">
          <div class="card card_main">
            <h4 class="card__title">Systems Analysis and Development</h4>
            <h5 class="card__subtitle">
              Unicesumar - <span>Graduated:</span> July, 2022
            </h5>
            <p class="card__description">
              2,5 years development graduation, passing through the main issues
              and skills for a developer, including system requisits,
              programming languages, UI and many others topics.
            </p>
          </div>
          <div class="card card_main">
            <h4 class="card__title">Journalism</h4>
            <h5 class="card__subtitle">
              Universidade Metodista de São Paulo -
              <span>Graduated:</span> December, 2017
            </h5>
            <p class="card__description">
              4 years bachelor graduation on Journalism and social comunication,
              where I won the best tesis prize from the graduation year with a
              photo-journalism book about ancient culture on Argentina's
              northeast.
            </p>
          </div>
          <div class="card">
            <h4 class="card__title">Web Development</h4>
            <h5 class="card__subtitle">
              Practicum by Yandex - <span>Graduation:</span> January, 2023
            </h5>
            <p class="card__description">
              10 months bootcamp about Web Development with HTML, CSS,
              JavaScript, React and BEM Metodology.
            </p>
          </div>
          <div class="card">
            <h4 class="card__title">Front-End Engineering</h4>
            <h5 class="card__subtitle">
              EBAC - <span>Graduated:</span> January, 2023
            </h5>
            <p class="card__description">
              12 months course with HTML, CSS, JavaScript, Ajax, Gulp, Sass and
              different techniques used on the Front-End engineering profession.
            </p>
          </div>
          <div class="card">
            <h4 class="card__title">Java Object-Oriented Development</h4>
            <h5 class="card__subtitle">
              Universidade Estadual do Ceará - <span>Graduated:</span> 2020
            </h5>
            <p class="card__description">
              2 courses with two months each about Java development, foccusing
              on Web Applications and Object-Oriented programming.
            </p>
          </div>
        </div>
      </section>
      <section class="experience">
        <div class="section-header">
          <h2 class="section-header__title">Experience</h2>
          <div class="section-header__line"></div>
          <h3 class="section-header__subtitle">Work Experience</h3>
        </div>
        <div class="slider">
          <div class="slides">
            <div class="slide fade">
              <h4 class="slide__title">Data Implementation Specialist</h4>
              <p class="slide__subtitle">Doctoralia España</p>
              <p class="slide__date-range">May, 2021 - Current</p>
              <p class="slide__description">
                Management and manipulation of big databases to generate
                specific formats, necessaries to new clients implementations.
                Process organization and maintenance to guarantee data
                protection and information quality in company system.
                <span class="slide__description_break-line">
                  Contacting with all involved teams, keeping the process
                  flowing to ensure that every step works as the company
                  standards, and training new import members.
                </span>
              </p>
            </div>
            <div class="slide fade">
              <h4 class="slide__title">Data Analyst</h4>
              <p class="slide__subtitle">Doctoralia Brasil</p>
              <p class="slide__date-range">March, 2021 - May, 2021</p>
              <p class="slide__description">
                Improve data analysis for Marketing, lead generation and DP
                phone operations, update and maintenance workflows to optimize
                data collection. Generate dashboards and data insights for all
                related teams, focusing on new leads, keep and improve operation
                control, goals update and team commission standard.
              </p>
            </div>
            <div class="slide fade">
              <h4 class="slide__title">Support Analyst</h4>
              <p class="slide__subtitle">Doctoralia Brasil</p>
              <p class="slide__date-range">September, 2019 - March, 2021</p>
              <p class="slide__description">
                Provide support for employees and users with doubts, bugs
                corrections with scripts on SaaS, Marketplace and financial
                system. Report weakness, find solutions to prevent bugs, and
                notify developers about necessary corrections by Jiras. Data
                report creation and analysis based on Support and Customer
                Success actions and needs.
                <span class="slide__description_break-line">
                  Helped client migration service improvement on support side
                  actions, changing the avarege time from +20 working hours to a
                  4 working hours.</span
                >
              </p>
            </div>
            <div class="slide fade">
              <h4 class="slide__title">Customer Success Analyst - Latam</h4>
              <p class="slide__subtitle">Doctoralia Brasil</p>
              <p class="slide__date-range">April, 2019 - September, 2019</p>
              <p class="slide__description">
                Assist health professionals from Chile by phone and email. Made
                usability training and helping them with platform issues,
                setting the environment for new clients and keeping track of
                their needs. Follow client's engagement and guarantee the best
                usage from the system, generating best results and helping them
                to achieve their goals.
              </p>
            </div>
            <div class="slide fade">
              <h4 class="slide__title">Trilingual Call Center agent</h4>
              <p class="slide__subtitle">SYKES Brasil</p>
              <p class="slide__date-range">September, 2018 - April, 2019</p>
              <p class="slide__description">
                Manage corporate cards request in English, Portuguese and
                Spanish. Credit card limit raises requests, account information
                and client needs. Receive and follow client's request, managing
                their information following all companies process.
              </p>
            </div>
            <a class="slides__prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="slides__next" onclick="plusSlides(1)">&#10095;</a>
          </div>
        </div>
      </section>
      <section class="contact">
        <div class="section-header section-header_light">
          <h2 class="section-header__title">Contact</h2>
          <div class="section-header__line section-header__line_light"></div>
          <h3 class="section-header__subtitle">
            Feel free to reach me by any contact bellow or by the form
          </h3>
        </div>
        <div class="contact-grid">
          <nav class="contact-info">
            <h4 class="contact-info__title">Contact Info</h4>
            <ul class="contact-info__list">
              <li class="contact-info__list-item">
                <a
                  href="https://api.whatsapp.com/send?phone=34644350581"
                  target="_blank"
                  ><img
                    src="./images/whatsapp-103.svg"
                    alt="Whatsapp icon"
                  />+34 644 350 581
                </a>
              </li>
              <li class="contact-info__list-item">
                <a href="mailto:arthurfms@yahoo.com" target="_blank"
                  ><img
                    src="./images/mail-142.svg"
                    alt="E-mail icon"
                  />arthurfms@yahoo.com</a
                >
              </li>
              <li class="contact-info__list-item">
                <a
                  href="https://www.linkedin.com/in/arthur-fms/"
                  target="_blank"
                  ><img
                    src="./images/linkedin-112.svg"
                    alt="Linkedin icon"
                  />arthur-fms</a
                >
              </li>
            </ul>
          </nav>
          <form class="contact-form" method="post">
            <input
              name="form__name"
              type="text"
              class="form__name"
              id="form__name"
              placeholder="Full name"
              onkeydown="return event.key != 'Enter';"
            />
            <input
              name="form__email"
              type="text"
              class="form__email"
              id="form__email"
              placeholder="Your E-mail"
              onkeydown="return event.key != 'Enter';"
            />
            <input
              name="form__subject"
              type="text"
              class="form__subject"
              id="form__subject"
              placeholder="Subject"
              onkeydown="return event.key != 'Enter';"
            />
            <textarea
              name="form__message"
              type="text"
              class="form__message"
              id="form__message"
              placeholder="Message"
            ></textarea>
            <button
              name="form__submit"
              class="form__submit"
              type="button"
              onclick="send_form ()"
            >
              Submit
            </button>
            <p class="success"><?php echo $success;  ?></p>
          </form>
        </div>
      </section>
      <footer class="footer">
        <p class="footer__copyright">&#169; 2022 - Arthur Fernandes</p>
      </footer>
    </main>
  </body>
</html>