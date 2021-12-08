<?php
include_once dirname( __FILE__ ).'/../settings/core.php';
include_once dirname( __FILE__ ).'/../controller/product_controller.php';

$Menu = select_all_products_controller();

if ( isset( $_SESSION['search_result'] ) ) {
    $search_results = $_SESSION['search_result'];
}
?>

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
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

   <?php 
      include_once dirname( __FILE__ ).'/./settings/core.php';
    
      include_once dirname( __FILE__ ).'/../controller/product_controller.php';
      $selected_food = select_a_product_controller( $_GET['productID'] );
      $Allproducts = select_all_products_controller();
      $showReviews = select_order_reviews_controller( $_GET['productID'] );

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
                                <button><img src="../assets/icons/bx_bx-search.svg" alt="" /></button>
                              </form>
                          </div>
                        </li>
                      <li><a class="nav-link scrollto user-opt" href="./view/cart.php"><img src="../assets/icons/ion_cart-outline.svg" alt="Cart" /></a></li>
        
                      <li class="dropdown"><a href="#"> <img src="../assets/icons/bx_bx-user.svg" alt="User" /> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="#">Account Settings</a></li>
                          <li><a href="../settings/logout.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
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
                      <li><a class="nav-link scrollto active" href="../index.php#hero">Home</a></li>
                      <li><a class="nav-link scrollto" href="../index.php#about">About</a></li>
                      <li><a class="nav-link scrollto" href="../index.php#events">Events</a></li>
                      <li><a class="nav-link scrollto" href="../index.php#testimonials">Testimonials</a></li>
                      <li><a class="nav-link scrollto" href="./view/menu.php">Menu</a></li>
                      <li><a class="nav-link scrollto" href="../index.php#contact">Locate Us</a></li>
                      
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav><!-- .navbar -->
                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <li>
                          <div class="search-area">
                              <form method="" action="">
                                <input class="search-txt" type="text" placeholder="Search Food..." />
                                <button><img src="../assets/icons/bx_bx-search.svg" alt="" /></button>
                              </form>
                          </div>
                        </li>
                      <li><a class="nav-link scrollto user-opt" href="./view/cart.php"><img src="../assets/icons/ion_cart-outline.svg" alt="Cart" /></a></li>
                      <div class="cart">0</div>
                    
                      <li class="dropdown"><a href="#"> <img src="../assets/icons/bx_bx-user.svg" alt="User" /> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="./login.php">Login</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </div>
              </header><!-- End Header -->
        
            <?php
            }
            ?>


  <body style="background:#fff;">
  <div class="container-cart">
    <div>
      <h2>Cart</h2>
    </div>
    <div class="cart-main">
      <div class="cart-wrapper-left">
        <div class="cart-item">
          <div class="cart-img">
            <img src="../assets/images/eateries/vivieats/images.jpg" alt="">
          </div>
          <div class="cart-item-title">
            <div>
              <h2>Product Tile</h2>
            </div>
            <div>
              <p>Product Price</p>
            </div>
          </div>
          <div class="cart-item-qty">
            <div>
              <img src="../assets/icons/fluent_subtract-circle-12-regular.svg" alt="">
            </div>
            <div style="margin-top:13px;">
              <p>0</p>
            </div>
            <div>
              <img src="../assets/icons/carbon_add-alt.svg" alt="">
            </div>
          </div>
          <div class="cart-close">
            <img src="../assets/icons/ant-design_close-square-filled.svg" alt="">
          </div>
        </div>
      </div>
      <div class="cart-wrapper-left">
        <div class="cart-item">
          <div class="cart-img">
            <img src="../assets/images/eateries/vivieats/images.jpg" alt="">
          </div>
          <div class="cart-item-title">
            <div>
              <h2>Product Tile</h2>
            </div>
            <div>
              <p>Product Price</p>
            </div>
          </div>
          <div class="cart-item-qty">
            <div>
              <img src="../assets/icons/fluent_subtract-circle-12-regular.svg" alt="">
            </div>
            <div style="margin-top:13px;">
              <p>0</p>
            </div>
            <div>
              <img src="../assets/icons/carbon_add-alt.svg" alt="">
            </div>
          </div>
          <div class="cart-close">
            <img src="../assets/icons/ant-design_close-square-filled.svg" alt="">
          </div>
        </div>
      </div>
      <div class="cart-wrapper-right">
        <div class="cart-card">
          <div>
            <h2>Cart Total</h2>
          </div>
          <hr>
          <div class="cart-details">
            <div>
              <p>Subtotal:</p>  
            </div>
            <div>
              <p>&#8373;10</p>  
            </div>
          </div>
          
          <div class="cart-details">
            <div>
              <p>Delivery Fee:</p>  
            </div>
            <div>
              <p>&#8373;10</p>  
            </div>
          </div>
          <hr>
          <div class="cart-details total">
            <div>
              <h4>Total:</h4>  
            </div>
            <div>
              <h2>&#8373;10</h2>  
            </div>
          </div>
          <div class="cart-btns">
              <a href="../view/menu.php">Continue Shopping</a>
              <a href="../view/orderDetails.html">Proceed to Checkout</a>
          </div>
          
         
          
        </div>
      </div>
    </div>
    
  </div>




        <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>




</html>