<?php

$socialLinks = Social::getAll();

?>

<!-- Section Pre Footer-->
<section class="section py-80 bg-gray-900">
    <div class="container-fluid w-max-1500">
        <div class="row row-30 justify-content-center">
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-sm-8">
                        <!-- Matec Logo -->
                        <div class="row">
                            <div class="col-12">
                                <a class="brand d-block mx-auto mb-4" href="/">
                                    <img src="<?= asset('images/asset-matec2025.png') ?>"
                                         srcset="<?= asset('images/asset-matec2025@2x.png') ?> 2x"
                                         alt="MATEC2025"
                                         class="d-block mx-auto">
                                </a>
                            </div>
                        </div>

                        <div class="row mt-0 d-flex flex-column align-items-center">
                            <!-- MARA Logo -->
                            <div class="col-12 text-center">
                                <div class="position-relative">
                                    <a class="brand d-block mx-auto" href="https://www.mara.gov.my/en/index/" target="_blank">
                                    <div class="detail-activities text-white">
                                        <h4 class="mb-0">VISIT <br> MARA</h4>
                                    </div>
                                        <img src="<?= asset('images/2025/2x/artboard_10@2x.png') ?>"
                                             srcset="<?= asset('images/2025/3x/artboard_10@3x.png') ?> 2x"
                                             alt="MATEC2025"
                                             class="d-block mx-auto border-radius-20">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <h5><span class="big font-weight-bold">Event detail</span></h5>
                <div class="event-detail">
                    <p class="event-detail-time big text-white">
                        <time data-splitting datetime="2019-01-05">31 OCTOBER - 2 NOVEMBER 2025</time>
                    </p>
                    <p class="event-detail-address big text-white" data-splitting>Stadium Nasional Bukit Jalil Kuala Lumpur</p>

                    <a class="event-detail-link" href="https://maps.app.goo.gl/JBPdiGxFCmvFPvAt9" target="_blank">View map location</a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <h5><span class="big font-weight-bold">Social Updates</span></h5>
                <div class="event-detail">
                    <p class="big text-white">You may wonder why this event is so popular? If you do, find more info about it here.
                    </p>
                    <ul class="list-inline list-inline-xs">
                        <?php foreach ($socialLinks as $social): ?>
                            <li data-wow-delay="<?= $social['wow-delay']; ?>">
                                <a href="<?= $social['url']; ?>"
                                   target="<?= $social['target']; ?>"
                                   class="social-link">
                                    <i class="<?= $social['icon']; ?>"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
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
            <span>&copy; Copyright of MARA AUTOMOTIVE ECOSYSTEMS</span>
            <span class="copyright-year"></span> <br>
            <span>Developed and designed by </span> <a href="https://www.ardianexus.com/">Ardia Nexus Sdn. Bhd.</a>
        </p>
    </div>
</footer>
<div class="snackbars" id="form-output-global"></div>
<div class="block-with-svg-gradients">
    <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
            <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
                <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
            </lineargradient>
        </defs>
    </svg>
</div>