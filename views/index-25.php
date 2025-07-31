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
                    <a href="views/visitor.php" class="btn-big-red set-to-blue">Visitor</a>
                    <a href="/2025/exhibitor" class="btn-big-red">Exhibitor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-about" class="py-150 bg-image-section bg-image-section-efx-grey bg-cover-section" style="background-image: url(<?= asset('images/2025/bg_vanue1280.png') ?>)">
    <div class="container-fluid w-max-1500">
        <h4 class="text-center text-white">MARA AUTOMOTIVE ECOSYSTEM</h4>
        <p class="text-center text-white">The Entrepreneurial Engine is a concept that focuses on fostering innovation and growth within the automotive industry through  entrepreneurial initiatives. This approach emphasizes the importance of startups, small businesses, and independent innovators in  driving advancements and competitiveness in the sector. By leveraging the agility and creativity of these entities, the automotive industry can accelerate the development of cutting-edge technologies, such as electric vehicles, autonomous driving systems, and advanced manufacturing processes.</p>
    </div>
</section>

<section id="matec-venue" class="py-200 bg-image-section bg-image-section-efx-grey bg-cover-section venue-asset" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-03.png') ?>)">
    <div class="container-fluid w-max-1500">
        <div class="row">
            <div class="col-12 col-md-5 order-2 order-md-1">
                <img src="<?= asset('images/2025/bukit_jalil_layout1280.png') ?>" alt="" class="img-fluid mb-sm-0 mb-4">
            </div>
            <div class="col-md-2 d-none d-md-block order-2 order-md-2"></div>
            <div class="col-12 col-md-5 order-1 order-md-3">
                <img src="<?= asset('images/2025/title_vanue1280.png') ?>" alt="" class="img-fluid mb-sm-0 mb-4">
            </div>
        </div>
    </div>
</section>

<section id="matec-date" class="py-150 bg-image-section bg-image-section-efx-grey bg-cover-section" style="background-image: url(<?= asset('images/2025/bg_event1280.png') ?>)">
    <div class="container-fluid w-max-1500">
        <h4 style="font-weight:300;" class="text-center text-white mb-40">EVENT DATE</h4>
        <h2 class="text-center text-white">31 OCTOBER - 2 NOVEMBER</h2>
        <h1 class="text-center text-white year-display">2025</h1>
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
</section>

<section id="matec-about" class="pt-100 pb-50" style="background-color: #e6e6e6;">
    <div class="container-fluid w-max-1500">
        <p class="text-center">Presenting the inaugural MARA Automotive Ecosystem exhibition, a groundbreaking event that brings a fresh wave of excitement to Malaysians nationwide. MATEC2025 is more than just a conventional showcase — it's a dynamic platform brimming with opportunities, catering not only to entrepreneurs but also to visitors from all walks of life. Prepare to explore innovative ideas, connect with industry experts, and uncover endless possibilities in this one-of-a-kind experience.</p>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img src="<?= asset('images/2025/title_expectation1280.png') ?>" alt="" class="img-fluid mb-15">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12 mx-auto">
                <img src="<?= asset('images/2025/group1280.png') ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section id="matec-activities" class="py-150" style="background: #000000;">
    <div class="container-fluid w-max-1500">
        <div class="row activities-wrapper">
            <div class="col-md-12">
                <h5 class="text-white mb-10">Activities</h5>
            </div>
            <div class="col-md-4 mb-35">
                <div class="detail-activities text-white mt-15">
                    <h4 class="text-white">AUTOSHOW <br> HIGHLIGHT</h4>
                    <p>Seamless design meets <br> long-lasting power</p>
                </div>
                <img src="<?= asset('images/2025/activities/Activities-11.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 mb-35">
                <div class="detail-activities text-white mt-15">
                    <h4 class="text-white">TWO-WHEEL <br> THRILLS</h4>
                    <p>Built for convenience, <br> made to endure</p>
                </div>
                <img src="<?= asset('images/2025/activities/Activities-12.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 mb-35">
                <div class="detail-activities text-white mt-15">
                    <h4 class="text-white">PUSH BIKE</h4>
                    <p>Where passion <br> meets pedal power <br> all day long</p>
                </div>
                <img src="<?= asset('images/2025/activities/Activities-10.png') ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 mb-35">
                <a href="https://www.mara.gov.my/en/index/" target="_blank">
                    <div class="detail-activities text-white pl-60">
                        <h1 class="text-white">VISIT <br> MARA</h1>
                    </div>
                    <img src="<?= asset('images/2025/faq_mara_14.webp') ?>" alt="" class="img-fluid border-radius-20">
                </a>
            </div>
            <div class="col-md-6 mb-35">
                <a href="/2025/faq">
                    <div class="detail-activities text-white pl-60">
                        <h1 class="text-white">FREQUENTLY <br> ASKED <br> QUESTIONS</h1>
                    </div>
                    <img src="<?= asset('images/2025/faq_mara_13.webp') ?>" alt="" class="img-fluid border-radius-20">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="matec-more-excitement" class="py-150" style="background: #ffffff;">
    <div class="container-fluid w-max-1500">
        <div class="row">
            <div class="col-md-4 position-relative">
                <div class="detail-activities text-white">
                    <h4 class="text-white">TWO-WHEEL THRILLS</h4>
                    <p>Built for convenience, made to endure</p>
                </div>
                <img src="<?= asset('images/2025/discover01.webp') ?>" alt="" class="img-fluid border-radius-20">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-30 position-relative">
                        <div class="detail-activities text-white">
                            <h4 class="text-white">TWO-WHEEL THRILLS</h4>
                            <p>Built for convenience, made to endure</p>
                        </div>
                        <img src="<?= asset('images/2025/nasty-hq.webp') ?>" alt="" class="img-fluid border-radius-20">
                    </div>
                    <div class="col-md-12 position-relative">
                        <div class="detail-activities text-white">
                            <h4 class="text-white">TWO-WHEEL THRILLS</h4>
                            <p>Built for convenience, made to endure</p>
                        </div>
                        <img src="<?= asset('images/2025/nasty-hq.webp') ?>" alt="" class="img-fluid border-radius-20">
                    </div>
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <div class="detail-activities text-white">
                    <h4 class="text-white">TWO-WHEEL THRILLS</h4>
                    <p>Built for convenience, made to endure</p>
                </div>
                <img src="<?= asset('images/2025/discover01.webp') ?>" alt="" class="img-fluid border-radius-20">
            </div>
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

    <script>
        // Equalize height for each column in the "More Excitement" section
        function setEqualHeightMatecMore() {
            var $cols = $('#matec-more-excitement .col-md-4');

            // Reset height on small screens
            if (window.innerWidth < 768) {
                $cols.css('height', '');
                return;
            }

            var mb = parseInt($('.mb-35:first').css('margin-bottom')) || 0;
            var maxHeight = 0;

            $cols.each(function () {
                var countMb = $(this).find('.col-md-12.mb-35').length;
                var currentHeight = $(this).outerHeight() - (mb * countMb);
                if (currentHeight > maxHeight) {
                    maxHeight = currentHeight;
                }
            });

            $cols.height(maxHeight);
        }

        $(function () {
            setEqualHeightMatecMore();
            $(window).on('resize', setEqualHeightMatecMore);
        });
    </script>

</body>
</html>