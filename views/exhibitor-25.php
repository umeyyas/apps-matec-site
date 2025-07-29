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
    </style>
</head>
<body class="matec-2025">

<section id="intro-hero">
    <video src="<?= asset('video/background.mp4') ?>" autoplay muted loop playsinline></video>
    <div class="video-overlay"></div>

    <header>
        <!--<div id="count-down-sect" class="container-fluid" style="background-color:#000000;">
            <div class="container">
                <div class="countdown text-center mb-1">
                    <div class="w-100 g-1">
                        <div class="text-center">
                            <h2 class="pl-sm-3 pl-2">39</h2>
                            <h4 class="mb-0">DAYS</h4>
                        </div>
                        <div class="text-center">
                            <h2 class="pl-sm-3 pl-2">39</h2>
                            <h4 class="mb-0">HOURS</h4>
                        </div>
                        <div class="text-center">
                            <h2 class="pl-sm-3 pl-2">39</h2>
                            <h4 class="mb-0">MINUTES</h4>
                        </div>
                        <div class="text-center">
                            <h2 class="pl-sm-3 pl-2">39</h2>
                            <h4 class="mb-0">SECONDS</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <nav id="navbar-sect" class="navbar navbar-expand-lg container-fluid navbar-dark">
            <button class="navbar-toggler me-2" type="button" data-toggle="collapse" data-target="#matecNav" aria-controls="matecNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav flex-row align-items-center mx-md-0 mx-auto pr-md-0 pr-5">
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

            <div class="collapse navbar-collapse" id="matecNav">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="the-ideas">The Ideas</a></li>
                    <li class="nav-item"><a class="nav-link" href="partnership">Partnership</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq">F.A.Q</a></li>
                    <li class="nav-item"><a class="nav-link" href="call-us">Call Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid w-max-1500 text-white inner-body-container">
        <h4 class="wow fadeScale text-center text-white" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">
            Become part of Malaysia’a largest automotive ecosystem fair and enjoy all benefits and programs to help you grow your business. Let’s join and be apart of MATEC2025.
        </h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-5">
                                <img src="<?= asset('images/matec-images/ex_001.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('2025/pdf/matec2025-event-deck-v2.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-7 pl-sm-2 pl-0 text-center">
                                <h5 class="mt-3 mb-3" style="color:#000;">MATEC2025 Event Brief</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-5">
                                <img src="<?= asset('images/matec-images/ex_002.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-7 pl-sm-2 pl-0 text-center">
                                <h5 class="mt-3 mb-3" style="color:#000;">MATEC2025 Partnership Packages</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-5">
                                <img src="<?= asset('images/matec-images/ex_003.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-7 pl-sm-2 pl-0 text-center">
                                <h5 class="mt-3 mb-3" style="color:#000;">MATEC2025 Full Layout</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-1">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-5">
                                <img src="<?= asset('images/matec-images/ex_004.png') ?>" alt="" class="img-fluid newtab" data-pdf-url="<?= asset('pdf/MATEC2024_Event Brief_v7 14082024.pdf') ?>" >
                            </div>
                            <div class="col-md-12 col-7 pl-sm-2 pl-0 text-center">
                                <h5 class="mt-3 mb-3" style="color:#000;">EXHIBITOR F.A.Q</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
