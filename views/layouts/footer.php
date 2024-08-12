    <?php

        $socialLinks = Social::getAll();

    ?>

    <!-- Section Pre Footer-->
    <section class="section section-lg bg-gray-900">
        <div class="container">
            <div class="row row-30">
                <div class="col-xs-10 col-lg-4">
                    <a class="brand" href="/">
                        <img src="/assets/images/matec-logo.png" srcset="/assets/images/matec-logo@2x.png 2x" alt="Matec 2024" class="w-75 mb-4 d-block mx-sm-0 mx-auto">   
                    </a>
                    <div class="row mt-0 d-flex align-items-center flex-column">
                        <div class="col-md-12 col-lg-8 mb-4 pr-lg-5 mr-lg-auto ml-lg-4 text-center ">
                            <h5><span class="big font-weight-bold">Know More About</span></h5>
                        </div>
                        <div class="col-md-6 col-lg-8 pr-lg-5 mr-lg-auto ml-lg-4 text-center">
                            <a class="brand" href="https://www.mara.gov.my/en/index/" target="_blank">
                                <img class="w-145px h-150px img-fluid" src="<?= asset('images/matec-images/mara-logo.png') ?>" srcset="<?= asset('images/matec-images/mara-logo@2x.png 2x') ?>" alt="Matec 2024">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <h5><span class="big font-weight-bold">Event detail</span></h5>
                    <div class="event-detail">
                        <p class="event-detail-time big text-white">
                            <time data-splitting datetime="2019-01-05">20 TO 22 SEPTEMBER 2024</time>
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
                            <?php foreach ($socialLinks as $social): ?>
                            <li data-wow-delay="<?= $social['wow-delay']; ?>">
                                <a class="icon icon-rect icon-xs icon-white <?= $social['icon']; ?>" href="<?= $social['url']; ?>" data-triangle=".icon-rect-overlay" target="<?= $social['target']; ?>">
                                    <div class="icon-rect-overlay"></div>
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
                <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
                    <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
                </lineargradient>
            </defs>
        </svg>
    </div>