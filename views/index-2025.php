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

        #video-container video,
        #video-container iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            position: relative;
            z-index: 1;
            color: #fff;
            text-align: center;
            padding-top: 20vh;
        }
    </style>

</head>
<body>
    <div id="video-container" data-src="<?= asset('video/background.mp4') ?>"></div>

    <div class="content">
        <h1>MATEC 2025</h1>
        <p>Welcome to MATEC 2025 event</p>
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
                    autoplay: true,
                    muted: true,
                    loop: true,
                    playsinline: true,
                    preload: 'auto'
                }).appendTo(container).get(0);
                if (videoEl) videoEl.play();
            }
        });
    </script>

</body>
</html>