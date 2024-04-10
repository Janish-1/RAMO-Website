<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your email and database configurations
    $to_email = $_POST["mail"]; // Change this to your email address
    $from_email = "noreply@ramo.co.in";
    $subject = "Data Deletion Request Recieved";
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["mail"] . "\n";
    $message .= "Contact Number: " . $_POST["contactnumber"] . "\n";
    $message .= "Data Domain: " . $_POST["category"] . "\n";

    // Send email
    if (mail($to_email, $subject, $message, "From: $from_email")) {
        echo '<div class="alert alert-success" role="alert">Email sent successfully!</div>';

        // Save form data to database (replace with your database logic)
        $servername = "localhost";
        $username = "root";
        $password = "janish11";
        $dbname = "ramowebsite";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement (replace with your table and column names)
        $stmt = $conn->prepare("INSERT INTO datadeletion (name, email, contactnumber, category) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST["name"], $_POST["mail"], $_POST["contactnumber"], $_POST["category"]);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo '<div class="alert alert-success" role="alert">Data deletion request sent!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
        }

        // Close connection
        $stmt->close();
        $conn->close();
    } else {
        echo '<div class="alert alert-danger" role="alert">Failed to send email.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RAMO | IT Services & Solutions </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo-1.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- Include jQuery for AJAX (if not already included) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- =======================================================
  * Template Name: Selecao
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.php">Selecao</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="../index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.php#clients">Client</a></li>
          <li><a class="nav-link scrollto" href="./careers/career.php">Careers</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Career Section ======= -->
    <section id="career" class="career">

      <!-- Popup container -->
      <div class="popup-container" id="popupContainer">
        <div class="popup-content">
          <button class="close-btn" onclick="closePopup()">X</button>
          <span class="popup-close">&times;</span>
          <p>If you have already Registered you can check your email for the test link.</p>
          <br>
          <p>If you have not Registered yet , you are welcome to browse options.</p>
        </div>
      </div>

      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Data Form</h2>
          <p>Data Deletion</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div>
            <div class="container">
              <div class="text">
                Delete your Data Here!
              </div>
              <form id="careerForm" method="POST">
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" name="name" required autocomplete="name">
                    <div class="underline"></div>
                    <label for="name">Full Name</label>
                  </div>
                  <div class="input-data">
                    <input type="email" name="mail" required autocomplete="email">
                    <div class="underline"></div>
                    <label for="email">Email Address</label>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <input type="tel" name="contactnumber" title="Please enter only numbers" required
                      autocomplete="tel">
                    <div class="underline"></div>
                    <label for="contact">Contact Number</label>
                  </div>
                  <div class="input-data">
                    <label for="category">Data Domain</label><br>
                    <select name="category" required autocomplete="category">
                      <option value="" disabled selected>Select Category</option>
                      <option value="lsdriverapp">LS Drive - Driver Connect</option>
                      <option value="lsuserapp">LS Drive - User App</option>
                      <option value="pujanpaath">Pujanpaath</option>
                    </select>
                    <div class="underline"></div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-data">
                    <button type="submit">Submit</button>
                  </div>
                  <div class="input-data">
                    <button type="button" onclick="clearForm()">Clear Form</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Career Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3 class="shattered-effect"><img src="../assets/img/ramo-white.png" alt="" class="img-fluid" width="300px"
          height="300px"></h3>
      <p>Welcome to RAMO, your trusted partner in innovative IT solutions. We strive to exceed expectations by
        delivering cutting-edge technologies, tailored to meet your unique business needs. Our commitment to excellence
        is evident in every project we undertake.</p>
      <div class="social-links">
        <a href="https://www.facebook.com/ramopvtltd?mibextid=ZbWKwL" class="facebook"><i
            class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/ramopvtltd/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ramopvtltd/mycompany/" class="linkedin"><i
            class="bx bxl-linkedin"></i></a>
        <a href="https://wa.me/9977696444" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>

      </div>
      <a href="#"><i class="fa fa-apple fa-3x"></i>| App Store |</a>
      <a href="#"><i class="fa fa-play fa-3x"></i> Google Play |</a>
      <a href="http://ramo.co.in"><i class="fa fa-windows fa-3x"></i> Windows |</a>
      <a href="../policies/privacy_policy.php">Privacy Policy |</a>
      <div class="copyright">
        &copy; 2024<span> RAMO PVT LTD</span>. ALL RIGHTS RESERVED BY RAMO PVT LTD
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        <span>DESIGNED BY RAMO PVT LTD</span>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <!-- Include Waypoint library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script>
    // JavaScript function to clear the form fields
    function clearForm() {
      document.getElementById("careerForm").reset();
    }
  </script>
</body>

</html>