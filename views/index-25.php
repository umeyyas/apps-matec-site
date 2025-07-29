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
        body.matec-2025 h1 {
            font-size: 4rem;
        }

        body.matec-2025 .w-max-1500 {
            max-width: 1500px;
        }

        body.matec-2025 .event-details h4 {
            font-weight: 300;
        }

        #matecGallery {
            --f-carousel-gap: 5px;
            --f-carousel-slide-width: calc(100%/3);
            --f-carousel-slide-padding: 0px 10px;
            /*--f-carousel-slide-bg: #eee;*/
        }

        #intro-hero {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        #intro-hero header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 2;
        }

        #intro-hero .inner-body-container {
            position: relative;
            z-index: 3;
        }

        #intro-hero .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: 1;
        }

        #intro-hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Overlay detail-activities text on top of activity images */
        .detail-activities {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            text-align: center;
            z-index: 2;
        }

        /* Ensure columns act as positioning context */
        .activities-wrapper > [class^="col-"] {
            position: relative;
        }

        @media (max-width: 767px) {
            body.matec-2025 h1 {
                font-size: 2rem;
            }
            body.matec-2025 .counter-statistic h5 {
                font-size: 0.9rem;
            }
            #matecGallery {
                --f-carousel-slide-width: 100%;
                --f-carousel-slide-padding: 0;
            }
        }
    </style>

</head>
<body class="matec-2025">

<section id="intro-hero">
    <video src="<?= asset('video/background.mp4') ?>" autoplay muted loop playsinline></video>
    <div class="video-overlay"></div>

    <header>
        <div id="count-down-sect" class="container-fluid bg-dark">
            <div class="container">Counter</div>
        </div>

        <nav id="navbar-sect" class="navbar navbar-expand-lg container-fluid navbar-dark">
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item">
                    <a class="icon icon-rect icon-white fa-facebook" href="https://www.facebook.com/mymatecofficial" target="_blank">
                        <div class="icon-rect-overlay"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="icon icon-rect icon-white fa-instagram" href="https://www.instagram.com/mymatecofficial" target="_blank">
                        <div class="icon-rect-overlay"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="icon icon-rect icon-white fa-tiktok" href="https://www.tiktok.com/@mymatecofficial" target="_blank">
                        <div class="icon-rect-overlay"></div>
                    </a>
                </li>
            </ul>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#matecNav" aria-controls="matecNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="matecNav">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item d-lg-none mb-2">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="icon icon-rect icon-white fa-facebook" href="https://www.facebook.com/mymatecofficial" target="_blank"><div class="icon-rect-overlay"></div></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icon icon-rect icon-white fa-instagram" href="https://www.instagram.com/mymatecofficial" target="_blank"><div class="icon-rect-overlay"></div></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="icon icon-rect icon-white fa-tiktok" href="https://www.tiktok.com/@mymatecofficial" target="_blank"><div class="icon-rect-overlay"></div></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="the-ideas">The Ideas</a></li>
                    <li class="nav-item"><a class="nav-link" href="partnership">Partnership</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq">F.A.Q</a></li>
                    <li class="nav-item"><a class="nav-link" href="call-us">Call Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container text-white inner-body-container">
        <div class="logo-matec mx-auto">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-6 mx-auto px-0">
                    <img src="<?= asset('images/asset-logo-mara-kkdw.png') ?>" alt="" class="img-fluid mb-md-5 mb-4">
                </div>
            </div>
            <div class="row mt-0">
                <div class="col-lg-6 col-sm-9 col-11 mx-auto px-0">
                    <img src="<?= asset('images/asset-matec2025.png') ?>" alt="" class="img-fluid mb-5">
                </div>
            </div>
        </div>
        <div class="contain-details">
            <div class="event-details">
                <h4 class="text-white text-center">
                    <span class="d-block d-md-inline">31 OCTOBER - 2 NOVEMBER 2025</span>
                    <span class="d-none d-md-inline"> | </span>
                    <span class="d-block d-md-inline">STADIUM NASIONAL BUKIT JALIL PARKING A & B</span>
                </h4>
                <div class="text-center mt-5">
                    <a href="" class="btn-custom" data-fancybox data-src="#enquiry-popup">Enquiry</a>
                    <a href="<?= asset('pdf/matec2025_event_deck_v1.1.pdf') ?>" class="btn-custom" target="_blank">About MATEC</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-carousel-gallery" class="py-150">
    <div class="container-fluid w-max-1500">
        <div class="row">
            <div class="col-md-12">
                <h5 class="mb-10">MATEC Gallery</h5>
            </div>
        </div>
        <div id="matecGallery" class="f-carousel">
            <div class="f-carousel__viewport">
                <div class="f-carousel__track">
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-01.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-01.webp') ?>" class="img-fluid" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-02.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-02.webp') ?>" class="img-fluid" alt="Gallery Image 2">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-03.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-03.webp') ?>" class="img-fluid" alt="Gallery Image 3">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-04.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-04.webp') ?>" class="img-fluid" alt="Gallery Image 4">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-05.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-05.webp') ?>" class="img-fluid" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-06.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-06.webp') ?>" class="img-fluid" alt="Gallery Image 2">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-07.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-07.webp') ?>" class="img-fluid" alt="Gallery Image 3">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/gallery-442x525px-08.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/gallery-442x525px-08.webp') ?>" class="img-fluid" alt="Gallery Image 4">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-600 pb-100" style="background: black url('<?= asset('images/2025/bg-hero.png') ?>') no-repeat top center;">
    <div class="container-fluid w-max-1500 pb-50">
        <h1 class="text-center text-white">World's Tastiest <br> Flavours</h1>
        <div class="row">
            <div class="col-md-11 col-12 mx-auto">
                <div class="card">
                    <div class="card-body counter-statistic">
                        <div class="row">
                            <div class="col-md-3 col-6 pt-20 pb-25">
                                <h1 class="text-center">45,000+</h1>
                                <h5 class="text-center">Total Visitors</h5>
                            </div>
                            <div class="col-md-3 col-6 py-20">
                                <h1 class="text-center">120+</h1>
                                <h5 class="text-center">Exhibitor</h5>
                            </div>
                            <div class="col-md-3 col-6 py-20">
                                <h1 class="text-center">15</h1>
                                <h5 class="text-center">Countries</h5>
                            </div>
                            <div class="col-md-3 col-6 py-20">
                                <h1 class="text-center">30+</h1>
                                <h5 class="text-center">Talk Sessions</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid w-max-1500 pt-50">
        <div class="row activities-wrapper">
            <div class="col-md-12">
                <h5 class="text-white mb-10">Activities</h5>
            </div>
            <div class="col-md-4">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?= asset('images/2025/carshow.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?= asset('images/2025/motoshow.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-4">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?= asset('images/2025/pushbike.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?= asset('images/2025/pushbike.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?= asset('images/2025/pushbike.png') ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<footer>

</footer>

<?php require "layouts/__js.php" ?>

<script>
    $(function () {
        var $hero = $('#intro-hero');

        function resizeHero() {
            $hero.height($(window).height());
        }

        resizeHero();
        $(window).on('resize', resizeHero);
    });
</script>

<script>
    new Carousel(document.getElementById("matecGallery"), {
        // Display four images side by side on larger screens
        slidesPerPage: 4,
        Autoplay: {
            timeout: 8000,
            pauseOnHover: true,
        },
        // On small devices only one image should be visible
        breakpoints: {
            "(max-width: 767px)": {
                slidesPerPage: 1
            }
        }
    }, {
        Autoplay
    });
</script>

</body>
</html>