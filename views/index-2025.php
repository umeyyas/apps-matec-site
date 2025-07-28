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
        html, body {
            height: 100%;
            margin: 10px 0;
            scroll-behavior: smooth;
        }

        #video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

         #video-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            pointer-events: none;
        }

        #video-container video,
        #video-container iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            position: relative;
            z-index: 1;
            height: 100vh;
            width: 100vw;
        }

       .event-details h4 {
            font-weight: 300;
        }

        .event-details .btn-custom {
            background-color: red;
            border: none;
            color: #fff;
            padding: 8px 20px;
            display: inline-block;
            text-decoration: none;
            font-size: 120%;
            width: 160px;
            text-align: center;
            box-sizing: border-box;
            font-weight: 900;
        }

        .event-details .btn-custom + .btn-custom {
            margin-left: 1.2rem;
        }

        .event-details .btn-custom:hover {
            animation: lightning 0.6s linear infinite;
        }

        @keyframes lightning {
            0%, 100% {
                box-shadow: 0 0 5px 2px #fff;
            }
            50% {
                box-shadow: 0 0 15px 5px #fff;
            }
        }

        .icon.icon-rect {
            width: 62px;
            height: 62px;
            line-height: 60px;
        }

        @media (max-width: 767.98px) {
            .main-body-container {
            padding-top: 1.5rem; /* Reduce top space */
            }

            .logo-matec img {
                margin-bottom: 1rem !important; /* Reduce bottom margin below logos */
            }

            .event-details h4 {
                margin-top: 0.5rem;
                font-size: 1rem;
            }

            .event-details .btn-custom {
                margin-top: 0.75rem;
                font-size: 1rem;
                padding: 6px 16px;
            }

            .inner-body-container {
                margin-top: 0 !important;
            }
        } 

        @media (max-width: 767.98px) {
            .transparent-navbar {
                position: static !important;   /* Move it into normal flow */
                background-color: transparent !important;  /* Fully transparent */
                box-shadow: none !important;
            }

            .navbar-collapse {
                background-color: rgba(0, 0, 0, 0.6); /* Optional: make dropdown menu dark and readable */
            }

            .navbar-nav .nav-link {
                color: #fff;
                padding: 0.75rem 1rem;
                text-align: center;
            }

            .navbar-toggler {
                border: none;
            }
        }

            #discover-more .card-title,
            #discover-more .card-text,
            #discover-more p,
            #discover-more h4,
            #discover-more h5,
            #discover-more a {
            color: #000 !important;
            }

            @media (max-width: 767.98px) {
                .content {
                    width: 100%;
                    height: 65vh;
                    min-height: 55vh;
                    padding: 1rem 0; /* Optional: add spacing */
                }
            }

            .transparent-navbar.scrolled {
                background-color: rgba(0, 0, 0, 0.85) !important;
                transition: background-color 0.3s ease-in-out;
            }

    </style>

</head>
<body>
    <div id="video-container" data-src="<?= asset('') ?>"></div>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top transparent-navbar">
 <div class="container-fluid px-4">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#photo-gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#latest-info">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#visitor-stats">Stats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#discover-more">Discover</a>
        </li>
        <!-- New Enquiry nav link triggers modal -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                    </li>
                    <!-- New About MATEC nav link to PDF -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= asset('docs/about-matec.pdf') ?>" target="_blank">About MATEC</a>
                    </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="content d-flex flex-column">
        <div class="header-div">
            <div class="container-fluid">
                <div class="d-flex justify-content-md-start justify-content-center">
                    <ul class="list-inline list-inline-xs mb-0">
                        <li>
                            <a class="icon icon-rect icon-white fa-facebook" href="https://www.facebook.com/mymatecofficial" target="_blank">
                                <div class="icon-rect-overlay"></div>
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-rect icon-white fa-instagram" href="https://www.instagram.com/mymatecofficial" target="_blank">
                                <div class="icon-rect-overlay"></div>
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-rect icon-white fa-tiktok" href="https://www.tiktok.com/@mymatecofficial" target="_blank">
                                <div class="icon-rect-overlay"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-body-container">
            <div class="container text-white inner-body-container">
                <div class="logo-matec mx-auto">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 col-7 mx-auto px-0">
                            <img src="<?= asset('images/asset-logo-mara-kkdw.png') ?>" alt="" class="img-fluid mb-md-5 mb-4">
                        </div>
                    </div>
                    <div class="row mt-0">
                        <div class="col-lg-6 col-sm-9 col-11 mx-auto px-0">
                            <img src="<?= asset('images/asset-matec2025.png') ?>" alt="" class="img-fluid mb-5">
                        </div>
                    </div>
                </div>
                
                    <div class="event-details">
                        <h4 class="text-white text-center">
                            <span class="d-block d-md-inline">31 OCTOBER - 2 NOVEMBER 2025</span>
                            <span class="d-none d-md-inline"> | </span>
                            <span class="d-block d-md-inline">STADIUM NASIONAL BUKIT JALIL PARKING A & B</span>
                        </h4>

                        <div class="text-center mt-4">
                            <a href="#visitor-info" class="btn-custom">Visitor</a>
                            <a href="#exhibitor-info" class="btn-custom">Exhibitor</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-dark text-white py-5" id="photo-gallery">
    <div class="container">
        <h2 class="text-center mb-4">Gallery</h2>
        <div id="matecCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= asset('images/images2.jpg') ?>" class="d-block w-100" alt="MATEC Image 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= asset('images/images3.jpg') ?>" class="d-block w-100" alt="MATEC Image 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= asset('images/images4.jpg') ?>" class="d-block w-100" alt="MATEC Image 3">
                </div>
                <!-- Add more images as needed -->
            </div>
           <!-- Minimalist Carousel Controls -->
                <button class="carousel-control-prev minimalist" type="button" data-bs-target="#matecCarousel" data-bs-slide="prev">
                    <span class="carousel-icon" aria-hidden="true">&#10094;</span>
                </button>
                <button class="carousel-control-next minimalist" type="button" data-bs-target="#matecCarousel" data-bs-slide="next">
                    <span class="carousel-icon" aria-hidden="true">&#10095;</span>
                </button>
            </div>
        </div>
    </section>

            <!-- Latest Info Section with Images -->
<section class="bg-light text-dark py-5" id="latest-info">
    <div class="container">
                    <h2 class="text-center mb-4">Latest Info</h2>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= asset('images/images5.jpg') ?>" class="card-img-top" alt="Early Bird Registration">
                    <div class="card-body">
                        <h5 class="card-title">Early Bird Registration Opens!</h5>
                        <p class="card-text">Secure your booth or tickets early and enjoy exclusive benefits.</p>
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= asset('images/images6.jpg') ?>" class="card-img-top" alt="Exhibitor List">
                    <div class="card-body">
                        <h5 class="card-title">Exhibitor List Announced</h5>
                        <p class="card-text">Check out the confirmed brands and companies participating this year.</p>
                        <a href="#" class="btn btn-primary btn-sm">View List</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= asset('images/images7.jpg') ?>" class="card-img-top" alt="Tech Talk">
                    <div class="card-body">
                        <h5 class="card-title">Tech Talk Highlights</h5>
                        <p class="card-text">Get a sneak peek at the thought leaders joining our speaker panels.</p>
                        <a href="#" class="btn btn-primary btn-sm">Explore Topics</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Visitor Statistics + Location (Responsive Side-by-Side on Desktop, Stacked on Mobile) -->
<section id="visitor-stats" class="visitor-stats-section py-5" style="background: url('<?= asset("images/images0.jpg") ?>') no-repeat center center / cover;">
    <div class="container">
        <h2 class="text-center mb-5 text-white">MATEC 2024 Visitor Statistics</h2>
        <div class="row gx-4 gy-4 justify-content-center align-items-stretch">
    <!-- Stats Card -->
    <div class="col-12 col-lg-6 d-flex justify-content-center">
                <div class="card stat-card text-white w-100 shadow-lg" style="background-color: #000;">
                    <div class="card-body px-4 py-5">
                        <div class="row text-center">
                            <div class="col-6 mb-4">
                                <div class="stat-box">
                                    <div class="stat-icon">👥</div>
                                    <h3 class="stat-number">45,000+</h3>
                                    <p class="stat-label">Total Visitors</p>
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="stat-box">
                                    <div class="stat-icon">🏭</div>
                                    <h3 class="stat-number">120+</h3>
                                    <p class="stat-label">Exhibitors</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="stat-icon">🌍</div>
                                    <h3 class="stat-number">15</h3>
                                    <p class="stat-label">Countries</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-box">
                                    <div class="stat-icon">🎤</div>
                                    <h3 class="stat-number">30+</h3>
                                    <p class="stat-label">Talk Sessions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Discover More Section -->
<section id="discover-more" class="py-5 bg-white text-dark">
    <div class="container">
        <h2 class="text-center mb-5">Discover More</h2>
        <div class="row">
            <!-- Discover Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?= asset('images/discover1.jpg') ?>" class="card-img-top" alt="Workshops">
                    <div class="card-body">
                        <h5 class="card-title">Workshops & Demos</h5>
                        <p class="card-text">Participate in hands-on experiences and live demonstrations from top automotive innovators.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Discover Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?= asset('images/discover2.jpg') ?>" class="card-img-top" alt="Networking">
                    <div class="card-body">
                        <h5 class="card-title">Business Networking</h5>
                        <p class="card-text">Connect with potential clients, collaborators, and industry leaders across multiple sectors.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Explore Opportunities</a>
                    </div>
                </div>
            </div>
            <!-- Discover Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?= asset('images/discover3.jpg') ?>" class="card-img-top" alt="Future Tech">
                    <div class="card-body">
                        <h5 class="card-title">Future Tech Insights</h5>
                        <p class="card-text">Explore the trends shaping the automotive ecosystem—EVs, AI, automation and more.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read Insights</a>
                    </div>
                </div>
            </div>
            <!-- Discover Card 4 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?= asset('images/discover4.jpg') ?>" class="card-img-top" alt="Startups">
                    <div class="card-body">
                        <h5 class="card-title">Startup Showcase</h5>
                        <p class="card-text">See emerging startups pitch their ideas and innovations shaping the automotive future.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Meet the Startups</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Signup Section -->
<section class="newsletter-section py-7" id="newsletter" style="background-color: #191919;">
    <div class="container">
        <h2 class="text-center mb-4 text-white">Stay Updated</h2>
        <p class="text-center mb-4 text-white">Subscribe to our newsletter and be the first to get the latest updates from MATEC</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="newsletter-form" action="/subscribe-newsletter" method="post">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

 <!-- Existing content sections ... -->

    <!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="enquiry-form" action="/submit-enquiry" method="post">
          <div class="mb-3">
            <label for="enquiry-name" class="form-label">Name</label>
            <input type="text" class="form-control" id="enquiry-name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="enquiry-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="enquiry-email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="enquiry-message" class="form-label">Message</label>
            <textarea class="form-control" id="enquiry-message" name="message" rows="3" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="enquiry-form" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- Section Pre Footer-->
    <section class="section section-lg" style="background-color: #191919;">


        <div class="container">
            <div class="row row-30">
                <div class="col-xs-10 col-lg-4">
                    <a class="brand" href="/">
                        <img src="assets/images/asset-matec2025.png" alt="Matec 2024" class="w-75 mb-4 d-block mx-sm-0 mx-auto">   
                    </a>
                    <div class="row mt-0 d-flex align-items-center flex-column">
                        <div class="col-md-12 col-lg-8 mb-4 pr-lg-5 mr-lg-auto ml-lg-4 text-center ">
                            <h5><span class="big font-weight-bold">Know More About</span></h5>
                        </div>
                        <div class="col-md-6 col-lg-8 pr-lg-5 mr-lg-auto ml-lg-4 text-center">
                            <a class="brand" href="https://www.mara.gov.my/en/index/" target="_blank">
                                <img class="w-145px h-150px img-fluid" src="<?= asset('images/matec-images/mara.png') ?>" srcset="<?= asset('images/matec-images/mara-logo@2x.png 2x') ?>" alt="Matec 2024">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h5><span class="big font-weight-bold">Event detail</span></h5>
                    <div class="event-detail">
                        <p class="event-detail-time big text-white">
                            <time data-splitting datetime="2019-01-05">31 October - 2 November</time>
                        </p>
                        <p class="event-detail-address big text-white" data-splitting>Parking B, National Stadium Bukit Jalil, Bukit Jalil, Kuala Lumpur</p>

                        <a class="event-detail-link" href="https://maps.app.goo.gl/JBPdiGxFCmvFPvAt9" target="_blank">View map location</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h5><span class="big font-weight-bold">Social Updates</span></h5>
                    <div class="event-detail">
                        <p class="big text-white">You may wonder why this event is so popular? If you do, find more info about it here.
                        </p>
                        <ul class="list-inline list-inline-xs">
                           <?php if (!empty($socialLinks) && is_array($socialLinks)): ?>
    <?php foreach ($socialLinks as $social): ?>
        <li data-wow-delay="<?= $social['wow-delay']; ?>">
            <a class="icon icon-rect icon-xs icon-white <?= $social['icon']; ?>" href="<?= $social['url']; ?>" data-triangle=".icon-rect-overlay" target="<?= $social['target']; ?>">
                <div class="icon-rect-overlay"></div>
            </a>
        </li>
    <?php endforeach; ?>
<?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider-->
    <div class="divider divider-gray-900 text-center"></div>

    <!-- Footer Classic-->
    <footer class="section footer-classic context-dark">
        <div class="container">
            <p class="rights">
                <span>&copy; Copyright of MARA AUTOMOTIVE ECOSYSTEM</span>
                <span class="copyright-year"></span> <br>
                <span>Developed and designed by </span> <a href="https://www.ardianexus.com/">Ardia Nexus Sdn. Bhd.</a>
            </p>
        </div>
    </footer>
    <div class="snackbars" id="form-output-global"></div>
    <div class="block-with-svg-gradients">
        <svg xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
                    <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>




    <?php require "layouts/__js.php" ?>

    <script>
        $(function () {
            var container = $('#video-container');
            var src = container.data('src');
            if (!src) return;

            if (/youtube\.com|youtu\.be/.test(src)) {
                var idMatch = src.match(/(?:youtube\.com.*[?&]v=|youtu\.be\/)([^?&]+)/);
                var vid = idMatch ? idMatch[1] : '';
                $('<iframe>', {
                    src: 'https://www.youtube.com/embed/' + vid + '?autoplay=1&mute=1&loop=1&playlist=' + vid + '&controls=0&showinfo=0&modestbranding=1&rel=0',
                    frameborder: 0,
                    allow: 'autoplay; fullscreen'
                }).appendTo(container);
            } else {
                var videoEl = $('<video>', {
                    src: src,
                    muted: true,
                    loop: true,
                    playsinline: true,
                    preload: 'auto'
                }).appendTo(container)[0];

                if (videoEl) {
                    videoEl.muted = true;
                    videoEl.autoplay = true;
                    var playPromise = videoEl.play();
                    if (playPromise !== undefined) {
                        playPromise.catch(function () {
                            // Autoplay might be blocked; ensure attribute exists
                            videoEl.setAttribute('autoplay', 'autoplay');
                        });
                    }
                }
            }
        });
    </script>

    <script>
        $(function () {
            $('#contact-mobile').on('input', function () {
                this.value = this.value.replace(/[^0-9+()\\-\\s]/g, '');
            });
        });
    </script>

    <script>
        $(function () {
            function adjustCountdownWidth() {
                var $cols = $('.contain-details .countdown .w-100 > div');
                if (!$cols.length) return;

                $cols.css('width', '');
                var maxWidth = 0;
                $cols.each(function () {
                    var w = $(this).outerWidth();
                    if (w > maxWidth) maxWidth = w;
                });
                $cols.width(maxWidth);
            }

            function adjustMyAutoHeight() {
                var $content = $('.content');
                if (!$content.length) return;

                var topHeight = $content.children('div.header-div').outerHeight(true);
                $content.find('> .main-body-container').height($(window).height() - topHeight);
            }

            adjustCountdownWidth();
            adjustMyAutoHeight();

            $(window).on('resize', function () {
                adjustCountdownWidth();
                adjustMyAutoHeight();
            });
        });
    </script>

    <script>
        $(function () {
            function centerInnerBody() {
                var $inner = $('.inner-body-container');
                var $main = $('.main-body-container');
                var $header = $('.header-div');

                if (!$inner.length || !$main.length) return;

                var mainHeight = $main.height();
                var innerHeight = $inner.outerHeight(true);
                var margin = Math.max((mainHeight - innerHeight) / 2, 0);
                var headerHeight = $header.outerHeight(true) || 0;
                var marginTop = margin - headerHeight;

                if (marginTop < 0) marginTop = 0;

                $inner.css({
                    'margin-top': marginTop,
                    'margin-bottom': margin
                });
            }

            centerInnerBody();
            $(window).on('resize', centerInnerBody);
        });
    </script>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            var form = e.target;
            var formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData
            }).then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            title: 'Success!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        Fancybox.close()
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                }).catch(error => {
                Swal.fire({
                    title: 'Error!',
                    text: 'An error occurred while sending the message.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        });
    </script>

    <script async src="//www.instagram.com/embed.js"></script>

    <script>window.addEventListener('scroll', function () {
  const nav = document.querySelector('.transparent-navbar');
  if (window.scrollY > 100) {
    nav.classList.add('scrolled');
  } else {
    nav.classList.remove('scrolled');
  }
  });
    </script>

    
<script>
  // Optional: sanitize inputs (e.g. strip unwanted chars)
  $('#enquiry-name, #enquiry-email, #enquiry-message').on('input', function () {
    // adjust regex as needed per field
    this.value = this.value.replace(/[^0-9+()\\-\\s]/g, '');
  });

  // AJAX submit handler
  document.getElementById('enquiry-form').addEventListener('submit', function(e) {
    e.preventDefault();
    var form = e.target;
    var formData = new FormData(form);

    fetch(form.action, {
      method: form.method,
      body: formData
    }).then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire({
            title: 'Success!',
            text: data.message,
            icon: 'success',
            confirmButtonText: 'OK'
          });
          $('#enquiryModal').modal('hide');
        } else {
          Swal.fire({
            title: 'Error!',
            text: data.message,
            icon: 'error',
            confirmButtonText: 'OK'
          });
        }
      }).catch(error => {
        Swal.fire({
          title: 'Error!',
          text: 'An error occurred while sending the message.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      });
  });
</script>


</body>
</html>