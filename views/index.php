<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: MATEC</title>

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

        <?php include "layouts/navbar.php"; ?>

        <!-- Section Swiper Slider-->
        <section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
            <!-- Waves-->
            <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
            <!-- Swiper Content-->
            <div class="section-swiper-content fullscreen-height d-sm-flex d-block align-items-center">
                <div class="container">
                    <div class="row justify-content-lg-center">
                        <div class="col-lg-10 col-12">
                            <!--<div class="badge-promo wow fadeScale" data-wow-delay=".6s"><span class="badge-promo-text">Upcoming New 2019 event</span>
                                <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z" fill="url( #svg-gradient-primary )"></path>
                                    <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49L0 0Z" fill="white"></path>
                                </svg>
                            </div>-->
                            <h3 class="wow fadeInUp text-spacing-200" data-wow-delay=".8s" data-caption-animate="fadeInUp" data-caption-delay="300" data-caption-duration="900">
                                <!--MARA AUTOMOTIVE ECOSYSTEM-->
                                <img src="<?= asset('images/matec-logo.png') ?>" alt="" class="w-75 mb-5">
                            </h3>
                            <h2 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">ENTREPRENEURIAL ENGINE: <br> ACCELERATING AUTOMOTIVE GROWTH</h2>
                            <!-- List Inline-->
                            <ul class="list-inline list-inline-md wow" data-splitting data-wow-delay="1.5s">
                                <li>
                                    <div class="unit unit-spacing-xs align-items-center">
                                        <div class="unit-left line-height-reset">
                                            <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                <use xlink:href="<?= asset('images/svg/sprite.svg#earth-globe') ?>" style="fill:#c70000"></use>
                                            </svg>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="text-spacing-100"><span class="big">BUKIT JALIL, KUALA LUMPUR</span></h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-xs align-items-center">
                                        <div class="unit-left line-height-reset">
                                            <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                <use xlink:href="<?= asset('images/svg/sprite.svg#small-calendar') ?>"></use>
                                            </svg>
                                        </div>
                                        <div class="unit-body">
                                            <h5 class="text-spacing-100"><span class="big">
                                            <time datetime="2019-01-05"> 20 to 22 SEPTEMBER 2024</time></span></h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Thumbnail Video Link-->
                <div class="video-link-wrapper">
                    <div class="unit align-items-center">
                        <div class="unit-body text-right">
                            <h5><span class="big">Watch Event<br> Video</span></h5>
                        </div>
                        <div class="unit-right">
                            <a class="video-link" href="https://youtu.be/-uEke_WTxwo?si=UEGS7W6lmooMY9vw" data-lightgallery="item">
                                <div class="video-link-bg" data-triangle=".video-link-overlay"><span class="video-link-overlay"></span></div><span class="icon fa-play"></span>
                            </a>
                        </div>
                    </div>
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

        <!-- Section Biggest 2019 Digital Conference-->
        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-image-section-efx-white bg-cover-section" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-01.png') ?>)">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-12 col-lg-12">
                        <img src="<?= asset('images/matec-images/matec-15.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-08.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-09.png') ?>" alt="" class="d-flex w-auto h-md-30px h-xs-15px">
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12 text-sm-left text-center text-image-container">
                        <img src="<?= asset('images/matec-images/matec-07.png') ?>" alt="Engine Image" class="embedded-image d-sm-block d-none">
                        <p>The Entrepreneurial Engine is a concept that focuses on fostering innovation and growth within the automotive industry through entrepreneurial initiatives. This approach emphasizes the importance of startups, small businesses, and independent innovators in driving advancements and competitiveness in the sector. By leveraging the agility and creativity of these entities, the automotive industry can accelerate the development of cutting-edge technologies, such as electric vehicles, autonomous driving systems, and advanced manufacturing processes.</p>
                        <p>Central to the Entrepreneurial Engine is the collaboration between established automotive companies and emerging startups. Large corporations provide resources, industry expertise, and market access, while startups contribute fresh ideas, innovative solutions, and a willingness to take risks. This symbiotic relationship enables the rapid prototyping, testing, and scaling of new products and services.</p>
                        <p>Furthermore, the Entrepreneurial Engine is supported by a robust ecosystem that includes venture capital firms, incubators, accelerators, and government initiatives. These elements work together to provide the necessary funding, mentorship, and regulatory support for startups to thrive. By creating an environment conducive to entrepreneurial activity, the automotive industry can not only keep pace with technological advancements but also anticipate and shape future trends.</p>
                        <p>In conclusion, the Entrepreneurial Engine plays a crucial role in accelerating automotive growth by harnessing the potential of entrepreneurial ventures. This dynamic framework promotes innovation, fosters collaboration, and ensures that the automotive sector remains at the forefront of technological progress.</p>
                        <img src="<?= asset('images/matec-images/matec-07.png') ?>" alt="Engine Image" class="d-sm-none d-block mx-auto w-75 mt-sm-0 mt-5">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Book Your Ticket-->
        <section class="section" style="background-image: url(<?= asset('images/bckhome.png') ?>); background-size: cover; background-position: center;">
           <div class="parallax-content section-lg context-dark text-center section-background">
                <div class="container wow fadeIn">
                    <!-- Block with content-->
                    <div class="block-lg block-center">
                        <h6>Time is running out</h6>
                        <h3>REGISTER WITH US NOW</h3>
                        <p>Bringing together automotive industry players at all levels from vehicle manufacturers, vendors, suppliers of spare parts, accessories, merchandise, agencies/institutions involved. Including educational institutions related automotive. Various interesting activities throughout the program</p>
                        <!-- Countdown rectangle-->
                        <div class="countdown countdown-rect" data-countdown="data-countdown" data-to="2024-09-20">
                            <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-days" data-wow-delay="0s" data-triangle=".countdown-block-overlay">
                                <div class="countdown-block-overlay"></div>
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-days="">
                                    <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                    <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-days="">00</div>
                                    <div class="countdown-title">days</div>
                                </div>
                            </div>
                            <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-hours" data-wow-delay="0.125s" data-triangle=".countdown-block-overlay">
                                <div class="countdown-block-overlay"></div>
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-hours="">
                                    <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                    <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-hours="">00</div>
                                    <div class="countdown-title">hours</div>
                                </div>
                            </div>
                            <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-minutes" data-wow-delay="0.25s" data-triangle=".countdown-block-overlay">
                                <div class="countdown-block-overlay"></div>
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-minutes="">
                                    <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                    <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-minutes="">00</div>
                                    <div class="countdown-title">minutes</div>
                                </div>
                            </div>
                            <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-seconds" data-wow-delay="0.375s" data-triangle=".countdown-block-overlay">
                                <div class="countdown-block-overlay"></div>
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-seconds="">
                                    <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                    <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-seconds="">00</div>
                                    <div class="countdown-title">seconds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Biggest 2019 Digital Conference-->
        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-image-section-efx-grey bg-cover-section" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-02.png') ?>)">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-12 col-lg-6 col-xl-7 text-sm-left">
                        <img src="<?= asset('images/matec-images/matec-04.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-14.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-4">
                        <ul class="listing cog-listing">
                            <li>Forming a cluster of automotive entrepreneurs assisted by MARA or other parties to explore areas of cooperation and business expanding.</li>
                            <li>Ensuring that entrepreneurs involved in the automotive industry can use the MATEC2024 platform for expand the existing business network market.</li>
                            <li>Empowering the automotive entrepreneur's business brand through continuous promotion through the media and beyond will strengthen the business brand of the entrepreneur involved to a better level.</li>
                            <li>Providing a dedicated marketing and advertising platform to introduce automotive entrepreneurs' companies and products directly to customers and the community.</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5 text-md-right">
                        <img src="<?= asset('images/matec-images/matec-06.png') ?>" alt="" class="d-xs-block d-none img-fluid mx-auto mt-sm-0 mt-4">
                        <img src="<?= asset('images/matec-images/matec-06.png') ?>" alt="" class="d-xs-none d-block w-xs-300px mx-auto mt-sm-0 mt-4">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-cover-section" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-05.png') ?>); background-position: center left;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-12 col-lg-6 col-xl-7 text-sm-left text-white">
                        <img src="<?= asset('images/matec-images/matec-17.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-18.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-13.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-4">
                        <p class="mb-2">For those seeking to grow their business in automotive industries, MATEC 2024 is the ideal platform to:</p>
                        <ul class="list list-marked">
                            <li>Showcase the latest in automotive technology, automotive products and services</li>
                            <li>Explore opportunities to trade, invest, collaborate and share in the transfer the transfer of technology</li>
                            <li>Expand business horizons</li>
                            <li>Develop import and export markets</li>
                            <li>Launch new and innovative products and services</li>
                            <li>Explore careers and entrepreneurial opportunities</li>
                            <li>Deepen relationships with existing customers</li>
                            <li>Forge international alliances and build strategic partnerships</li>
                            <li>Be the first to discover the latest market trends</li>
                            <li>Boost your market competitiveness</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5 text-md-right">
                        <img src="<?= asset('images/matec-images/matec-12.png') ?>" alt="" class="d-xs-block d-none img-fluid mx-auto mt-sm-0 mt-4">
                        <img src="<?= asset('images/matec-images/matec-12.png') ?>" alt="" class="d-xs-none d-block w-xs-300px mx-auto mt-sm-0 mt-4">
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-default wow fadeIn bg-image-section bg-cover-section" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 col-lg-12 text-md-center pb-1">
                        <div class="bg-white mt-sm-auto d-sm-block ">
                            <img src="<?= asset('images/matec-images/matec-bg-images-06.png') ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-image-section-efx-grey bg-cover-section" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-03.png') ?>)">
            <div class="container">
                <div class="row row-30">
                    <div class="col-md-12 col-lg-12">
                        <img src="<?= asset('images/matec-images/matec-10.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-11.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-16.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px">
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12 text-md-center">
                        <div class="box-location">
                            <img src="<?= asset('images/matec-images/matec-bg-images-04.png') ?>" alt="" class="img-fluid">
                            <!--div class="box-img bg-white mt-sm-auto mt-4 d-sm-none d-block">
                                <img src="<?//= asset('images/matec-images/matec-bg-images-06.png') ?>" alt="" class="img-fluid">
                            </div-->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12 text-center ">
                        <div class="box-location flex">
                            <p><b>National Stadium is the central and most prominent sports center and building at the National Sports Complex in Bukit Jalil. The elliptical outdoor stadium has a total area of 76,000 square meters and its classical bowl shape is enhanced by the dramatic overlapping of three spectator tiers.</p>
                            <p>Our outdoor car park spaces are a perfect canvas for your open-air events. You have a choice of 5 varied sizes in a gated venue, with a combined capacity of 160,000 pax standing. With access to both power and water supply, a 3 minute walk to the Bukit Jalil LRT station and a 20 minute drive from the city centre, we are also flexible to be part of your customised event.</b></p>
                            <!--div class="box-img bg-white mt-sm-auto mt-4 d-sm-block d-none">
                                <img src="<?//= asset('images/matec-images/matec-bg-images-06.png') ?>" alt="" class="img-fluid">
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "layouts/footer.php"; ?>

    </div>

    <?php require "layouts/__js.php" ?>

</body>
</html>