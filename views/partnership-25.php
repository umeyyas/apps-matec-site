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

<style>
.partner-box {
  display: block;
  padding: 30px 20px;
  border-radius: 20px;
  font-family: "Barlow Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, sans-serif;
  font-size: 22px;
  font-weight: bold;
  color: #ffffff;
  text-decoration: none;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.partner-box span {
  display: block;
  font-size: 14px;
  font-weight: normal;
  letter-spacing: 1px;
}

.partner-box:hover {
  transform: scale(1.05);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
}

/* Background color classes */
.bg-red { background-color: #c8102e; }
.bg-blue { background-color: #2e4ea3; }
.bg-black { background-color: #222222; }
.bg-grey { background-color: #707070; }
.bg-lightgrey { background-color: #aaaaaa; }
</style>

<body class="matec-2025">

<section class="bg-image-section bg-cover-section" style="background-image: url(<?= asset('images/2025/bg_header.webp') ?>)">
    <?php include "layouts/navbar-25.php"; ?>

    <div class="container text-white inner-body-container pt-40 pb-80">
        <div class="logo-matec mx-auto">
            <div class="row mt-0">
                <div class="col-lg-6 col-sm-9 col-11 mx-auto px-0">
                    <img src="<?= asset('images/asset-matec2025.png') ?>" alt="" class="mb-60">
                </div>
            </div>
        </div>
        <div class="contain-details">
            <div class="event-details">
                <h3 class="text-white text-center">
                    <span class="d-block d-md-inline">PARTNERSHIP</span>
                </h3>
            </div>
        </div>
    </div>
</section>

<div class="col-12 col-lg-6 mt-5 mx-auto text-center">
    <img src="<?= asset('images/partnership.png') ?>" alt="" class="img-fluid mb-2 mt-2">
    <p class="text-center">Be part of Malaysia’s premier automotive ecosystem event! The MATEC2025 Partnership 
        Packages offer exclusive opportunities for brands to gain maximum exposure, connect 
        with industry leaders, and engage with thousands of passionate visitors. Explore our 
        sponsorship tiers and discover how your brand can drive impact at the heart of 
        innovation and automotive excellence.
    </p>
    <h5 class="mt-5 font-weight-bold"><span style="color: red;">Click</span> to view packages</h5>
</div>

<div class="container py-5">
  <div class="row justify-content-center text-center g-4">
    <div class="col-lg-4 col-md-6 col-12 px-5 py-3">
      <a data-fancybox data-src="<?= asset('images/partnership_01@1280x.webp') ?>" data-caption="Title Partner" class="partner-box bg-red">
        <img src="<?= asset('images/title.png') ?>" alt="Title Partner" class="img-inside">
      </a>
    </div>
    <div class="col-lg-4 col-md-6 col-12 px-5 py-3">
      <a data-fancybox data-src="<?= asset('images/partnership_02@1280x.webp') ?>" data-caption="Premier Partner" class="partner-box bg-blue">
        <img src="<?= asset('images/premier.png') ?>" alt="Premier Partner" class="img-inside">
      </a>
    </div>
    <div class="col-lg-4 col-md-6 col-12 px-5 py-3">
      <a data-fancybox data-src="<?= asset('images/partnership_03@1280x.webp') ?>" data-caption="Exclusive Partner" class="partner-box bg-black">
        <img src="<?= asset('images/exclusive.png') ?>" alt="Exclusive Partner" class="img-inside">
      </a>
    </div>
    <div class="col-lg-4 col-md-6 col-12 px-5 py-3">
      <a data-fancybox data-src="<?= asset('images/partnership_04@1280x.webp') ?>" data-caption="Expert Partner" class="partner-box bg-grey">
        <img src="<?= asset('images/expert.png') ?>" alt="Expert Partner" class="img-inside">
      </a>
    </div>
    <div class="col-lg-4 col-md-6 col-12 px-5 py-3">
      <a data-fancybox data-src="<?= asset('images/partnership_05@1280x.webp') ?>" data-caption="Advance Partner" class="partner-box bg-lightgrey">
        <img src="<?= asset('images/advance.png') ?>" alt="Advance Partner" class="img-inside">
      </a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>

<?php include "layouts/footer.php"; ?>

<?php require "layouts/__js.php" ?>

</body>
</html>