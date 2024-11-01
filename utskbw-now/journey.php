<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Journey - Aliffa Zhafira</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

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

<body class="resume-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">ALIFFA ZHAFIRA</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="journey.php" class="active">Journey</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          </li>
          <li><a href="contact.php">Contact</a></li>
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
  <section id="resume" class="resume section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Journey</h2>
  <p>My Journey</p>
</div><!-- End Section Title -->

<div class="container">
  <div class="row">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <h3 class="resume-title">Education</h3>
      
      <?php
 include 'conn.php';

$sql = "SELECT * FROM Journey";
$result = $conn->query($sql);

      // Tampilkan data pendidikan
      while ($row = $result->fetch_assoc()) {
          if ($row['Category'] == 'Education') {
              echo '<div class="resume-item">';
              echo '<h4>' . $row['Title'] . '</h4>';
              echo '<h5>' . $row['Start_Date'] . ' - ' . $row['End_Date'] . '</h5>';
              echo '<p><em>' . $row['Institution_Organization'] . '</em></p>';
              echo '<p>' . $row['Description'] . '</p>';
              echo '</div><!-- End Resume Item -->';
          }
      }
      ?>

    </div>

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <h3 class="resume-title">Experience</h3>
      
      <?php
      
      $result->data_seek(0); 
      while ($row = $result->fetch_assoc()) {
          if ($row['Category'] == 'Experience') {
              echo '<div class="resume-item">';
              echo '<h4>' . $row['Title'] . '</h4>';
              echo '<h5>' . $row['Start_Date'] . ' - ' . $row['End_Date'] . '</h5>';
              echo '<p><em>' . $row['Institution_Organization'] . '</em></p>';
              echo '<ul>';
              echo '<li>' . $row['Description'] . '</li>'; // Asumsi ada satu deskripsi, sesuaikan jika ada beberapa item.
              echo '</ul>';
              echo '</div><!-- End Resume Item -->';
          }
      }
      ?>

    </div>

  </div>

</div>

</section>

<?php
// Tutup koneksi
$conn->close();
?>


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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
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

</php>