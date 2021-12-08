<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ViviEats</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!--Gilroy Font-->
  <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./css/style.css" rel="stylesheet">

</head>

<body>

      <?php 
      include_once dirname( __FILE__ ).'/./Settings/core.php';

      if (isset($_SESSION["user_id"]) && ($_SESSION["user_role"])) {

                      if ($_SESSION["user_role"] === '1') {
                          header('location: ./Admin/Dashboard.php');
                      } else {

                          if ($_SESSION["user_role"] === '2') {
          ?>
            <!-- ======= Header ======= -->
              <header id="header" class="fixed-top d-flex align-items-cente">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                  <h1 class="logo me-auto me-lg-0"><a href="index.html">Vivi & Co.</a></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                      <li><a class="nav-link scrollto" href="#about">About</a></li>
                      <li><a class="nav-link scrollto" href="#events">Events</a></li>
                      <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                      <li><a class="nav-link scrollto" href="./view/menu.php">Menu</a></li>
                      <li><a class="nav-link scrollto" href="#contact">Locate Us</a></li>
                      
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav><!-- .navbar -->
                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <li>
                          <div class="search-area">
                              <form method="" action="">
                                <input class="search-txt" type="text" placeholder="Search Food..." />
                                <button><img src="./assets/icons/bx_bx-search.svg" alt="" /></button>
                              </form>
                          </div>
                        </li>
                      <li><a class="nav-link scrollto user-opt" href="./view/cart.html"><img src="./assets/icons/ion_cart-outline.svg" alt="Cart" /></a></li>
        
                      <li class="dropdown"><a href="#"> <img src="./assets/icons/bx_bx-user.svg" alt="User" /> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="#">Account Settings</a></li>
                          <li><a href="./settings/logout.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav>
                </div>
              </header><!-- End Header -->
            <?php 
                  }
              } 
            }else { /**--------------------------------GUEST------------------------------------------- */
              ?>
              <!-- ======= Header ======= -->
              <header id="header" class="fixed-top d-flex align-items-cente">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

                  <h1 class="logo me-auto me-lg-0"><a href="index.html">Vivi & Co.</a></h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                      <li><a class="nav-link scrollto" href="#about">About</a></li>
                      <li><a class="nav-link scrollto" href="#events">Events</a></li>
                      <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                      <li><a class="nav-link scrollto" href="./view/menu.php">Menu</a></li>
                      <li><a class="nav-link scrollto" href="#contact">Locate Us</a></li>
                      
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav><!-- .navbar -->
                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <li>
                          <div class="search-area">
                              <form method="" action="">
                                <input class="search-txt" type="text" placeholder="Search Food..." />
                                <button><img src="./assets/icons/bx_bx-search.svg" alt="" /></button>
                              </form>
                          </div>
                        </li>
                      <li><a class="nav-link scrollto user-opt" href="./view/cart.php"><img src="./assets/icons/ion_cart-outline.svg" alt="Cart" /></a></li>
                      <div class="cart">0</div>
                    
                      <li class="dropdown"><a href="#"> <img src="./assets/icons/bx_bx-user.svg" alt="User" /> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="./view/login.php">Login</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </div>
              </header><!-- End Header -->
        
            <?php
            }
            ?>

          <!-- ======= Hero Section ======= -->
          <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="row">
                <div class="col-lg-8">
                  <h1>Lorem ipsum dolor sit amet<span> dolor sit amet</span></h1>
                  <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, 
                    purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</h2>

                  <div class="btns">
                    <a href="./view/menu.html" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                    <a href="#" class="btn-book animated fadeInUp scrollto">View More</a>
                  </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                  <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
                </div>

              </div>
            </div>
          </section><!-- End Hero -->

          <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
              <div class="container" data-aos="fade-up">

                <div class="row">
                  <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                      <img src="./assets/images/founder/IMG_3442.PNG" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Our Story.</h3>
                    <p>
                      Vivi & Co is an umbrella company for Vivi Eats and Sokolata Gh. Vivi Eats is a food delivery service that deals primarily 
                      in popular Ghanaian local dishes such as Banku, Waakye and Angwamo. 
                      Their vision is to provide the best local dishes to Ghanaians and Non Ghanaians in Ghana.
                      One thing they can boast of as an organization is their consistency in their food’s taste and 
                      their excellent customer service. They currently operate in Accra and have organized a few pop ups in Kumasi.
                    </p>
                  </div>
                </div>

              </div>
            </section><!-- End About Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us">
              <div class="container" data-aos="fade-up">

                <div class="section-title">
                  <h2>Why Us</h2>
                  <p>Why Choose Us</p>
                </div>

                <div class="row">

                  <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                      <span>01</span>
                      <h4>Credit Card</h4>
                      <p>We Offer fast delivery anywhere in Accra</p>
                    </div>
                  </div>

                  <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                      <span>02</span>
                      <h4>Fast Delivery</h4>
                      <p>We Offer fast delivery anywhere in Accra</p>
                    </div>
                  </div>

                  <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                      <span>03</span>
                      <h4>24/7 Customer Care</h4>
                      <p>We Offer fast delivery anywhere in Accra</p>
                    </div>
                  </div>

                </div>

              </div>
            </section><!-- End Why Us Section -->

            <!-- ======= Events Section ======= -->
            <section id="events" class="events">
              <div class="container" data-aos="fade-up">

                <div class="section-title">
                  <h2>Events</h2>
                  <p>We Are Hear For Your Events</p>
                </div>

                <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="row event-item">
                        <div class="col-lg-6">
                          <img src="./assets/images/events/photo_2021-12-05_20-37-34.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                          <h3>Birthday Parties</h3>
                          <div class="price">
                            <p><span>&#8373;189</span></p>
                          </div>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                          <ul>
                            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                          </ul>
                          <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur
                          </p>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="row event-item">
                        <div class="col-lg-6">
                          <img src="./assets/images/events/photo_2021-12-05_20-37-39.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                          <h3>Private Parties</h3>
                          <div class="price">
                            <p><span>&#8373;290</span></p>
                          </div>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                          <ul>
                            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                          </ul>
                          <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur
                          </p>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="row event-item">
                        <div class="col-lg-6">
                          <img src="./assets/images/events/photo_2021-12-05_20-37-45.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                          <h3>Custom Parties</h3>
                          <div class="price">
                            <p><span>&#8373;99</span></p>
                          </div>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                          <ul>
                            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                          </ul>
                          <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur
                          </p>
                        </div>
                      </div>
                    </div><!-- End testimonial item -->

                  </div>
                  <div class="swiper-pagination"></div>
                </div>

              </div>
            </section><!-- End Events Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg">
              <div class="container" data-aos="fade-up">

                <div class="section-title tst">
                  <h2>Testimonials</h2>
                  <p>What they're saying about us</p>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                      </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                      </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                      </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                      </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                      </div>
                    </div><!-- End testimonial item -->

                  </div>
                  <div class="swiper-pagination"></div>
                </div>

              </div>
            </section><!-- End Testimonials Section -->


            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">

                <div class="section-title">
                  <h2>Contact</h2>
                  <p>Contact Us</p>
                </div>
              </div>

              <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
              </div>

              <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                  <div class="col-lg-4">
                    <div class="info">
                      <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Vivi Eats, East Legon close to AnC mall</p>
                      </div>

                      <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>Open Hours:</h4>
                        <p>
                          Monday-Saturday:<br>
                          06:00 AM - 23:59 PM
                        </p>
                      </div>

                      <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>acolatse.elom@gmail.com</p>
                      </div>

                      <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>0546513924</p>
                      </div>

                    </div>

                  </div>
                </div>

              </div>
            </section><!-- End Contact Section -->

          </main><!-- End #main -->

          <!-- ======= Footer ======= -->
          <footer id="footer">
            <div class="footer-top">
              <div class="container">
                <div class="row">

                  <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                      <h3>Vivi & Co.</h3>

                      <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Account</h4>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Discounts</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Account Setting</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Help</h4>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Help Center</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Contact 00000000000</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Delivery Service</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Company Information</h4>
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a href="#about">About Us</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="copyright">
                &copy; Copyright 2021 <strong><span>Vivi & Co.</span></strong>. All Rights Reserved
              </div>
            </div>
          </footer><!-- End Footer -->

          <div id="preloader"></div>
          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

          <!-- Vendor JS Files -->
          <script src="assets/vendor/aos/aos.js"></script>
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
          <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="assets/vendor/php-email-form/validate.js"></script>
          <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

          <!-- Template Main JS File -->
          <script src="./js/main.js"></script>

        </body>

        </html>