<?php 
$dataLink = "single";
include "./controller/Central.php";
    
 $user_profile =   1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web site -  Personal Portfolio </title>
  <meta name="description" content="Web site -  Personal Portfolio ">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawsome/css/all.min.css">
  <link rel="stylesheet" href="assets/fontawsome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
  <div id="page-content">
    <!-- header part start -->
    <?php include "./includes/header.php" ?>
    <!-- header part end -->

    <!-- main area part start -->
    <main>

      <section class="content-box-area mt-4">
        <div class="container">
          <div class="row g-4">
            <div class="col-xl-4">
              <!----- profile cards ---->
              <?php include "./includes/profilecard.php" ?>
              <!----- profile cards END ---->
            </div>
            <div class="col-xl-8">
              <div class="card content-box-card">
                <div class="card-body">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title">Languages that I <span>Use</span></h1>
                      <p>Transforming Ideas into Innovative Reality, Let's Elevate Your Vision together <b>Using my Software Engnearing </b> Skills!</p>
                    </div>
                    <div class="available-btn">
                      <span><i class="fas fa-circle"></i> Available For Hire</span>
                    </div>
                  </div>
                  <div class="services">
                    <div class="row g-4">
                      
                    <?php

                      $language_list = getAllLanguage($user_profile); 

                      foreach ($language_list as $languages => $value){

                      ?>
                      <div class="col-md-3 col-sm-6 col-6">
                        <div class="services-item text-center">
                          <div class="image">
                            <img style="    width: 100%;" src="./includes/uploads/<?php echo $language_list[$languages][3]; ?>" alt="ui-ux">
                          </div>
                          <div class="text">
                            <h3 class="title"><?php echo $language_list[$languages][2]; ?></h3>
                          </div>
                        </div>
                      </div>
<?php
                      }
?>
                    </div>
                    <div class="block-image">
                      <img src="assets/img/blog/blog-img-1.jpg" alt="blog-img-1" class="img-fluid w-100">
                    </div>
                  </div>
                  <!-- working with -->
                  <?php include "./includes/workedwith.php" ?>
                  <!-- working with END-->


                  <!-- trusted client -->
                  <?php include "./includes/trustedclient.php" ?>
                  <!-- trusted client END-->


                  <!-- trusted client -->
                  <?php include "./includes/awardsrecognition.php" ?>
                  <!-- trusted client END-->


                  <!-- trusted client -->
                  <?php include "./includes/faq.php" ?>
                  <!-- trusted client END-->

                  <div class="work-together-slider">
                    <div class="slider-main d-flex gap-4 align-items-center">
                      <div class="slider-item">
                        <a href="contact.php">Let's 👋 Work Together</a>
                        <a href="contact.php">Let's 👋 Work Together</a>
                      </div>
                      <div class="slider-item">
                        <a href="contact.php">Let's 👋 Work Together</a>
                        <a href="contact.php">Let's 👋 Work Together</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- background shape area start -->
      <div class="background-shapes">
        <div class="shape-1 common-shape">
          <img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
        </div>
        <div class="shape-2 common-shape">
          <img src="assets/img/bg/banner-shape-1.png" alt="banner-shape-1">
        </div>
        <div class="threed-shape-1 move-with-cursor" data-value="1">
          <img src="assets/img/bg/object-3d-1.png" alt="object-3d-1">
        </div>
        <div class="threed-shape-2 move-with-cursor" data-value="1">
          <img src="assets/img/bg/object-3d-2.png" alt="object-3d-2">
        </div>
      </div>
      <!-- background shape area end -->
    </main>
    <!-- main area part end -->

    <!-- footer part start -->
    <?php include "./includes/footer.php" ?>
    <!-- footer part end -->
  </div>

  <!-- JS here -->
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/clipboard.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>


</html>