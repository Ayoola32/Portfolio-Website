<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Abusidiq - Responsive Portfolio</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Abusidiq</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user-circle nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contact Me
                            </a>
                        </li>
                    </ul>

                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home_content grid">
                        <div class="home__social">
                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>

                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil uil-twitter"></i>
                            </a>

                            <a href="#" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin"></i>
                            </a>
                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                    <image class="home__blob-img" X="12" Y="18" xlink:href="assets/img/portfolio2.jpg"/>
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Hi, I'm Abubakar Sidiq</h1>
                            <h3 class="home__subtitle">Backend Developer</h3>
                            <p class="home__description">
                                High Level Experience in Web development and Knowledge, Producing quality work.
                            </p>
                            <a href="#contact" class="button button__flex">
                               Contact Me <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>

                    </div>


                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt-2 home__scroll-mouse"></i>
                            <span class="home__scroll-name">Scroll down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My Introduction</span>

                <div class="about__container container grid">
                    <img src="assets/img/portfolio3.jpg" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description">
                            I'm a Back-End Developer specializing in PHP with Laravel as my primary framework. 
                            I have a passion for coding and building impressive projects. 
                            I started my web development journey in late 2022, but it hasn’t progressed as smoothly as expected due to some unforeseen obstacles that hindered my learning. 
                            To sharpen my skills, I've tackled various web development challenges and used platforms like Front-End Mentor, along with taking some PHP courses to enhance my knowledge. 
                            I recently began learning JavaScript, which I've found somewhat challenging, but as of 2024, I am regaining momentum. 
                            and I'm excited about the projects I can now create and am looking forward to achieving more in the future.                        
                        </p>
                        <div class="about__info">
                            <div>
                                <span class="about__info-title">1+</span>
                                <span class="about__info-name">Years <br> Experience</span>
                            </div>

                            <div>
                                <span class="about__info-title">10+</span>
                                <span class="about__info-name">Completed <br> Project</span>
                            </div>

                            <div>
                                <span class="about__info-title">2</span>
                                <span class="about__info-name">Teams <br> Worked With</span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a download="" href="assets/pdf/" class="button button--flex">
                                My Resumé <i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My Techinical Level</span>

                <div class="skills__container container grid">
                    <div>
                        <!--==================== SKILLS 1====================-->
                        <div class="skills__content">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>
                                <div>
                                    <h1 class="skills_title">Frontend Developer</h1>
                                    <span class="skills__subtitle">More than a year</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">50%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">50%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Wordpress</h3>
                                        <span class="skills__number">40%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__wordpress"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">10%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!--==================== SKILLS 2====================-->
                        <div class="skills__content">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>
                                <div>
                                    <h1 class="skills_title">Backend Developer</h1>
                                    <span class="skills__subtitle">Less than a year</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP Fundamenal</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP OOP</h3>
                                        <span class="skills__number">40%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php-oop"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Laravel</h3>
                                        <span class="skills__number">0%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__laravel"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">MYSQL</h3>
                                        <span class="skills__number">40%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__mysql"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">NodeJs</h3>
                                        <span class="skills__number">0%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__nodejs"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!--==================== SKILLS 3====================-->
                        <div class="skills__content">
                            <div class="skills__header">
                                <i class="uil uil-swatchbook skills__icon"></i>
                                <div>
                                    <h1 class="skills_title">Design</h1>
                                    <span class="skills__subtitle"></span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>

                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__bootstap"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CorelDraw</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__corel"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Photoshop</h3>
                                        <span class="skills__number">40%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__photoshop"></span>
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Figma</h3>
                                        <span class="skills__number">10%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__figma"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">

            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">

            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">

            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
         
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        

        <!--==================== SWIPER JS ====================-->
        <script src=""></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
