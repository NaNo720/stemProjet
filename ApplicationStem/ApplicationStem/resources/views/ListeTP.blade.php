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
    <title>Liste des TP</title>
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
                <a class="navbar-brand" href="/dashboard"><i class="fas fa-graduation-cap"></i>STEMLab
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
                            <a class="nav-link" aria-current="page" href="/dashboard">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="listeTp">Liste Des Travaux Pratiques</a>
                        </li>
                       >
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

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title pt-5">Travaux Pratiques</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/dashboard">Accueil</a></li>
                    <li class="active"><i class="fas fa-angle-right"></i>Travaux Pratiques</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!--------------------------------- Section TPS------------------------------------------>
    <div class="w3l-grids-block-5 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Meilleurs TPs</p>
                <h3 class="title-style">Trouvez Ce qu'il vous faut</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/labo.jpeg" alt="" />
                            <div class="meta-list">
                                <a href="tp/CoupeCerveau/index.html">TP 01</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="tp/CoupeCerveau/index.html">SVT: Coupe-Cerveau</a></h4>
                            <h6>Role du système Nerveux dans le comportement Moteur d'un Animale</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="tp/CoupeCerveau/index.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/molecule.jpg" alt=""  />
                            <div class="meta-list">
                                <a href="tp\ElectrolyseurVirtuel\ElectroliseurVirtuel\index.html" class="sec-2">TP 02</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="tp\ElectrolyseurVirtuel\ElectroliseurVirtuel\index.html">CHIMIE Mélange et Corps Purs</a></h4>
                            <h6>Electrolyse de l'Eau</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="tp\ElectrolyseurVirtuel\ElectroliseurVirtuel\index.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/labo.jpeg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="tp/coupeCoronal.html">TP 03</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="tp/coupeCoronal.html">SVT</a></h4>
                            <h6>Organisation de l'Encéphale</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="tp/coupeCoronal.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/molecule.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="tp\Equilibre\index.html" class="sec-2">TP 04</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="tp\Equilibre\index.html">CHIMIE</a></h4>
                            <h6>Equilibre</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="tp\Equilibre\index.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/labo.jpeg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="tp/coupeSagital.html">TP 05</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="tp/coupeSagital.html">SVT</a></h4>
                            <h6>Organisation de la Moelle épinière</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="tp/coupeSagital.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/molecule.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="\tp\SimulationGaz\imdex5.html" class="sec-2">TP 06</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="\tp\SimulationGaz\imdex5.html"></a>CHIMIE Notion de Réaction chimique</h4>
                            <h6>Simulation Gaz</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="\tp\SimulationGaz\imdex5.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/molecule.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-2">TP 07</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="courses.html"></a>CHIMIE</h4>
                            <h6>Structure de la matière</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="courses.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/labo.jpeg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="tp/coupeTransversalCerveau.html">TP 08</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="tp/coupeTransversalCerveau.html"></a>SVT</h4>
                            <h6>Organisation du tissu Nerveux</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="tp/coupeTransversalCerveau.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="photos/molecule.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-2">TP 09</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <h4><a href="courses.html">CHIMIE</a></h4>
                            <h6>Masse: Masse volumiques et densité</h6>
                            <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <a class="btn btn-style-primary" href="courses.html">Voir<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            <!-- pagination -->
            <div class="pagination-style text-center mt-5">
                <ul>
                    <li> <a href="#none" class="not-allowed" disabled="">
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li><a class="active" href="#page">1</a></li>
                    <li>
                        <a href="#page">2</a>
                    </li>
                    <li>
                        <a href="#page">3</a>
                    </li>
                    <li>
                        <a href="#page"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //pagination -->
        </div>
    </div>
    <!-- //courses section -->

    <footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5 pb-4">
            <div class="container pt-md-4">
                {{-- <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 footer-list-29">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <p class="mb-2 pe-xl-5">Address : Edu School, 10001, 5th Avenue, #06 lane street, NY - 62617.
                        </p>
                        <p class="mb-2">Phone Number : <a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                        <p class="mb-2">Email : <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Quick Links</h6>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="#become-teacher">Become a Teacher</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#career">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Explore</h6>
                            <li><a href="#blog">Blog Posts</a></li>
                            <li><a href="#privacy">Privacy policy</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#license">License & uses</a></li>
                            <li><a href="#tutorials">Tutorials</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 mt-lg-0 mt-4 ps-lg-5">
                        <h6 class="footer-title-29">Subscribe</h6>
                        <form action="#" class="subscribe d-flex" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane"
                                    aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-3">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div> --}}
                <!-- copyright -->
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
