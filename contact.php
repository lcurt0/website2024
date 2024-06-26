<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/globalStyles.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="icon" type="apple-touch-icon" href="./assets/icons/contact.ico">
    <link rel="icon" type="image/x-icon" href="./assets/icons/contact.ico">
    <title>Lautaro Curto | Let's talk!</title>
    <meta name="contact" content="I am committed to turn your ideas into reality. Let's work together!">
    <meta name="keywords"
    content="graphic design, web design, branding, brand strategy, art direction, website development, freelance designer Madrid, ethical design, slow design movement, app designer, b-corporations, UXUI, change advocate">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PC9W3S2LZ1%22%3E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-PC9W3S2LZ1');
    </script>
</head>

<body>
    <header>
        <!---- Navbar ---->
        <nav id="navbar">
        <a href="./index.html" class="logo aLink aLink--under">
              Lautaro Curto
            </a>
            <ul class="nav__links">
                <li><a href="./about.html" class="aLink aLink--under">About</a></li>
                <li><a href="./process.html" class="aLink aLink--under">Process</a></li>
                <li><a href="./work.html" class="aLink aLink--under">Work</a></li>
                <li><a href="https://lautarocurto.com/contact.php"class="aLink aLink--under">Contact</a></li>
            </ul>
            <img id="switch" class="colorSwitch" src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/rainbow-switch-dark_white-website-mode.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649368706757" alt="website light & dark mode switch on nice studio website" loading="eager">
            <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
                <div class="bar1"></div>
                <div class="bar3"></div>
                <ul class="mobile__menu">
                    <li><a href="./about.html" class="Bd">About</a></li>
                    <li>
                        <svg class="shape1" width="45" height="45" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.87122 8.58398L29.1999 23.4814" stroke="" stroke-width="3.30735"
                                stroke-miterlimit="10" />
                            <path d="M0.909302 16.1592L31.1594 15.8967" stroke="" stroke-width="3.30735"
                                stroke-miterlimit="10" />
                            <path d="M3.00123 23.7117L29.0674 8.359" stroke="" stroke-width="3.30735"
                                stroke-miterlimit="10" />
                            <path d="M8.5859 29.1969L23.4829 2.86663" stroke="" stroke-width="3.30735"
                                stroke-miterlimit="10" />
                            <path d="M16.1666 31.1589L15.9036 0.907157" stroke="" stroke-width="3.30735"
                                stroke-miterlimit="10" />
                            <path d="M23.7112 29.0662L8.35852 3" stroke="" stroke-width="3.30735"
                                stroke-miterlimit="10" />
                        </svg>
                    </li>
                    <li><a href="./process.html" class="Bd">Process</a></li>
                    <li>
                        <svg class="shape2" width="45" height="45" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.2695 13.0013C42.7182 13.0013 12.9967 42.7274 12.9967 12.274C12.9967 42.7274 -16.7248 13.0013 13.7239 13.0013C-16.7248 13.0013 12.9967 -16.7248 12.9967 13.7286C13.0256 -16.7306 42.7182 13.0013 12.2695 13.0013Z"
                                fill="" />
                        </svg>
                    </li>
                    <li><a href="./work.html" class="Bd">Work</a></li>
                    <li>
                        <svg class="shape3" width="55" height="55" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34 17C23.614 17 17 23.6103 17 34C17 23.6103 10.3897 17 0 17C10.3897 17 17 10.3897 17 0C17.0037 10.3897 23.614 17 34 17Z"
                                fill="" />
                        </svg>
                    </li>
                    <li><a href="https://lautarocurto.com/contact.php" class="Bd">Contact</a></li>
                    <a href="mailto:lautarocurto@gmail.com"
                        class="mobile__menu--mail Rg">lautarocurto@gmail.com</a>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <section class="contact">
        <form class="contact__box"  method="POST">
            <div class="contact__txtbox">
                <div class="contact__title">
                    <h1 class="fonH1">Drop me <span class="BdIt orange">a line</span></h1>
                    <h4 class="fonPar">For new project inquiries, please fill out the form below. <br> I am
                        currently booking projects for July 2024 and on.</h4>
                </div>
                <div class="contact__form">
                    <div class="name">
                        <label for="name">Name <span class="required">*</span></label>
                        <br>
                        <input type="text" name="name" required>
                    </div>
                    <div class="email">
                        <label for="email">Email <span class="required">*</span></label>
                        <br>
                        <input type="email" name="email" required>
                    </div>
                    <div class="textarea">
                        <label for="description">Tell me a bit about your project <span class="required">*</span></label>
                        <br>
                        <textarea name="description" required></textarea>
                    </div>
                    <div class="hear">
                        <label for="hear">How did you hear about me?</label>
                        <br>
                        <input type="text" name="hear">
                    </div>
                    <div class="btn">
                        <button type="submit" value="submit" id="submit "name="SubmitButton" class="btn__active submit__btn" onclick="myFunction()">
                            <a class="fonH4">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.3825 3.88326H0V0H20.2658V20.2658H16.3825V3.88326Z" fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M-0.000202745 16.3926C7.15253 16.3926 12.951 10.5941 12.951 3.44141L16.8242 3.44141C16.8242 12.7333 9.29167 20.2658 -0.000202914 20.2658L-0.000202745 16.3926Z"
                                        fill="" />
                                </svg>
                                Send
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="shapes">
                <div class="shapes__svgbox">
                    <svg class="shape__pink" width="45%" height="45%" viewBox="0 0 151 151" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M113.007 144.478L116.254 108.597L150.702 98.0218L127.628 70.3435L144.513 38.5178L108.632 35.2708L98.057 0.823268L70.3822 23.9031L38.5565 7.01854L35.3095 42.8993L0.86197 53.4745L23.9383 81.1428L7.05372 112.969L42.9344 116.216L53.5097 150.663L81.1815 127.593L113.007 144.478Z"
                            fill=" " />
                    </svg>
                    <svg class="shape__yellow" width="50%" height="50%" viewBox="0 0 182 182" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M108.043 181.766C97.7144 126.273 126.456 84.3598 181.969 74.0271C126.456 84.3598 84.5626 55.6143 74.2299 0.101057C84.5626 55.6143 55.8171 97.5078 0.303828 107.841C55.8208 97.5275 97.7144 126.273 108.043 181.766Z"
                            fill=" " />
                    </svg>
                    <svg class="shape__blue" width="45%" height="45%" viewBox="0 0 148 148" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.9504 17.9658L121.545 130.515" stroke=" " stroke-width="14.9612"
                            stroke-miterlimit="10" />
                        <path d="M61.4012 1.85547L87.0493 146.624" stroke=" " stroke-width="14.9612"
                            stroke-miterlimit="10" />
                        <path d="M99.3479 5.13217L49.1743 143.33" stroke=" " stroke-width="14.9612"
                            stroke-miterlimit="10" />
                        <path d="M130.518 26.9378L17.9602 121.532" stroke=" " stroke-width="14.9612"
                            stroke-miterlimit="10" />
                        <path d="M146.639 61.4147L1.86267 87.062" stroke=" " stroke-width="14.9612"
                            stroke-miterlimit="10" />
                        <path d="M143.345 99.323L5.14758 49.1494" stroke=" " stroke-width="14.9612"
                            stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
        </form>
    </section>
        <section class="contact">
            <form class="contact__box"  method="POST">
                <div class="contact__txtbox">
                    <div class="contact__title">
                        <h1 class="fonH1">Drop me <span class="BdIt orange">a line</span></h1>
                        <h4 class="fonPar">For new project inquiries, please fill out the form below. <br> I am
                            currently booking projects for July 2024 and on.</h4>
                    </div>
                    <div class="contact__form">
                        <div class="name">
                            <label for="name">Name <span class="required">*</span></label>
                            <br>
                            <input type="text" name="name" required>
                        </div>
                        <div class="email">
                            <label for="email">Email <span class="required">*</span></label>
                            <br>
                            <input type="email" name="email" required>
                        </div>
                        <div class="textarea">
                            <label for="description">Tell me a bit about your project <span class="required">*</span></label>
                            <br>
                            <textarea name="description" required></textarea>
                        </div>
                        <div class="launch">
                            <label for="launch">What is your ideal launch date? <span class="required">*</span></label>
                            <br>
                            <div class="custom-select">
                                <select id="launch__date" name="launch__date" required>
                                    <option value="" selected>-</option>
                                    <option value="Less than a month">Less than a month</option>
                                    <option value="From one to two months">From one to two months</option>
                                    <option value="More than two months">More than two months</option>
                                    <option value="I'm not sure">I'm not sure</option>
                                </select>
                            </div>
                        </div>
                        <div class="budget">
                            <label for="budget">What is your ideal all-in budget? <span class="required">*</span></label>
                            <br>
                            <div class="custom-select">
                                <select id="budget" name="budget" required>
                                    <option class="custom-select__txt" value="" selected>-</option>
                                    <option class="custom-select__txt" value="€ 5.000 to 10.000">€ 5.000 to 10.000
                                    </option>
                                    <option class="custom-select__txt" value="€ 10.000 to 25.000">€ 10.000 to 25.000
                                    </option>
                                    <option class="custom-select__txt" value="€ 25.000 to 50.000">€ 25.000 to 50.000
                                    </option>
                                    <option class="custom-select__txt" value="+ € 50.000">+ € 50.000</option>
                                </select>
                            </div>
                        </div>
                        <div class="hear">
                            <label for="hear">How did you hear about me?</label>
                            <br>
                            <input type="text" name="hear">
                        </div>
                        <div class="btn">
                            <button type="submit" value="submit" id="submit "name="SubmitButton" class="btn__active submit__btn" onclick="myFunction()">
                                <a class="fonH4">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.3825 3.88326H0V0H20.2658V20.2658H16.3825V3.88326Z" fill="" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M-0.000202745 16.3926C7.15253 16.3926 12.951 10.5941 12.951 3.44141L16.8242 3.44141C16.8242 12.7333 9.29167 20.2658 -0.000202914 20.2658L-0.000202745 16.3926Z"
                                            fill="" />
                                    </svg>
                                    Send
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="shapes">
                    <div class="shapes__svgbox">
                        <svg class="shape__pink" width="45%" height="45%" viewBox="0 0 151 151" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M113.007 144.478L116.254 108.597L150.702 98.0218L127.628 70.3435L144.513 38.5178L108.632 35.2708L98.057 0.823268L70.3822 23.9031L38.5565 7.01854L35.3095 42.8993L0.86197 53.4745L23.9383 81.1428L7.05372 112.969L42.9344 116.216L53.5097 150.663L81.1815 127.593L113.007 144.478Z"
                                fill=" " />
                        </svg>
                        <svg class="shape__yellow" width="50%" height="50%" viewBox="0 0 182 182" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M108.043 181.766C97.7144 126.273 126.456 84.3598 181.969 74.0271C126.456 84.3598 84.5626 55.6143 74.2299 0.101057C84.5626 55.6143 55.8171 97.5078 0.303828 107.841C55.8208 97.5275 97.7144 126.273 108.043 181.766Z"
                                fill=" " />
                        </svg>
                        <svg class="shape__blue" width="45%" height="45%" viewBox="0 0 148 148" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.9504 17.9658L121.545 130.515" stroke=" " stroke-width="14.9612"
                                stroke-miterlimit="10" />
                            <path d="M61.4012 1.85547L87.0493 146.624" stroke=" " stroke-width="14.9612"
                                stroke-miterlimit="10" />
                            <path d="M99.3479 5.13217L49.1743 143.33" stroke=" " stroke-width="14.9612"
                                stroke-miterlimit="10" />
                            <path d="M130.518 26.9378L17.9602 121.532" stroke=" " stroke-width="14.9612"
                                stroke-miterlimit="10" />
                            <path d="M146.639 61.4147L1.86267 87.062" stroke=" " stroke-width="14.9612"
                                stroke-miterlimit="10" />
                            <path d="M143.345 99.323L5.14758 49.1494" stroke=" " stroke-width="14.9612"
                                stroke-miterlimit="10" />
                        </svg>
                    </div>
                    <div class="shapes__us">
                        <a class="fonPar" href="mailto:lautarocurto@gmail.com">lautarocurto@gmail.com</a>
                        <h4 class="fonPar">Madrid, Spain</h4>
                    </div>
                </div>
            </form>
        </section>
        <!---- Central txt ---->
        <section class="centraltxt">
            <div class="centraltxt__box">
                <h2 class="fonH2">What defines us as <span class="Bd blue">humans</span> are the <span
                        class="Rg yellow Un">actions</span> we take every day,
                    so here’s a quick look <span class="BdIt orange">about myself</span>
                    <span><a href="about.html">
                            <svg class="arrow__link" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0"
                                y="0" viewBox="0 0 59 59" style="enable-background:new 0 0 59 59" xml:space="preserve">
                                <path
                                    d="M29.5 59C13.2 59 0 45.8 0 29.5S13.2 0 29.5 0 59 13.2 59 29.5 45.8 59 29.5 59zm0-56C14.9 3 3 14.9 3 29.5S14.9 56 29.5 56 56 44.1 56 29.5 44.1 3 29.5 3z"
                                    style="fill:#de5d37" />
                                <path
                                    d="M32.4 23H19v-4h21v21h-4V26.6C34.2 34.3 27.3 40 19 40v-4c7.3 0 13.2-5.8 13.4-13z"
                                    style="fill-rule:evenodd;clip-rule:evenodd;fill:#de5d37" />
                            </svg>
                        </a></span>
                    my <span class="MeIt pink">holistic process</span>
                    <span><a href="process.html">
                            <svg class="arrow__link" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0"
                                y="0" viewBox="0 0 59 59" style="enable-background:new 0 0 59 59" xml:space="preserve">
                                <path
                                    d="M29.5 59C13.2 59 0 45.8 0 29.5S13.2 0 29.5 0 59 13.2 59 29.5 45.8 59 29.5 59zm0-56C14.9 3 3 14.9 3 29.5S14.9 56 29.5 56 56 44.1 56 29.5 44.1 3 29.5 3z"
                                    style="fill:#de5d37" />
                                <path
                                    d="M32.4 23H19v-4h21v21h-4V26.6C34.2 34.3 27.3 40 19 40v-4c7.3 0 13.2-5.8 13.4-13z"
                                    style="fill-rule:evenodd;clip-rule:evenodd;fill:#de5d37" />
                            </svg>
                        </a></span> and the things I've been
                    <span class="BkIt yellow Un">working on</span> <span><a href="work.html">
                            <svg class="arrow__link" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0"
                                y="0" viewBox="0 0 59 59" style="enable-background:new 0 0 59 59" xml:space="preserve">
                                <path
                                    d="M29.5 59C13.2 59 0 45.8 0 29.5S13.2 0 29.5 0 59 13.2 59 29.5 45.8 59 29.5 59zm0-56C14.9 3 3 14.9 3 29.5S14.9 56 29.5 56 56 44.1 56 29.5 44.1 3 29.5 3z"
                                    style="fill:#de5d37" />
                                <path
                                    d="M32.4 23H19v-4h21v21h-4V26.6C34.2 34.3 27.3 40 19 40v-4c7.3 0 13.2-5.8 13.4-13z"
                                    style="fill-rule:evenodd;clip-rule:evenodd;fill:#de5d37" />
                            </svg>
                        </a></span>
                </h2>
            </div>
        </section>
    <!---- Team gallery ---->
        <section class="teamGallery">
                <div class="items">
                    <!-- PHOTO 1 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                    src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio_S08PwoJcK.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346670652"
                                    alt="working space with plants and screens in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 2 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-companion-nice-studio_NgrlgwsAF.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346668952"
                                alt="cat in front of monitor screen in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 3 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-notes-nice-studio_5Gi6cEPYE.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346665298"
                                alt="notebook and pen showcasing different logo styles and interaction in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 4 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio-books_DWku_-4AR.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346669639"
                                alt="books on a table displaying the title creative typography, a computer and a lego set in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 1 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                    src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio_S08PwoJcK.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346670652"
                                    alt="working space with plants and screens in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 2 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-companion-nice-studio_NgrlgwsAF.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346668952"
                                alt="cat in front of monitor screen in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 3 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-notes-nice-studio_5Gi6cEPYE.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346665298"
                                alt="notebook and pen showcasing different logo styles and interaction in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 4 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio-books_DWku_-4AR.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346669639"
                                alt="books on a table displaying the title creative typography, a computer and a lego set in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 1 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                    src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio_S08PwoJcK.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346670652"
                                    alt="working space with plants and screens in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 2 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-companion-nice-studio_NgrlgwsAF.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346668952"
                                alt="cat in front of monitor screen in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 3 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-notes-nice-studio_5Gi6cEPYE.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346665298"
                                alt="notebook and pen showcasing different logo styles and interaction in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 4 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio-books_DWku_-4AR.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346669639"
                                alt="books on a table displaying the title creative typography, a computer and a lego set in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 1 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                    src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio_S08PwoJcK.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346670652"
                                    alt="working space with plants and screens in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 2 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-companion-nice-studio_NgrlgwsAF.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346668952"
                                alt="cat in front of monitor screen in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 3 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-notes-nice-studio_5Gi6cEPYE.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346665298"
                                alt="notebook and pen showcasing different logo styles and interaction in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                    <!-- PHOTO 4 -->
                    <div class="item">
                        <div class="gallery__card">
                            <span class="img__container"><img
                                src="https://ik.imagekit.io/nicecreativestudio/IMGs_finales_Webp/our-place-nice-studio-books_DWku_-4AR.webp?ik-sdk-version=javascript-1.4.3&updatedAt=1649346669639"
                                alt="books on a table displaying the title creative typography, a computer and a lego set in a black & white photo" loading="lazy"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!---- Footer ---->
    <footer class="footer">
        <div class="footer__box">
            <h2 class="footer__title fonH2">Let's <span class="MeIt orange">talk</span></h2>
            <h4 class="footer__subtitle fonPar">Feel free to  <a class="orange Un"
                href="mailto:hellonicestudio@gmail.com">reach out</a> if you want to collaborate with me or simply, have a chat.</h4>
            <div class="footer__boxlinks">
            <div class="footer__links" >
                    <h4 class="footer__linkstit1 fonSubFoot">SOCIALS</h4>
                    <article class="footer__linksbox1">
                        <a class="aLink aLink--under" target="_blank"
                            href="https://www.behance.net/drk0">BEHANCE</a>
                        <a class="aLink aLink--under" target="_blank"
                            href="https://dribbble.com/drk0">DRIBBBLE</a>
                        <a class="aLink aLink--under" target="_blank"
                            href="https://www.linkedin.com/in/lautarocurto">LINKEDIN</a>
                    </article>
                    <h4  class="footer__linkstit2 fonSubFoot"></h4>
                    <article class="footer__linksbox2">
                    </article>
                </div>
                <a class="footer__backToTop arrowbounce" href="#top">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 59 59"
                        style="enable-background:new 0 0 59 59" xml:space="preserve">
                        <circle cx="29.5" cy="29.5" r="28" style="fill:none;stroke:'';stroke-width:3" />
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:'' "
                            d="M42.3 30.7 29.7 17.9 16.9 30.4l2.4 2.5 8.6-8.4v16h3.6v-16l8.3 8.6z" />
                    </svg>
                </a>
                <div class="footer__copy">
                    <h5 translate="no" class="fonH5">Lautaro Curto - 2024</h5>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/js/colorMode.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script src="./assets/js/navbar.js"></script>
    <script src="./assets/js/customSelect.js"></script>
    <script src="./assets/js/slider.js"></script>

<?php
include ("form.php")
?>
</body>
</html>
