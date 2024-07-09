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
              <!-- profile card -->
              <?php include "./includes/profilecard.php" ?>
              <!-- profile card END-->
            </div>
            <div class="col-xl-8">
              <div class="card content-box-card">
                <div class="card-body portfolio-card">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title">Check Out My Latest <span>Projects</span></h1>
                      <p>I'm here to help if you're searching for a software enginear to bring your idea to life or a
                         technical partner to help take your business to the next level.</p>
                    </div>
                  </div>
                  <div class="portfolio-area">
                    <div class="row g-4 parent-container">

                    <?php

                      $project_list = getAllProject($user_profile); 

                      foreach ($project_list as $projects => $value){
                      ?>

                      <div class="col-lg-12">
                        <div class="portfolio-item">
                          <div class="image">
                            <img src="./includes/uploads/<?php echo $project_list[$projects][6]; ?>" alt="<?php echo $project_list[$projects][2]; ?>" class="img-fluid w-100">
                            <a href="./includes/uploads/<?php echo $project_list[$projects][6]; ?>"
                              class="gallery-popup full-image-preview parent-container">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M10 4.167v11.666M4.167 10h11.666"></path>
                              </svg>
                            </a>
                          </div>
                          <div class="text">
                            <div class="info">
                              <a href="portfolio-details.php?id=<?php echo $project_list[$projects][0]; ?>" class="title"><?php echo $project_list[$projects][2]; ?></a>
                              <p class="subtitle"><?php echo $project_list[$projects][8]; ?> Star ratings</p>
                            </div>
                            <div class="visite-btn">
                              <a href="portfolio-details.php?id=<?php echo $project_list[$projects][0]; ?>">Visit Site
                                <svg class="arrow-up" width="14" height="15" viewBox="0 0 14 15" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9.91634 4.5835L4.08301 10.4168" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                  <path d="M4.66699 4.5835H9.91699V9.8335" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php
                      }
                      ?>

                    </div>

                  </div>

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