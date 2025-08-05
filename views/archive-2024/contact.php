<?php

    $socialLinks = Social::getAll();

?>

<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: Call Us</title>

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

        <!-- Breadcrumbs-->
        <section class="section" style="background-image: url(<?= asset('images/bckhome.png') ?>); background-size: cover; background-position: center;">
            <div class="parallax-content section-lg context-dark text-center section-background">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active">Call Us</li>
                </ul>
                <h3 class="breadcrumbs-custom-title">Call Us</h3>
            </div>
        </section>

        <!--Google Map
        <section class="section">-->
        <!--Please, add the data attribute data-key='YOUR_API_KEY' in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class='google-map-container' data-key='YOUR_API_KEY'>
        <div class="google-map-container" data-center="Central Park, New York, US" data-key="AIzaSyBUPsDPtyZG7EPBB2XDN55Rxt_fYUoc4Ak" data-zoom="15" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles='[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ef8c25"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#b6c54c"},{"lightness":40},{"saturation":-40}]},{}]'>
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="Central Park, New York, US" data-description="Central Park, New York, US"></li>
          </ul>
        </div>
      </section>
      -->

        <!--Mailform-->
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
                                <p class="block-address-text"><span>En Razi:</span> <a href="tel:#">+6011 - 56648387</a><br><span>En Fizzi:</span> <a href="tel:#">+6010 - 5631270</a>
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

    </div>

    <?php require "layouts/__js.php" ?>

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

