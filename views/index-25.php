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


</head>
<body class="matec-2025">

<section id="intro-hero">
    <video src="<?= asset('video/background.mp4') ?>" autoplay muted loop playsinline></video>
    <div class="video-overlay"></div>

    <?php include "layouts/navbar-25.php"; ?>

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
                    <span class="d-block d-md-inline">STADIUM NASIONAL BUKIT JALIL KUALA LUMPUR</span>
                </h4>
                <div class="text-center mt-5 button-container">
                    <a href="#" class="btn-big-blue">Visitor</a>
                    <a href="/2025/exhibitor" class="btn-big-red">Exhibitor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-carousel-gallery" class="py-100">
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

<section class="pt-600 pb-100" style="background: #000000 url('<?= asset('images/2025/bg-hero.png') ?>') no-repeat top center;">
    <div class="container-fluid w-max-1500 pb-50">
        <h1 class="text-center text-white">MATEC2024 STATISTIC</h1>
        <div class="row">
            <div class="col-md-11 col-12 mx-auto">
                <div class="card">
                    <div class="card-body counter-statistic">
                        <div class="row">
                            <div class="col-md-3 col-6 pt-20 pb-25">
                                <h1 class="text-center">26,550+</h1>
                                <h5 class="text-center">Total Visitors</h5>
                            </div>
                            <div class="col-md-3 col-6 py-20">
                                <h1 class="text-center">158+</h1>
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
            <div class="col-md-4 mb-35">
                <div class="detail-activities text-white mt-15">
                    <h4 class="text-white">AUTOSHOW <br> HIGHLIGHT</h4>
                    <p>Seamless design meets <br> long-lasting power</p>
                </div>
                <img src="<?= asset('images/2025/activities/Activities-10.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 mb-35">
                <div class="detail-activities text-white mt-15">
                    <h4 class="text-white">TWO-WHEEL <br> THRILLS</h4>
                    <p>Built for convenience, <br> made to endure</p>
                </div>
                <img src="<?= asset('images/2025/activities/Activities-11.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 mb-35">
                <div class="detail-activities text-white mt-15">
                    <h4 class="text-white">PUSH BIKE</h4>
                    <p>Where passion <br> meets pedal power <br> all day long</p>
                </div>
                <img src="<?= asset('images/2025/activities/Activities-12.png') ?>" alt="" class="img-fluid">
            </div>
            <!--<div class="col-md-6 mb-35">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?php /*= asset('images/2025/pushbike.png') */?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 mb-35">
                <div class="detail-activities text-white">
                    <h4 class="text-white">Disposable Vape</h4>
                    <p>Ultimate convenience and long-lasting performance</p>
                </div>
                <img src="<?php /*= asset('images/2025/pushbike.png') */?>" alt="" class="img-fluid">
            </div>-->
        </div>
    </div>
</section>

<?php include "layouts/footer.php"; ?>

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