<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="logo">
            <img src="" alt="">
        </div>
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">Skills</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">About me</a></li>
                <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
            </ul>
        </nav>
    </header>

    <!-- Introduction -->
    <section class="intro" id="home" style="margin-bottom:100px">
        <h1 class="section__title section__title--intro">
            Hi, I am <strong>Aurola Zeneli</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">full-stack dev</p>
        <img src="images/profile1.jpg" alt="a picture " class="intro__img">
    </section>

    <!-- About me -->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">developer based in Prishtina</p>

        <div class="about-me__body">
            <p>Hi! My name is Aurola Zeneli, I am a Computer Engineering student committed to learning, developing
                skills in
                software engineering and beyond. Self-directed and energetic with superior
                performance in working independently and collaborating with others on
                group projects. </p>
        </div>
        <div class="about-me__img"></div>

        <!-- <img src="img/dev-jane-02.jpg" alt="Jane leaning against a bus" class="about-me__img"> -->
    </section>
    <!-- My skills -->
    <section class="my-services" id="services">

        <div class="row" style="display:flex; ">
            <div class="personal-info padd-15" >
                <div class="row" style="display: flex; padding-top:70px">
                    <div class="row1" style="margin-right:30px">
                        <div class="info-item padd-15">
                            <p>Brithday: <span>27 Feb 2020</span> </p>
                        </div>
                        <div class="info-item padd-15">
                            <p>Nationality: <span>Kosovar</span> </p>
                        </div>
                        <div class="info-item padd-15">
                            <p>City: <span>Prishtine</span> </p>
                        </div>
                    </div>
                    <div class="row1">
                        <div class="info-item padd-15">
                            <p>Email: <span>zeneliaurola@gmail.com</span> </p>
                        </div>
                        <div class="info-item padd-15">
                            <p>Age: <span>20</span> </p>
                        </div>
                        <div class="info-item padd-15">
                            <p>Phone: <span>+38345847454</span> </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="skills padd-15">

                <div class="row">
                    <div class="skill-item padd-15">
                        <h5>Javascript ES6</h5>
                        <div class="progress">
                        <div class=" progress-in" style="width:95%"></div>
                        <div class="skill-percent">95%</div>
                    </div>
                    </div>
                <div class="skill-item padd-15">
                    <h5>Java</h5>
                    <div class="progress">
                    <div class=" progress-in" style="width:90%"></div>
                    <div class="skill-percent">90%</div>
                </div>
                </div>
            <div class="skill-item padd-15">
                <h5>HTML5 & CSS3</h5>
                <div class="progress">
                <div class=" progress-in" style="width:100%"></div>
                <div class="skill-percent">100%</div>
            </div>
            </div>
        <div class="skill-item padd-15">
            <h5>PHP</h5>
            <div class="progress">
            <div class=" progress-in" style="width:80%"></div>
            <div class="skill-percent">80%</div>
        </div>
        </div>
        <div class="skill-item padd-15">
            <h5>React</h5>
            <div class="progress">
            <div class=" progress-in" style="width:70%"></div>
            <div class="skill-percent">70%</div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="cen"> <a href="#work" class="btn">My Work</a></div>
    </section>



    <section>
        <div class="container">
            <div class="education">
                <h3 class="title">Education</h3>
                <div class="row">
                    <div class="timeline-box " style="margin-right:15px">
                        <div class="timeline shadow-dark">
                            <!-- timeline Item -->
                            <div class="timeline-item">
                                <div class="circle-dot"></div>
                                <h6 class="timeline-date">
                                    <i class="fa fa-calendar"></i>2018-Present
                                </h6>
                                <h4 class="timeline-title">Bachelor In Computer Engineering</h4>
                                <p class="timeline-text">
                                    FIEK-Universiteti i Prishtinës </p>
                                <p class="timeline-text">Field of study:
                                <ul class="timeline-text">
                                    <li>Computer Engineering</li>
                                </ul>
                                </p>
                                <p class="timeline-text">I am currently in the last year of studies in this faculty</p>

                            </div>
                            <!-- timeline Item End -->
                            <!-- timeline Item -->
                            <div class="timeline-item">
                                <div class="circle-dot"></div>
                                <h6 class="timeline-date">
                                    <i class="fa fa-calendar"></i>2015-2018
                                </h6>
                                <h4 class="timeline-title">High School "Sami Frasheri"</h4>
                                <p class="timeline-text">
                                    Gjimnazi i shkenave natyrore "Sami Frasheri"<br>
                                    Rr. "Nazim Gafurri", Prishtine, Kosovo </p>
                            </div>
                            <!-- timeline Item End -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="training ">
                <h3 class="title">Trainings</h3>
                <div class="row">
                    <div class="timeline-box ">
                        <div class="timeline shadow-dark">
                            <!-- timeline Item -->
                            <div class="timeline-item">
                                <div class="circle-dot"></div>
                                <h6 class="timeline-date">
                                    <i class="fa fa-calendar"></i>2020
                                </h6>
                                <h4 class="timeline-title">JavaScript Programming training </h4>
                                <p class="timeline-text">
                                    Innovation Center of Kosovo <br>
                                    The training included JavaScript core concepts and functionality, DOM
                                    manipulation, ES6, Node, NPM, React JS & REST APIs.</p>
                            </div>
                            <!-- timeline Item End -->
                            <!-- timeline Item -->
                            <div class="timeline-item">
                                <div class="circle-dot"></div>
                                <h6 class="timeline-date">
                                    <i class="fa fa-calendar"></i>2015-2018
                                </h6>
                                <h4 class="timeline-title">Techstitution 3.0 training </h4>
                                <p class="timeline-text">
                                    Open Data Kosovo <br>
                                    I have been part of a project that as a purpose had contributing to the
                                    development of digital solutions for public institutions where we built a
                                    web application for the municipality of Gjilan. </p>
                            </div>
                            <!-- timeline Item End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- My Work -->
    <section class="my-work" id="work">
        <h2 class="section__title section__title--work">My work</h2>
        <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>


        <div class="portfolio">
            <!-- Portfolio item 01 -->
            <a href="https://github.com/BleonaKonjuhi/PI_Gr20" target="_blank" class="portfolio__item">

                <img src="images/travel.png" alt="" height=258px class="portfolio__img">
            </a>

            <!-- Portfolio item 02 -->
            <a href="https://github.com/aurolazeneli/KNK_GR_8" target="_blank" class="portfolio__item">
                <img src="images/medical.png" alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 03 -->
            <a href="https://github.com/aurolazeneli/DS_1920_Gr20" target="_blank" class="portfolio__item">
                <img src="images/secure.jpg" height=258px alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 04 -->
            <a href="https://github.com/aurolazeneli/AUROLA_ZENELI_p1" target="_blank"  class="portfolio__item">
                <img src="images/socket.png"  alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 05 -->
            <a href="https://aurolazeneli.github.io/KONTRATAT/" target="_blank" class="portfolio__item">
                <img src="images/kontrata.png" height=258px alt="" class="portfolio__img">
            </a>

            <!-- Portfolio item 06 -->
            <a href="https://github.com/aurolazeneli/SPEAKUP" target="_blank" class="portfolio__item">
                <img src="images/speak.png" height=258px alt="" class="portfolio__img">
            </a>

        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        <!-- replace with your own email address -->
        <a href="mailto:zeneliaurola@gmail.com" class="footer__link">zeneliaurola@gmail.com</a>
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-list__link" href="https://www.facebook.com/aurola.zeneli">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href="http://linkedin.com">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href="https://github.com/aurolazeneli">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </footer>


    <script src="js/index.js"></script>

</body>

</html>