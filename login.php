
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <title>MHPNHS Official Website</title>
  <!-- Favicon -->
  <!-- <link href="img/favicon.ico" rel="icon"> -->
  <link rel="icon" href="img/mhpnhslogo.png" type="image/x-icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-xxl bg-white p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <div class="nav-left">
        <div class="top-logo">
          <img src="img/mhpnhslogo.png" alt="School Logo">
        </div>
        <a href="home.html" class="navbar-brand d-flex align-items-center text-left py-0 ps-2 me-auto">
          <div class="d-flex flex-column">
            <h4 class="m-0 text-primary">Marcelo H. Del Pilar National High School</h4>
            <h6 class="m-0 text-primary tagline"><em>Diwa, Dangal, Dunong</em></h6>
          </div>
        </a>


        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="home.html" class="nav-item nav-link">Home</a>
            <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="mission_vision.html" class="dropdown-item">Mission & Vision</a>
                <a href="history.html" class="dropdown-item">School's History</a>
                <a href="newsandupdates.html" class="dropdown-item">News and Updates</a>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academic Programs</a>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="jhs.html" class="dropdown-item">Junior High School</a>
                <a href="job-detail.html" class="dropdown-item">Senior High School</a>
              </div>
            </div>

            <a href="contact.html" class="nav-item nav-link">Contact</a>
          </div>
          <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Log In</a>
        </div>
    </nav>

    <!-- Start Login -->
    <div class="login-container">
      <div class="login-box">
        <h2>Login</h2>
        <form action="loginprocess.php" method="POST">
          <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <button class="btn-login" type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
        </form>
        <a href="forgot_password.php"><i class="fas fa-key"></i> Forgot password?</a>
      </div>
    </div>


    <!-- End LogIn -->

    <!-- Footer -->
    <div class="container-fluid bg-primary text-white-50 footer pt-5 mt-5 wow fadeIn mhpnhs-footer"
      data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-3">

          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Quick Links</h5>
            <a class="btn btn-link text-white-50" href="home.html">About Us</a>
            <a class="btn btn-link text-white-50" href="contact.html">Contact Us</a>
            <a class="btn btn-link text-white-50" href="jhs.html">Our Academic Programs</a>
            <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
            <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Contact</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Marcelo H. Del Pilar Avenue, Malolos,
              Philippines</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(044) 795 5343</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>300751@deped.gov.ph</p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social"
                href="https://www.facebook.com/MarceloDelPilarNHS"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social"
                href="https://www.youtube.com/@marceloh.delpilarnationalh9328"><i
                  class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Location</h5>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.7108437540824!2d120.83595307487771!3d14.841477985673901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339653ad7fbbb45b%3A0x824ddb04b97b9e7b!2sMarcelo%20H.%20del%20Pilar%20National%20High%20School!5e0!3m2!1sen!2sph!4v1742915877877!5m2!1sen!2sph"
              width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Institutional Seals
            </h5>
            <div class="container text-center">
              <!-- First row: DepEd Matatag & MHPNHS Logos -->
              <div class="d-flex justify-content-center align-items-center mx-auto"
                style="max-width: 400px;">
                <div class="col-6">
                  <img class="img-fluid" src="img/mhpnhslogo.png" alt="MHPNHS Logo"
                    style="max-width: 70%;">
                </div>
                <div class="col-6">
                  <img class="img-fluid" src="img/depedlogo.png" alt="DepEd Logo"
                    style="max-width: 73%;">
                </div>

              </div>

              <!-- Second row: Transparency Seal & FOI Seal -->
              <div class="d-flex justify-content-center align-items-center mt-3"
                style="max-width: 400px;">
                <div class="col-6">
                  <img class="img-fluid" src="img/transparency_seal.png"
                    alt="Philippine Transparency Seal" style="max-width: 70%;">
                </div>
                <div class="col-6">
                  <img class="img-fluid" src="img/foi_seal.png" alt="Freedom of Information Seal"
                    style="max-width: 70%;">
                </div>
              </div>
            </div>



          </div>

        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">MHPNHS '24-'25</a>, All Right Reserved 2025.

            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->
  </div>


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->

  <script src="js/main.js"></script>
</body>

</html>