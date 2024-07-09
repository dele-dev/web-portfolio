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
              <!----profile HTML---->
              <?php include "./includes/profilecard.php" ?>
              <!-----Pprofile HTML----->
            </div>
            <div class="col-xl-8">
              <div class="card content-box-card">
                <div class="card-body">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title">Hi, This Is <span><?php echo $bio_Link[0][1] ." ".$bio_Link[0][2] ; ?></span> 👋</h1>
                      <p><?php echo $bio_Link[0][5]; ?> </p>
                    </div>
                    <div class="available-btn">
                      <span><i class="fas fa-circle"></i> Available For Hire</span>
                    </div>
                  </div>
                  <div class="counter-area">
                    <div class="counter">
                      <div class="counter-item">
                        <h3 class="number"><?php echo count(getAllexpirences($user_profile)) ; ?>+</h3>
                        <p class="subtitle">Different Experiences</p>
                      </div>
                      <div class="counter-item">
                        <h3 class="number"><?php echo count(getAllProject($user_profile)) ; ?>+</h3>
                        <p class="subtitle">Project Completed
                        </p>
                      </div>
                      <div class="counter-item">
                        <h3 class="number"><?php echo count(getAllAward($user_profile)) ; ?>+</h3>
                        <p class="subtitle">Awards
                        </p>
                      </div>
                    </div>
                    <div class="circle-area">
                      <div class="circle-text">
                        <img class="circle-image" src="assets/img/about-us/circle-text.svg" alt="circle-text">
                        <img class="circle-image circle-image-light d-none"
                          src="assets/img/about-us/circle-text-light.svg" alt="circle-text">
                        <span class="arrow-down">
                          <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 5V35" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                            <path d="M15 30L20 35L25 30" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-----working with brands ---->
                  <?php include "./includes/workedwith.php" ?>
                  <!-----working with brands ENDS---->
                  <?php include "./includes/trustedclient.php" ?>
                  <!------awards and recognitions ----->
                      <?php include "./includes/awardsrecognition.php" ?>
                  <!------awards and recognitions ENDS----->


                  <!---- Article----->
                  <?php

                  ?>
                  <!---------Article END------------->
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