<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: About MATEC</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="<?= asset('images/favicon_io/favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('images/favicon_io/android-chrome-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('images/favicon_io/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('images/favicon_io/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= asset('images/favicon_io/site.webmanifest') ?>">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php require 'layouts/__css.php' ?>

</head>
<body>

    <?php require 'layouts/loader.php' ?>

    <div class="page">

        <!-- Section Header Default-->
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="76px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <!--<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>-->
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand-->
                                    <a class="brand" href="/">
                                        <img class="brand-logo-dark" src="<?= asset('images/matec-logo.png') ?>" srcset="<?= asset('images/matec-logo@2x.png 2x') ?>" alt="MATEC 2024"/>
                                        <img class="brand-logo-light" src="<?= asset('images/matec-logo.png') ?>" srcset="<?= asset('images/matec-logo@2x.png 2x') ?>" alt="MATEC 2024"/>
                                    </a>
                                </div>

                            </div>
                            <!-- Rd Navbar Navigation-->
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">

                                    </ul>
                                </div>
                            </div>
                            <!-- RD Navbar Collapse-->
                            <div class="rd-navbar-collapse d-sm-block d-none">
                                <!--<a class="button button-primary" href="http://apps.matec.my/visitor/register" data-triangle=".button-overlay">
                                    <span>Visitor</span><span class="button-overlay"></span>
                                </a>-->
                                <a class="button button-primary-blue mt-0" href="http://apps.matec.my/exhibitor/login" data-triangle=".button-overlay">
                                    <span>Register Here</span><span class="button-overlay"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="d-block d-sm-none navbar-fixed-mobile w-100">
            <div class="row row-0 d-flex align-items-center">
                <!--<div class="col-6 px-0">
                    <a class="button px-0 w-100 text-center button-primary py-4" href="http://apps.matec.my/visitor/register" data-triangle=".button-overlay">
                        <span>Visitor</span><span class="button-overlay"></span>
                    </a>
                </div>-->

                <div class="col-12 px-0">
                    <a class="button px-0 w-100 text-center button-primary-blue py-4" href="http://apps.matec.my/exhibitor/login" data-triangle=".button-overlay">
                        <span>Register Here</span><span class="button-overlay"></span>
                    </a>
                </div>
            </div>
        </div>


        <!-- Section Swiper Slider-->
        <section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
            <!-- Waves-->
            <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
            <!-- Swiper Content-->
            <div class="section-swiper-content d-sm-flex d-block align-items-center">
                <div class="container">
                    <h4 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">
                        Become part of Malaysia’a largest automotive ecosystem fair and enjoy all benefits and programs to help you grow your business. Let’s join and be apart of MATEC2024.
                    </h4>
                    <div class="row row-30 justify-content-lg-center">
                        <div class="col-md-3">
                            <!--a href="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" type="application/pdf" target="_blank"-->
                                <div class="card">
                                    <div class="card-body p-1">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-5">
                                                <img src="<?= asset('images/matec-images/ex_001.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                                            </div>
                                            <div class="col-md-12 col-7 pl-sm-2 pl-0">
                                                <h5 class="mt-3 mb-3" style="color:#000;">MATEC2024 Event Brief</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <!--a href="<?= asset('pdf/MATEC2024_Partnership Deck_v2 14082024.pdf') ?>" type="application/pdf" target="_blank"-->
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_002.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Partnership Deck_v2 14082024.pdf') ?>" >
                                        </div>
                                        <div class="col-md-12 col-7 pl-sm-2 pl-0">
                                            <h5 class="mt-3 mb-3" style="color:#000;">MATEC2024 Partnership Packages</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                        <div class="col-md-3">
                            <!--a href="<?= asset('pdf/MATEC2024_Final_Layout_29072024.pdf') ?>" type="application/pdf" target="_blank"-->
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_003.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Final_Layout_29072024.pdf') ?>">
                                        </div>
                                        <div class="col-md-12 col-7 pl-sm-2 pl-0">
                                            <h5 class="mt-3 mb-3" style="color:#000;">MATEC2024 Full Layout</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" data-fancybox data-src="#exhibitor_faq">
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_004.png') ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-12 col-7 pl-sm-2 pl-0">
                                            <h5 class="mt-3 mb-3" style="color:#000;">EXHIBITOR F.A.Q</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                    </div>
                    <!--<h5 class="mt-5 font-weight-normal text-capitalize">
                        Please click to view
                    </h5>-->
                </div>

            </div>
            <!-- Swiper Slider Absolute-->
            <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-simulate-touch="false" data-autoplay="8500" data-direction="horizontal" data-effect="fade">
                <div class="swiper-wrapper">
                    <!-- Swiper Slide 01-->
                    <div class="swiper-slide" data-slide-bg="<?= asset('images/matec-slide.png') ?>"></div>
                    <!-- Swiper Slide 02-->
                    <!--<div class="swiper-slide" data-slide-bg="<?php /*= asset('images/slide-02-1894x1042.jpg') */?>"></div>-->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <?php include "layouts/footer.php"; ?>

    </div>

    <div id="exhibitor_faq" class="p-0 mt-xs-0 mt-5" style="display: none; max-width:820px;">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-4">EXHIBITOR - FREQUENTLY ASK QUESTION</h3>
                <div class="accordion" id="accordionExhibitor">
                    <div class="card">
                        <div class="card-header" id="headingExhibitorOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExhibitorOne" aria-expanded="true" aria-controls="collapseExhibitorOne">
                                    How many exhibitors can you accommodate?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseExhibitorOne" class="collapse show" aria-labelledby="headingExhibitorOne" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                Over 150 exhibitors with the various of spaces.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingExhibitorTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorTwo" aria-expanded="false" aria-controls="collapseExhibitorTwo">
                                    What size spaces do you have available?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseExhibitorTwo" class="collapse" aria-labelledby="headingExhibitorTwo" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                For more info, please click Exhibitor button and refer to MATEC2024 Event Brief (Page 15 and 16).
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingExhibitorThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorThree" aria-expanded="false" aria-controls="collapseExhibitorThree">
                                    How much does it cost to exhibit?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseExhibitorThree" class="collapse" aria-labelledby="headingExhibitorThree" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                For more info, please click Exhibitor button and refer to MATEC2024 Event Brief (Page 16 and 17 ).
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingExhibitorFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorFour" aria-expanded="false" aria-controls="collapseExhibitorFour">
                                    Do you offer a shell scheme?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseExhibitorFour" class="collapse" aria-labelledby="headingExhibitorFour" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                Yes, we have two sizes for shell scheme booth which are (3mx3m) and (6mx3m).
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingExhibitorFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorFive" aria-expanded="false" aria-controls="collapseExhibitorFive">
                                    Do you have sponsorship packages available?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseExhibitorFive" class="collapse" aria-labelledby="headingExhibitorFive" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                Yes we do and we are seeking for a various type of sponsorship. Please refer to Partnership page. Please contact us if you have any inquiries.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingExhibitorSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorSix" aria-expanded="false" aria-controls="collapseExhibitorSix">
                                    Can we sponsor the event without exhibiting?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseExhibitorSix" class="collapse" aria-labelledby="headingExhibitorSix" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                Yes. We are aware that under certain circumstances it's not always ideal for you to exhibit but may well like to advertise your presence at the event.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingExhibitorSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorSeven" aria-expanded="false" aria-controls="collapseExhibitorSeven">
                                    Is there accommodation or public transport near by?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseExhibitorSeven" class="collapse" aria-labelledby="headingExhibitorSeven" data-parent="#accordionExhibitor">
                            <div class="card-body">
                                There are Bukit Jalil LRT Station near by and a few hotels on site with many a short car ride away.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require "layouts/__js.php" ?>

    <script>
        Fancybox.bind('[data-fancybox]', {
            // Custom options for all galleries
        });

        $(document).ready(function() {
            $('.newtab').on('click', function(event) {
                event.preventDefault();
                var pdfUrl = $(this).data('pdf-url');
                window.open(pdfUrl, '_blank');
            });
        });
    </script>



</body>
</html>
