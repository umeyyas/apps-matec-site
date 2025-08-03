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

<section id="matec-venue" class="py-200 bg-image-section bg-image-section-efx-grey bg-cover-section venue-asset" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-03.png') ?>)">
    <div class="container-fluid w-max-1500">
        <div class="row align-items-start">
            
            <!-- Left side: Stadium Layout Image -->
            <div class="col-12 col-md-5 order-2 order-md-1 text-center text-md-start">
                <img src="<?= asset('images/2025/bukit_jalil_layout1280.png') ?>" alt="Stadium Layout" class="img-fluid mb-3 h-200">
            </div>

            <!-- Spacer for layout alignment -->
            <div class="col-md-1 d-none d-md-block order-3"></div>

            <!-- Right side: Venue Title Image + Location -->
            <div class="col-12 col-md-6 order-1 order-md-3 text-center text-md-start">
                <img src="<?= asset('images/2025/1x/artboard_3.png') ?>" alt="Venue Title" class="img-fluid mb-3">

                <!-- Location Text -->
                <h4 class="fw-bold text-dark m-0 display-5 display-md-4 display-lg-3 text-sm-right text-right">
                    National Stadium Bukit Jalil, Kuala Lumpur
                </h4>
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
        <div class="col-12 col-md-4 order-1 order-md-1 mx-auto">
            <img src="<?= asset('images/2025/1x/artboard_4.png') ?>" alt="Venue Title" class="img-fluid mb-3 mx-auto d-flex">
        </div>
        <div class="row">
            <div class="col-12 col-sm-7 mx-auto">
                <div class="card">
                    <div class="card-body p-4 counter-statistic">
                        <div class="d-flex text-center row">
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
                                <h5>Talk</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-potental-visiors" class="pt-115 pb-70" style="background-color: #e6e6e6;">
    <div class="container-fluid w-max-1500 text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <p class="fs-5 lh-lg fw-normal text-dark">
                    Presenting the inaugural MARA Automotive Ecosystem exhibition, a groundbreaking event 
                    that brings a fresh wave of excitement to Malaysians nationwide. MATEC2025 is more 
                    than just a conventional showcase — it's a dynamic platform brimming with opportunities, 
                    catering not only to entrepreneurs but also to visitors from all walks of life. Prepare 
                    to explore innovative ideas, connect with industry experts, and uncover endless possibilities 
                    in this one-of-a-kind experience.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-7 mx-auto">
                <img src="<?= asset('images/2025/title_expectation1280.png') ?>" alt="" class="img-fluid mt-3 mb-3">
            </div>
        </div>
        <div class="row mt-4">
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
            <div class="col-md-12">
                <div id="activitiesGallery" class="f-carousel">
                    <div class="f-carousel__viewport">
                        <div class="f-carousel__track">

                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">AUTOSHOW <br> HIGHLIGHT</h4>
                                    
                                </div>
                                <a href="<?= asset('images/2025/activities/Activities-11.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/Activities-11.png') ?>" alt="" class="img-fluid">
                                </a>    
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">TWO-WHEEL <br> THRILLS</h4>
                                    
                                </div>
                                <a href="<?= asset('images/2025/activities/Activities-12.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/Activities-12.png') ?>" alt="" class="img-fluid">
                                </a>    
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">PUSH BIKE</h4>
                                    
                                </div>
                                <a href="<?= asset('images/2025/activities/Activities-10.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/Activities-10.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">LIVE <br> BEATS</h4>
                                    
                                </div>
                                <a href="<?= asset('images/2025/activities/Activities-11.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/Activities-11.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">SPIN <br> YOUR <br> FORTUNE</h4>
                                    
                                </div>
                                <a href="<?= asset('images/2025/activities/Activities-11.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/Activities-11.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="f-carousel__slide">
                                <div class="detail-activities text-white mt-15">
                                    <h4 class="text-white">DRIFTING <br> DOMINANCE</h4>
                                    
                                </div>
                                <a href="<?= asset('images/2025/activities/Activities-10.png') ?>" data-fancybox="activitygallery">
                                    <img src="<?= asset('images/2025/activities/Activities-11.png') ?>" alt="" class="img-fluid">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-35">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#industryModal">
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
        <!-- Modal for Keusahawanan MARA -->
        <!-- Modal -->
        <div class="modal fade" id="industryModal" tabindex="-1" aria-labelledby="industryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content border-radius-20">
      
                    <!-- Modal Header -->
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title w-100 text-center" id="industryModalLabel">INDUSTRY</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
      
                    <!-- Modal Body -->
                    <div class="modal-body text-center">
                        <div class="row justify-content-center">
          
                            <!-- 1 Automotive -->
                            <div class="col-6 col-md-2 mb-4">
                                <div class="circle">
                                    <i class="fas fa-car fa-2x mb-2 text-dark"></i>
                                    <h6 class="fw-bold">AUTOMOTIVE</h6>
                                </div>
                            </div>
          
                            <!-- 2 F&B -->
                            <div class="col-6 col-md-2 mb-4">
                                <div class="circle">
                                    <i class="fas fa-utensils fa-2x mb-2 text-dark"></i>
                                    <h6 class="fw-bold">F&amp;B</h6>
                                </div>
                            </div>
          
                            <!-- 3 Construction -->
                            <div class="col-6 col-md-2 mb-4">
                                <div class="circle">
                                    <i class="fas fa-hard-hat fa-2x mb-2 text-dark"></i>
                                    <h6 class="fw-bold">CONSTRUCTION</h6>
                                </div>
                            </div>
          
                            <!-- 4 Lifestyle -->
                            <div class="col-6 col-md-2 mb-4">
                                <div class="circle">
                                    <i class="fas fa-tshirt fa-2x mb-2 text-warning"></i>
                                    <h6 class="fw-bold text-warning">LIFESTYLE</h6>
                                </div>
                            </div>
          
                            <!-- 5 Services -->
                            <div class="col-6 col-md-2 mb-4">
                                <div class="circle">
                                    <i class="fas fa-briefcase fa-2x mb-2 text-dark"></i>
                                    <h6 class="fw-bold">SERVICES</h6>
                                </div>
                            </div>
          
                        </div>
        
                            <!-- See More Button -->
                            <div class="mt-3">
                                <a href="/industry-details" class="btn btn-outline-primary">See More</a>
                            </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="matec-more-excitement" class="py-80" style="background: #ffffff;">
    <div class="container-fluid w-max-1500">
        <!-- Section Title -->
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="<?= asset('images/2025/1x/artboard_5.png') ?>" alt="" class="img-fluid">
            </div>
        </div>

        <!-- Images Row -->
        <div class="row">
            <div class="col-md-4 mb-3 position-relative">
                <div class="detail-activities text-white mt-15 top-0">
                    <img src="<?= asset('images/2025/1x/artboard_6.png') ?>" alt="" class="img-fluid mb-3">
                </div>
                <a href="<?= asset('images/2025/activities/Activities-10.png') ?>" data-fancybox="activitygallery">
                    <img src="<?= asset('images/2025/asset_31920.png') ?>" alt="" class="img-fluid border-radius-20">
                </a>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 mb-3 position-relative">
                        <div class="detail-activities text-white mt-15">
                            <img src="<?= asset('images/2025/1x/artboard_7.png') ?>" alt="" class="img-fluid mb-3">
                        </div>
                        <a href="<?= asset('images/2025/activities/Activities-10.png') ?>" data-fancybox="activitygallery">
                            <img src="<?= asset('images/2025/asset_11920.png') ?>" alt="" class="img-fluid border-radius-20">
                        </a>
                    </div>
                    <div class="col-md-12 mb-3 position-relative">
                        <div class="detail-activities text-white mt-15">
                            <img src="<?= asset('images/2025/1x/artboard_9.png') ?>" alt="" class="img-fluid mb-3">
                        </div>
                        <a href="<?= asset('images/2025/activities/Activities-10.png') ?>" data-fancybox="activitygallery">
                            <img src="<?= asset('images/2025/asset_21920.png') ?>" alt="" class="img-fluid border-radius-20">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 position-relative">
                <div class="detail-activities text-white mt-15">
                    <img src="<?= asset('images/2025/1x/artboard_8.png') ?>" alt="" class="img-fluid mb-3">
                </div>
                <a href="<?= asset('images/2025/activities/Activities-10.png') ?>" data-fancybox="activitygallery">
                    <img src="<?= asset('images/2025/asset_41920.png') ?>" alt="" class="img-fluid border-radius-20">
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