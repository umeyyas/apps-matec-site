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
                    <img src="<?= asset('images/asset-matec2025.png') ?>" alt="" class="mb-60">
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

<div class="col-12 col-lg-6 mx-auto mt-5">
    <img src="<?= asset('images/communicate.png') ?>" alt="" class="mb-2 mt-2">
</div>

<div class="container mt-5 text-center">
  <div class="row align-items-stretch">
    
    <div class="col-lg-6 position-relative">
  <!-- FORM BOX -->
  <div class="h-80 bg-white rounded-4 p-0 d-flex flex-column justify-content-start">
    <h5 class="text-danger mb-4">Have questions? Write a message</h5>
    
    <!-- 🔥 FORM STARTS -->
    <form action="send.php" method="POST">
      <div class="mb-3">
        <input type="text" class="form-control p-3" placeholder="Your Name" name="name" required>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control p-3" placeholder="Your Email" name="email" required>
      </div>
      <div class="mb-3">
        <textarea class="form-control p-3" rows="3" placeholder="Your Message" name="message" required></textarea>
      </div>

      <!-- ✅ BUTTON MOVED HERE -->
      <button type="submit" class="btn btn-danger p-2 mb-3">Send Message</button>
    </form>
  </div>
</div>


    <!-- Right: Image -->
    <div class="col-lg-6">
      <div class="h-80">
        <img src="<?= asset('images/contact.webp') ?>" class="img-fluid h-50 w-50 object-fit-cover rounded-4 mb-5" alt="Matec 2025">
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelector("form").addEventListener("submit", function(e) {
  e.preventDefault();
  const form = this;
  const formData = new FormData(form);

  fetch(form.action, {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    Swal.fire("Success", "Your message was sent!", "success");
    form.reset();
  })
  .catch(err => {
    Swal.fire("Oops", "Something went wrong.", "error");
    console.error(err);
  });
});
</script>









<?php include "layouts/footer.php"; ?>

<?php require "layouts/__js.php" ?>

</body>
</html>