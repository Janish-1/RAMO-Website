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
                    <li><a class="nav-link scrollto active" href="../index.php#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#about">About</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="../index.php#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="../index.php#clients">Client</a></li>
                    <li><a class="nav-link scrollto" href="career.php">Careers</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a class="nav-link scrollto" href="../index.php#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Test Section ======= -->
        <section id="testform" class="testform">
            <div class="container">

                <div class="section-title" data-aos="zoom-out">
                    <h2>Test</h2>
                    <p>Test Form</p>
                </div>

                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="container">
                            <div class="text">
                                Test Form
                            </div>
                            <form id="testForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-row">
                                    <div class="input-data">
                                        <input type="text" name="testid" required>
                                        <div class="underline"></div>
                                        <label for="test_id">Test ID</label>
                                    </div>
                                </div>
                                <div class="form-row submit-btn">
                                    <div class="input-data">
                                        <button type="submit" onclick="submitForm()">Submit</button>
                                    </div>
                                    <div class="input-data">
                                        <button type="button" onclick="clearForm()">Clear Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Guidelines Section -->
                <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="container">
                            <div class="text">
                                Test Guidelines
                            </div>
                            <ul>
                                <li>Do not use any external resources or aids during the test.</li>
                                <li>Ensure that you are in a quiet and distraction-free environment.</li>
                                <li>Complete the test independently without collaboration with others.</li>
                                <li>Follow the specified time limit for each section of the test.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Career Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>RAMO</h3>
            <p>Welcome to RAMO, your trusted partner in innovative IT solutions. We strive to exceed expectations by
                delivering cutting-edge technologies, tailored to meet your unique business needs. Our commitment to
                excellence
                is evident in every project we undertake.</p>
            <div class="social-links">
                <a href="https://www.facebook.com/ramopvtltd?mibextid=ZbWKwL" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/ramopvtltd/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/company/ramopvtltd/mycompany/" class="linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
            <a href="../policies/privacy_policy.php">Privacy Policy</a>
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
        function submitForm() {
            // Get the test ID from the input field
            var testId = $('#testid').val();

            // Perform an AJAX request to redirect to another page
            $.ajax({
                type: 'POST',
                url: '/redirecttest', // Update with your actual Laravel route
                data: {
                    testid: testId // Fix the case of 'testId' to match the variable name
                },
                dataType: 'json', // Specify the expected data type
                success: function (response) {
                    // Check the response and handle accordingly
                    if (response.success) {
                        // Redirect was successful
                        window.location.href = response.redirectUrl; // Replace with the actual redirect URL
                        console.log("Success");
                    } else {
                        // Handle error, show a message, etc.
                        alert(response.message);
                        console.log("Fail");
                    }
                },
                error: function (xhr, status, error) {
                    // Handle AJAX error
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'An error occurred during the AJAX request.';
                    alert(errorMessage);
                    console.log("Fail");
                }
            });
        }

        // JavaScript function to clear the form fields
        function clearForm() {
            document.getElementById("testForm").reset();
            $('#testIdDisplay').text(''); // Clear the displayed test ID
        }
    </script>
</body>

</html>