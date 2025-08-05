<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC2025 :: MATEC</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= asset('images/logo.png') ?>" type="image/x-icon">

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
            <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active">404</li>
                </ul>
                <h3 class="breadcrumbs-custom-title">404</h3>
            </div>
        </section>

        <section class="section section-lg bg-default">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="inset-lg-right-30">
                            <h6>You may have mistyped the address<br class="d-none d-lg-block"> or the page may have moved
                            </h6>
                            <h3>Sorry, but the page was not found</h3>
                            <p>Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunced amet ultrices dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolors sit amet elit magnis amet ultrices purusrfed aliquet. There are many variations of passages of available but the majority have suffered.</p>
                            <div class="group"><a class="button button-secondary box-with-triangle-right" href="/" data-triangle=".button-overlay"><span>Go to home page</span><span class="button-overlay"></span></a><a class="button button-primary" href="contact" data-triangle=".button-overlay"><span>Contacts</span><span class="button-overlay"></span></a></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6">
                        <div class="img-separated"><img src="<?= asset('images/about-01-562x588.jpg') ?>" alt="" width="562" height="588"/>
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
