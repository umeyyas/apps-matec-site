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

    <?php require 'layouts/__css.php' ?>

    <style>
        html, body {
            height: 100%;
            margin: 0;
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
            background-color: rgba(0, 0, 0, 0.75);
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

        .contain-details .title h2 {
            font-weight: 500;
        }

        .contain-details .countdown h2 {
            font-family: "Bitcount Prop Single", system-ui;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
            font-variation-settings:
                    "slnt" 0,
                    "CRSV" 0.5,
                    "ELSH" 0,
                    "ELXP" 0;
        }

        .contain-details .countdown h4 {
            font-weight: 300;
        }

        .contain-details .title h2,
        .contain-details .countdown h2,
        .contain-details .countdown h4 {
            display: block;
            color: #ffffff;
            text-align: center;
        }

        .contain-details .countdown h4 {
            font-size:25px;
        }

        .contain-details .countdown .w-100 {
            display: flex;
            justify-content: center;
        }

        .contain-details .countdown .w-100 > div {
            width: 25%;
            text-align: center;
        }
        .event-details h4 {
            font-weight: 300;
        }

        /* Inline styles for the enquiry and about buttons */
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
    </style>

</head>
<body>
    <div id="video-container" data-src="<?= asset('video/background.mp4') ?>"></div>

    <div class="content d-flex flex-column">
        <div>
            <div class="container-fluid">
                <div class="d-flex justify-content-start">
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
        <div class="my-auto">
            <div class="container text-white">
                <div class="logo-matec mx-auto">
                    <div class="row">
                        <div class="col-lg-8 col-sm-10 col-11 mx-auto">
                            <img src="<?= asset('images/asset-matec2025.png') ?>" alt="" class="img-fluid mb-5">
                        </div>
                    </div>
                </div>
                <div class="contain-details">
                    <div class="title text-center">
                        <h2>COMING SOON</h2>
                    </div>
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
        </div>
        <!--<div class="mt-auto">
            <div class="container"></div>
        </div>-->
    </div>

    <div id="enquiry-popup" class="mt-xs-0 mt-5 popup-width" style="display: none; width:100%; max-width:500px;">
        <div class="row">
            <div class="col-lg-10 col-sm-10 col-11 mx-auto">
                <img src="<?= asset('images/asset-matec2025-black.png') ?>" alt="" class="img-fluid mb-2">
                <p class="text-center mb-2">Got your engines running with questions? <br> Fill out the form and let’s chat!</p>
            </div>
        </div>
        <form id="contact-form" action="/send-message" method="post">
            <div class="form-group">
                <label for="contact-name">Name</label>
                <input type="text" class="form-control" id="contact-name" name="name">
            </div>
            <div class="form-group">
                <label for="contact-company">Company Name</label>
                <input type="text" class="form-control" id="contact-company" name="company">
            </div>
            <div class="form-group">
                <label for="contact-nature">Nature of Business</label>
                <input type="text" class="form-control" id="contact-nature" name="business_nature">
            </div>
            <div class="form-group">
                <label for="contact-location">Company Location</label>
                <input type="text" class="form-control" id="contact-location" name="location">
            </div>
            <div class="form-group">
                <label for="contact-mobile">Mobile No.</label>
                <input type="text" class="form-control" id="contact-mobile" name="mobile">
            </div>
            <div class="form-group">
                <label for="contact-email">Email</label>
                <input type="email" class="form-control" id="contact-email" name="email">
            </div>
            <div class="form-group">
                <label for="enquiry" for="contact-email">Enquiry</label>
                <textarea name="enquiry" id="enquiry" class="form-control"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Send Your Enquiry</button>
            </div>
        </form>
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

</body>
</html>