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

<section class="bg-image-section bg-cover-section" style="background-image: url(<?= asset('images/2025/bg_header.webp') ?>)">
    <?php include "layouts/navbar-25.php"; ?>

    <div class="container text-white inner-body-container pt-40 pb-80">
        <div class="logo-matec mx-auto">
            <div class="row mt-0">
                <div class="col-lg-6 col-sm-9 col-11 mx-auto px-0">
                    <img src="<?= asset('images/asset-matec2025.png') ?>" alt="" class="img-fluid mb-60">
                </div>
            </div>
        </div>
        <div class="contain-details">
            <div class="event-details">
                <h3 class="text-white text-center">
                    <span class="d-block d-md-inline">CONTACT US</span>
                </h3>
            </div>
        </div>
    </div>
</section>

<section class="section section-lg bg-default">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-xs-10 col-sm-9 col-md-6 col-lg-7 col-xl-8">
                <h3>Have question? Write a<br class="d-none d-xs-block"> message.
                </h3>
                <!--RD Mailform-->
                <form class="" data-form-output="form-output-global" data-form-type="contact" method="post" id="contact-form" action="/send-message">
                    <div class="row row-10 row-narrow-xs">
                        <div class="col-lg-6">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-name">Your Name</label>
                                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-email">Email Address</label>
                                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message">Write Message</label>
                                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-button">
                                <button class="button button-lg button-primary" type="submit" data-triangle=".button-overlay"><span class="button-overlay"></span><span>Send Message</span></button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-xs-10 col-sm-9 col-md-6 col-lg-5 col-xl-4">
                <div class="block-address">
                    <div class="block-address-item">
                        <h5><span class="big font-weight-bold " style="color:white">MATEC 2024 SECRETRIATE</span></h5>

                    </div>
                    <div class="block-address-item">
                        <h5 class="block-address-title">Phone</h5>
                        <p class="block-address-text"><span class="text-white">En Razi:</span> <a href="tel:#">+6011 - 56648387</a><br><span class="text-white">En Fizzi:</span> <a href="tel:#">+6010 - 5631270</a>
                        </p>
                    </div>
                    <div class="block-address-item">
                        <h5 class="block-address-title">Email</h5>
                        <p class="block-address-text"><a href="mailto:fakharadzi@mara.gov.my">fakharadzi@mara.gov.my</a><br><a href="mailto:msyafizzi@mara.gov.my">msyafizzi@mara.gov.my</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "layouts/footer.php"; ?>

<?php require "layouts/__js.php" ?>

</body>
</html>