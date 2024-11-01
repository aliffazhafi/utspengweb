<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - ALIFFA ZHAFIRA</title>
  <meta name="description" content="Contact page for Aliffa Zhafira">
  <meta name="keywords" content="Contact, Aliffa Zhafira, Web Development">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">ALIFFA ZHAFIRA</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="journey.php">Journey</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>You can call Me by!</p>
      </div><!-- End Section Title -->

<div class="container d-flex justify-content-center">
    <div class="col-lg-8">
  <form id="contact-form" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
    <div class="row gy-4">

      <div class="col-md-6">
        <label for="name-field" class="pb-2">Your Name</label>
        <input type="text" name="your_name" id="name-field" class="form-control" required="">
      </div>

      <div class="col-md-6">
        <label for="email-field" class="pb-2">Your Email</label>
        <input type="email" class="form-control" name="your_email" id="email-field" required="">
      </div>

      <div class="col-md-12">
        <label for="subject-field" class="pb-2">Subject</label>
        <input type="text" class="form-control" name="subjek" id="subject-field" required="">
      </div>

      <div class="col-md-12">
        <label for="message-field" class="pb-2">Message</label>
        <textarea class="form-control" name="pesan" rows="10" id="message-field" required=""></textarea>
      </div>

      <div class="col-md-12 text-center">
        <button type="submit">Send Message</button>
      </div>

    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    const formData = new FormData(this); // Create a FormData object from the form

    // Use Axios to send a POST request
    axios.post('insertcon.php', formData)
      .then(function(response) {
        // Handle success response
        console.log('Success:', response.data);
        alert('Your message has been sent! Thank you.');
      })
      .catch(function(error) {
        // Handle error response
        console.error('Error:', error);
        alert('There was an error sending your message. Please try again.');
      });
  });
</script>

        </form>
      </div><!-- End Contact Form -->

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">aliffa</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="https://x.com/hi_aliff_?s=09"><i class="bi bi-twitter-x"></i></a>
        <a href="https://instagram.com/aliffazhafi"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/aliffa-zhafira-1b2a91245/"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
