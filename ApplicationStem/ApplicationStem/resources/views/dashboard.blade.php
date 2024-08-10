
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet de mémoire:Page d'accueil</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="dashboard"><i class="fas fa-graduation-cap"></i>STEMLab
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ListeTP">Travaux Pratiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ListeQuiz">Quizzes</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class=" btn-style" type="submit">Se Déconnecter</button>
                            </form>

                        </li>
                    </ul>
                    <!-- search-right -->
                    <div class="header-search position-relative">
                        <div class="search-right mx-lg-2">
                            <a href="#search" class="btn search-btn p-0" title="search">
                                <i class="fas fa-search"></i></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <form action="#search" method="GET" class="search-box">
                                        <input type="search" placeholder="Enter Keyword..." name="search"
                                            required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search"
                                                aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- //search popup -->
                        </div>
                    </div>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">UNE PLATEFORME<br>POUR TOUS VOS BESOINS<span class="d-block">D'APPRENTISSAGE</span>
                        </h3>
                        <p class="banner-sub">Nous avons pour mission d'élever une<br>nouvelle génération de prodiges de<br>l'éducation </p>
                        <div class="d-flex align-items-center buttons-banner">

                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <div class="sub-banner-image mx-auto">
                            <img src="photos\Nouveau photos\b1.png" class="img-fluid position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 position-absolute">
                            <div class="banner-style-2 position-relative">
                                <h4>Retour à l’école</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- home 4grids block -->
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Qualités Remarquable</p>
                <h3 class="title-style">Atteignez vos objectifs avec votre application</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon"><i class="fas fa-user-friends"></i></div>
                        <h4 class="title"><a href="#about">Formateurs Qualifiés</a></h4>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><i class="fas fa-book-reader"></i></div>
                        <h4 class="title"><a href="#about">Éducation de qualité</a></h4>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <div class="icon"><i class="fas fa-user-graduate"></i></div>
                        <h4 class="title"><a href="#about">Assistance Pratique</a></h4>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <div class="icon"><i class="fas fa-university"></i></div>
                        <h4 class="title"><a href="#about">Résultats Claire et Précises</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home 4grids block -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="photos\Nouveau photos\2.jpg" alt="" class="img-fluid radius-image">
                    </div>

                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">Nous sommes le meilleur choix pour votre enfant</h3>
                    <p class="mt-4">Dans cette plateforme, nous offrons une éducation de qualité avec
                        des travaux pratiques et dirigés d'excellence.
                        Notre environnement stimulant et notre engagement envers chaque élève
                        garantissent à votre enfant les outils nécessaires pour réussir et s'épanouir.</p>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Éducation spécialisée</li>
                        <li><i class="fas fa-check-circle"></i>Accédez aux cours de SVT en Terminale</li>
                        <li><i class="fas fa-check-circle"></i>Accédez aux cours de la chimie en 4em</li>
                        <li><i class="fas fa-check-circle"></i>Accédez aux Travaux Dirigés</li>
                        <li><i class="fas fa-check-circle"></i>Accédez aux Travaux Pratiques</li>
                        <li><i class="fas fa-check-circle"></i>Accédez aux résultats</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Meilleurs Cours</p>
                <h3 class="title-style">Trouvez le cours qui vous convient</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos\Nouveau photos\svt.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">SVT</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-2 mt-2">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 4 Leçons</li>
                                </ul>
                            </div>

                            <ul class="mt-4 list-style-lis pt-lg-1">
                                <h4><a href="courses.html">Programmes SVT</a></h4>
                                <li><i class="fas fa-check-circle"></i>Role du Système Nerveux dans le comportement Moteur d'un Animal</li>
                                <li><i class="fas fa-check-circle"></i>Organisation de l'Encéphale</li>
                                <li><i class="fas fa-check-circle"></i>Organisation de la Moelle Epinière</li>
                                <li><i class="fas fa-check-circle"></i>Organisation du Tissu Nerveux</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos\Nouveau photos\chimie.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-2">CHIMIE</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> 5 Leçons</li>

                                </ul>
                            </div>
                            <ul class="mt-4 list-style-lis pt-lg-1">
                                <h4><a href="courses.html">Programmes CHIMIE</a></h4>
                                <li><i class="fas fa-check-circle"></i>Mélanges et Corps Purs</li>
                                <li><i class="fas fa-check-circle"></i>Moles et Grandeurs Molaires</li>
                                <li><i class="fas fa-check-circle"></i>Notion de Réaction Chimique</li>
                                <li><i class="fas fa-check-circle"></i>Structure de la Matière</li>
                                <li><i class="fas fa-check-circle"></i>Masse: Masse Volumique et Densité</li>
                            </ul>

                        </div>
                    </div>
                </div>


                </div>
            </div>

        </div>
    </div>
    <!-- //courses section -->

    <footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5 pb-4">
            <div class="container pt-md-4">
                <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2">© 2024 STELab. Tous droits réservés. Design
                    par <a href="https://w3layouts.com/" target="_blank">MbayeManga</a></p>
                <!-- //copyright -->
            </div>
        </div>
    </footer>

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>
