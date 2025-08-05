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

    <div class="container text-white inner-body-container mt-7">
        <div class="logo-matec mx-auto">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-6 mx-auto px-0">
                    <img src="<?= asset('images/asset-logo-mara-kkdw.png') ?>" alt="" class=" mb-md-5 mb-4">
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
                    <a href="/2025/visitor" class="btn-big-red">Visitor</a>
                    <a href="/2025/exhibitor" class="btn-big-red set-to-blue">Exhibitor</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-about"
         class="py-80 bg-image-section bg-image-section-efx-grey bg-cover-section bg-center bg-md-center bg-sm-right"
         style="background-image: url(<?= asset('images/2025/bg_vanue1280.png') ?>);">
    <div class="container-fluid w-max-1500">
        <h4 class="text-center text-white mb-3">MARA AUTOMOTIVE ECOSYSTEM</h4>
        <div class="text-white text-md-start text-center">
            <p>
                The <strong>Entrepreneurial Engine</strong> is a concept that focuses on fostering innovation and growth within the automotive<br>
                industry through entrepreneurial initiatives. This approach emphasizes the importance of startups, small businesses,<br>
                and independent innovators in driving advancements and competitiveness in the sector. By leveraging the agility and<br>
                creativity of these entities, the automotive industry can accelerate the development of cutting-edge technologies,<br>
                such as electric vehicles, autonomous driving systems, and advanced manufacturing processes.
            </p>
        </div>
    </div>
</section>

<section id="matec-venue" class="py-80 bg-image-section bg-image-section-efx-grey bg-cover-section venue-asset"
         style="background-image: url(<?= asset('images/matec-images/matec-bg-images-03.png') ?>)">
    <div class="container-fluid w-max-1500">
        <div class="row align-items-start">

            <!-- Left side: Stadium Layout Image -->
            <div class="col-12 col-md-5 order-2 order-md-1 text-center text-md-start">
                <div class="image-wrapper layout-image">
                    <img src="<?= asset('images/2025/bukit_jalil_layout1280.png') ?>"
                         alt="Stadium Layout"
                         class="img-fluid h-150">
                </div>
            </div>

            <!-- Right side: Venue Title Image + Location -->
            <div class="col-12 col-md-7 mb-4 order-1 order-md-3">
                <div class="text-center image-wrapper mb-2 mb-md-3">
                    <img src="<?= asset('images/2025/2x/artboard_3@2x.png') ?>"
                         alt="Venue Title"
                         class="img-fluid">
                </div>
                <div class="d-flex justify-content-end text-wrapper mt-4 mt-md-4">
                    <p class="venue-location-text text-end">
                        National Stadium Bukit Jalil, Kuala Lumpur
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="matec-date"
         class="bg-image-section bg-image-section-efx-grey bg-cover-section text-center py-4 py-md-5 py-lg-6"
         style="background-image: url(<?= asset('images/2025/bg_event1280.png') ?>);
                 background-repeat: no-repeat;
                 background-size: cover;
                 background-position: center;">
    <div class="container-fluid w-max-1200 bg-dark bg-opacity-50 py-4 rounded">
        <h4 class="fw-light mb-3" style="color: white;">EVENT DATE</h4>
        <h2 class="fs-4 fs-md-3" style="color: white;">31 OCTOBER - 2 NOVEMBER</h2>
        <h1 class="year-display display-6 display-md-4 display-lg-3" style="color: white;">2025</h1>
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
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_2.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_2.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_3.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_3.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_4.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_4.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_5.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_5.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_6.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_6.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_7.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_7.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="f-carousel__slide">
                        <a href="<?= asset('images/2025-gallery/matec-gallery-1842x2188_8.webp') ?>" data-fancybox="gallery">
                            <img src="<?= asset('images/2025-gallery/matec-gallery-1842x2188_8.webp') ?>" class="img-fluid border-radius-20" alt="Gallery Image 1">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-600 pb-100"
         style="background:#000000 url('<?= asset('images/2025/stats-1420x1030.webp') ?>') no-repeat top center;">
    <div class="container-fluid w-max-1500 pb-50">
        <div class="text-center">
            <img src="<?= asset('images/2025/1x/artboard_4.png') ?>"
                 alt="MATEC2024 STATISTIC"
                 class="img-fluid responsive-title-img">
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-body p-4 counter-statistic">
                        <div class="d-flex text-center w-100">
                            <div class="col stat-box">
                                <h1>26,550</h1>
                                <h5>Total Visitors</h5>
                            </div>
                            <div class="col stat-box">
                                <h1>158</h1>
                                <h5>Exhibitor</h5>
                            </div>
                            <div class="col stat-box">
                                <h1>30</h1>
                                <h5>Talk Session</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-about" class="py-5" style="background-color: #e6e6e6;">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="fs-5 lh-lg fw-normal text-dark mb-4">
                    Presenting the inaugural MARA Automotive Ecosystem exhibition, a groundbreaking event
                    that brings a fresh wave of excitement to Malaysians nationwide. MATEC2025 is more
                    than just a conventional showcase — it's a dynamic platform brimming with opportunities,
                    catering not only to entrepreneurs but also to visitors from all walks of life. Prepare
                    to explore innovative ideas, connect with industry experts, and uncover endless possibilities
                    in this one-of-a-kind experience.
                </p>
                <img src="<?= asset('images/2025/title_expectation1280.png') ?>" alt="" class="img-fluid mt-3 mb-3">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 px-0">
                <div class="image-wrapper">
                    <img src="<?= asset('images/2025/group1280.png') ?>" alt="" class="img-fluid img-zoom-300">
                </div>
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
            <div class="col-sm-12">
                <div id="activitiesGallery" class="f-carousel">
                    <div class="f-carousel__viewport">
                        <div class="f-carousel__track">

                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">AUTOSHOW <br> HIGHLIGHT</h4>

                                </div>
                                <a href="<?= asset('images/2025/activities/activities-11.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/activities-11.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">TWO-WHEEL <br> THRILLS</h4>

                                </div>
                                <a href="<?= asset('images/2025/activities/activities-12.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/activities-12.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">PUSH BIKE</h4>

                                </div>
                                <a href="<?= asset('images/2025/activities/activities-10.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/activities-10.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">LIVE <br> BEATS</h4>

                                </div>
                                <a href="<?= asset('images/new_act/activities-update-14.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/new_act/activities-update-14.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">SPIN <br> YOUR <br> FORTUNE</h4>

                                </div>
                                <a href="<?= asset('images/new_act/activities-update-18.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/new_act/activities-update-18.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">DRIFTING <br> DOMINANCE</h4>

                                </div>
                                <a href="<?= asset('images/new_act/activities-update-13.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/new_act/activities-update-13.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-100 d-sm-none d-block">
                <h5 class="text-white mb-10">Info</h5>
            </div>

            <div class="col-md-6 mb-35">
                    <a data-fancybox data-src="#industryModal">
                    <div class="detail-activities text-white pl-60 mb-3">
                        <h1 class="text-white">KEUSAHAWANAN <br> MARA</h1>
                    </div>
                    <img src="<?= asset('images/2025/faq_mara_14.webp') ?>"
                         alt="Keusahawanan MARA"
                         class="img-fluid border-radius-20">
                </a>
            </div>

            <div class="col-md-6 mb-35">
                <a href="/2025/faq">
                    <div class="detail-activities text-white pl-60 mb-3">
                        <h1 class="text-white">F.A.Q.</h1>
                    </div>
                    <img src="<?= asset('images/2025/faq_mara_13.webp') ?>"
                         alt="MARA FAQ"
                         class="img-fluid border-radius-20">
                </a>
            </div>
            <!-- Hidden Fancybox Content -->
            <div style="display:none;" id="industryModal">
                <div class="p-4 rounded shadow-lg" style="max-width:1000px; background:white;">

                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold fs-2 text-center flex-grow-1" style="color:#041e42;">
                         KEUSAHAWANAN MARA
                    </h5>
                </div>

                <!-- Description -->
                <p class="text-muted fs-6 mb-4 text-left-sm text-center">
                    MARA offers a holistic entrepreneurship development ecosystem to Bumiputra entrepreneurs, 
                    which includes entrepreneurship development through training, coaching, and consultancy, 
                    business development with special programs, market access, and industrial infrastructure, 
                    as well as support services such as financing, infrastructure, and advisory assistance, 
                    across various industries including automotive, food & beverage (F&B), construction, 
                    lifestyle, and services.
                </p>

                <!-- Icons Grid -->
                <div class="row gy-4 gx-3 text-start">
  <!-- Column 1 (3 items) -->
  <div class="col-6">
    <div class="d-flex flex-column align-items-start gap-3">
      <div class="d-flex align-items-center gap-2 mb-sm-3 mb-2">
        <i class="fas fa-car fa-lg fa-md-2x"></i>
        <h6 class="fw-bold mb-0 pl-sm-2 pl-1">AUTOMOTIVE</h6>
      </div>
      <div class="d-flex align-items-center gap-2 mb-sm-3 mb-2">
        <i class="fas fa-bowl-food fa-lg fa-md-2x"></i>
        <h6 class="fw-bold mb-0 pl-sm-2 pl-1">F&amp;B</h6>
      </div>
      <div class="d-flex align-items-center gap-2 mb-sm-3 mb-2">
        <i class="fas fa-hard-hat fa-lg fa-md-2x"></i>
        <h6 class="fw-bold mb-0 pl-sm-2 pl-1">CONSTRUCTION</h6>
      </div>
    </div>
  </div>

  <!-- Column 2 (2 items) -->
  <div class="col-6">
    <div class="d-flex flex-column align-items-start gap-3">
      <div class="d-flex align-items-center gap-2 mb-sm-3 mb-2">
        <i class="fas fa-tshirt fa-lg fa-md-2x"></i>
        <h6 class="fw-bold mb-0 pl-sm-2 pl-1">LIFESTYLE</h6>
      </div>
      <div class="d-flex align-items-center gap-2 mb-sm-3 mb-2">
        <i class="fas fa-briefcase fa-lg fa-md-2x"></i>
        <h6 class="fw-bold mb-0 pl-sm-2 pl-1">SERVICES</h6>
      </div>
    </div>
  </div>
</div>

                <!-- Visit MARA Link -->
                    <div class="mt-5 text-center">
                        <p>
                            Visit <a href="https://www.mara.gov.my/en/entrepreneurship/" class="fw-bold text-decoration-none" style="color:#ff0000;">MARA</a> for more!
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="matec-more-excitement" class="py-5" style="background: #ffffff;">
    <div class="container-fluid w-max-1500">

        <!-- Section Title Image -->
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-10 text-start">
                    <img src="<?= asset('images/2025/4x/artboard_5@4x.png') ?>"
                         alt="Memories to Remember"
                         class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Images Row -->
        <div class="row mt-0">

            <!-- First Column -->
            <div class="col-md-4 mb-3 position-relative">
                <div class="detail-activities text-white mt-15 top-0">
                    <img src="<?= asset('images/2025/1x/artboard_6.png') ?>"
                         alt="Activity Image 1"
                         class="img-fluid d-block mx-auto">
                </div>
                <a href="<?= asset('images/new_act/activities-update-14.png') ?>" data-fancybox="activitygallery">
                    <img src="<?= asset('images/new/artboard_3@1280x.webp') ?>"
                         alt="Activity Image 2"
                         class="img-fluid border-radius-20 mt-3">
                </a>
            </div>

            <!-- Second Column -->
            <div class="col-md-4">
                <div class="row">

                    <div class="col-md-12 mb-3 position-relative">
                        <div class="detail-activities text-white mt-15 top-0">
                            <img src="<?= asset('images/2025/1x/artboard_7.png') ?>"
                                 alt="Activity Image 3"
                                 class="img-fluid d-block mx-auto">
                        </div>
                        <a href="<?= asset('images/new_act/activities-update-14.png') ?>" data-fancybox="activitygallery">
                            <img src="<?= asset('images/new/artboard_4@1280x.webp') ?>"
                                 alt="Activity Image 4"
                                 class="img-fluid border-radius-20 mt-3">
                        </a>
                    </div>

                    <div class="col-md-12 mb-3 position-relative">
                        <div class="detail-activities text-white mt-15 top-0">
                            <img src="<?= asset('images/2025/1x/artboard_9.png') ?>"
                                 alt="Activity Image 3"
                                 class="img-fluid d-block mx-auto">
                        </div>
                        <a href="<?= asset('images/new_act/activities-update-14.png') ?>" data-fancybox="activitygallery">
                            <img src="<?= asset('images/new/artboard_5@1280x.webp') ?>"
                                 alt="Activity Image 4"
                                 class="img-fluid border-radius-20 mt-3">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Third Column -->
            <div class="col-md-4 mb-3 position-relative">
                <div class="detail-activities text-white mt-15 top-0">
                    <img src="<?= asset('images/2025/1x/artboard_8.png') ?>"
                         alt="Activity Image 1"
                         class="img-fluid d-block mx-auto">
                </div>
                <a href="<?= asset('images/new/artboard_6@1280x.webp') ?>" data-fancybox="activitygallery">
                    <img src="<?= asset('images/new/artboard_6@1280x.webp') ?>"
                         alt="Activity Image 2"
                         class="img-fluid border-radius-20 mt-3">
                </a>
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