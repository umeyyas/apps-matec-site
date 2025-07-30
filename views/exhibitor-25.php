<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2025 :: MARA AUTOMOTIVE ECO-SYSTEMS 2025</title>

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

    <?php require 'layouts/__css.php'; ?>

    <style>
        @media (max-width: 767.98px) {
            #intro-hero {
                min-height: 1500px !important;
            }
        }
    </style>

</head>
<body class="matec-2025">

<section id="intro-hero">
    <video src="<?= asset('video/background.mp4') ?>" autoplay muted loop playsinline></video>
    <div class="video-overlay"></div>

    <?php include "layouts/navbar-25.php"; ?>

    <div class="container-fluid w-max-1500 text-white inner-body-container">
        <h4 class="wow fadeScale text-center text-white" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">
            Become part of Malaysia’a largest automotive ecosystem fair and enjoy all benefits and programs to help you grow your business. Let’s join and be apart of MATEC2025.
        </h4>
        <div class="row">
            <div class="col-md-3 mb-sm-0 mb-35">
                <div class="card" style="background-image: url(<?= asset('images/2025/bg-exhibitor1820.webp') ?>)">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-7 order-2 order-sm-1">
                                <img src="<?= asset('images/2025/event_brief_icon.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/matec2025_event-deck-v2.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-5 pl-sm-2 pl-0 text-center order-1 order-sm-2 py-sm-auto d-flex align-items-center justify-content-center">
                                <h5 class="mt-3 mb-3" style="color:#ffffff;">MATEC2025 Event Brief</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-sm-0 mb-35">
                <div class="card" style="background-image: url(<?= asset('images/2025/bg-exhibitor1820.webp') ?>)">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-7 order-2 order-sm-1">
                                <img src="<?= asset('images/2025/partnership_icon.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-5 pl-sm-2 pl-0 text-center order-1 order-sm-2 d-flex align-items-center justify-content-center">
                                <h5 class="mt-3 mb-3" style="color:#ffffff;">MATEC2025 Partnership Packages</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-sm-0 mb-35">
                <div class="card" style="background-image: url(<?= asset('images/2025/bg-exhibitor1820.webp') ?>)">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-7 order-2 order-sm-1">
                                <img src="<?= asset('images/2025/event_layout_icon.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-5 pl-sm-2 pl-0 text-center order-1 order-sm-2 d-flex align-items-center justify-content-center">
                                <h5 class="mt-3 mb-3" style="color:#ffffff;">MATEC2025 Full Layout</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-sm-0 mb-35">
                <a href="javascript:void(0)" data-fancybox data-src="#exhibitor_faq">
                    <div class="card" style="background-image: url(<?= asset('images/2025/bg-exhibitor1820.webp') ?>)">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-7 order-2 order-sm-1">
                                    <img src="<?= asset('images/2025/exhibitor_icon.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                                </div>
                                <div class="col-md-12 col-5 pl-sm-2 pl-0 text-center order-1 order-sm-2 d-flex align-items-center justify-content-center">
                                    <h5 class="mt-3 mb-3" style="color:#ffffff;">EXHIBITOR F.A.Q</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

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
                            For more info, please click Exhibitor button and refer to MATEC2025 Event Brief (Page 15 and 16).
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
                            For more info, please click Exhibitor button and refer to MATEC2025 Event Brief (Page 16 and 17 ).
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

<?php include "layouts/footer.php"; ?>

<?php require "layouts/__js.php" ?>

<script>
    Fancybox.bind('[data-fancybox]', {
        // Custom options for all galleries
    });

    $(document).ready(function() {
        $('.newtab').on('click', function(event) {
            // Prevent PDF opening when the image is inside a Fancybox trigger
            if($(this).closest('a[data-fancybox]').length === 0) {
                event.preventDefault();
                var pdfUrl = $(this).data('pdf-url');
                if (pdfUrl) {
                    window.open(pdfUrl, '_blank');
                }
            }
        });

        function setEqualHeightExhibitorTitles() {
            var $titles = $('#intro-hero .col-md-12.col-5.pl-sm-2.pl-0.text-center.order-1.order-sm-2');
            $titles.css('height', '');
            if (window.innerWidth < 768) {
                return;
            }
            var maxH = 0;
            $titles.each(function() {
                var h = $(this).outerHeight();
                if (h > maxH) {
                    maxH = h;
                }
            });
            $titles.height(maxH);
        }

        function setEqualHeightExhibitorCards() {
            var $cards = $('#intro-hero .card-body');
            $cards.css('height', '');
            if (window.innerWidth < 768) {
                return;
            }
            var maxH = 0;
            $cards.each(function() {
                var h = $(this).outerHeight();
                if (h > maxH) {
                    maxH = h;
                }
            });
            $cards.height(maxH);
        }

        setEqualHeightExhibitorTitles();
        /*setEqualHeightExhibitorCards();*/
        $(window).on('resize', function() {
            setEqualHeightExhibitorTitles();
            /*setEqualHeightExhibitorCards();*/
        });
    });
</script>

</body>
</html>
