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
            font-size: 6rem;
        }
        body.matec-2025 .w-max-1500 {
            max-width: 1500px;
        }
        @media (max-width: 767px) {
            body.matec-2025 h1 {
                font-size: 2rem;
            }
            body.matec-2025 .counter-statistic h5 {
                font-size: 0.9rem;
            }
        }
    </style>

</head>
<body class="matec-2025">

    <section>
        <div class="container-fluid w-max-1500">
            Counter
        </div>

        <header>
            <div class="container-fluid">
                Manu
            </div>
        </header>


    </section>

    <section id="matec-carousel-gallery" class="py-100">
        <div class="container-fluid w-max-1500">
            <div id="matecGallery" class="f-carousel">
                <div class="f-carousel__viewport">
                    <div class="f-carousel__track">
                        <div class="f-carousel__slide">
                            <a href="<?= asset('images/1.jpg') ?>" data-fancybox="gallery">
                                <img src="<?= asset('images/1.jpg') ?>" class="img-fluid" alt="Gallery Image 1">
                            </a>
                        </div>
                        <div class="f-carousel__slide">
                            <a href="<?= asset('images/2.jpg') ?>" data-fancybox="gallery">
                                <img src="<?= asset('images/2.jpg') ?>" class="img-fluid" alt="Gallery Image 2">
                            </a>
                        </div>
                        <div class="f-carousel__slide">
                            <a href="<?= asset('images/3.jpg') ?>" data-fancybox="gallery">
                                <img src="<?= asset('images/3.jpg') ?>" class="img-fluid" alt="Gallery Image 3">
                            </a>
                        </div>
                        <div class="f-carousel__slide">
                            <a href="<?= asset('images/4.jpg') ?>" data-fancybox="gallery">
                                <img src="<?= asset('images/4.jpg') ?>" class="img-fluid" alt="Gallery Image 4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-600 pb-100" style="background: black url('<?= asset('images/2025/bg-hero.png') ?>') no-repeat top center;">
        <div class="container-fluid w-max-1500 pb-100">
            <h1 class="text-center text-white">World's Tastiest <br> Flavours</h1>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-body counter-statistic">
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <h1 class="text-center">4.2M</h1>
                                    <h5 class="text-center">Active Consumers</h5>
                                </div>
                                <div class="col-md-4 col-4">
                                    <h1 class="text-center">4.2M</h1>
                                    <h5 class="text-center">Active Consumers</h5>
                                </div>
                                <div class="col-md-4 col-4">
                                    <h1 class="text-center">4.2M</h1>
                                    <h5 class="text-center">Active Consumers</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid w-max-1500 pt-100">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="text-white mb-10">Browse by Category</h5>
                </div>
                <div class="col-md-4">
                    <img src="<?= asset('images/2025/carshow.png') ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="<?= asset('images/2025/motoshow.png') ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="<?= asset('images/2025/pushbike.png') ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">F.A.Q</div>
                <div class="col-md-6">Visit MARA</div>
            </div>
        </div>
    </section>

    <footer>
        
    </footer>

    <?php require "layouts/__js.php" ?>

    <script>
        new Carousel(document.getElementById("matecGallery"), {
            slidesPerPage: 4,
            Autoplay: {
                timeout: 5000,
                pauseOnHover: true,
            },
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