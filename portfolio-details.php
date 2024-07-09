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

    <?php
     
      if(isset ($_GET["id"])){

          $product_id  = $_GET["id"];
          $projectSelect =  getProjectById($user_profile,$product_id); 

      }
    ?>
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
                  <div class="portfolio-details-area">
                    <div class="main-image">
                      <img src="./includes/uploads/<?php echo $projectSelect[0][6]; ?>" alt="project-details-1">
                    </div>
                    <div class="portfolio-details-text">
                      <div class="short-info">
                        <div class="info-item">
                          <p class="subtitle">Start:</p>
                          <h4 class="card-title"><?php echo $projectSelect[0][4]; ?></h4>
                        </div>
                        <div class="info-item">
                          <p class="subtitle">End:</p>
                          <h4 class="card-title"><?php echo $projectSelect[0][5]; ?></h4>
                        </div>
                      </div>
                      <div class="overview">
                        <h4 class="card-title">Overview</h4>
                        <p><?php echo $projectSelect[0][3]; ?></p>
                        
                      </div>
                    </div>
                    <div class="inner-images">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <div class="image-item">
                            <img src="./includes/uploads/<?php echo $projectSelect[0][7]; ?>" alt="project-details-2"
                              class="img-fluid w-100">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="image-item">
                            <img src="./includes/uploads/<?php echo $projectSelect[0][6]; ?>" alt="project-details-3"
                              class="img-fluid w-100">
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </div>

                  <div class="work-together-slider">
                    <div class="slider-main d-flex gap-4 align-items-center">
                      <div class="slider-item">
                        <a href="contact.html">Let's 👋 Work Together</a>
                        <a href="contact.html">Let's 👋 Work Together</a>
                      </div>
                      <div class="slider-item">
                        <a href="contact.html">Let's 👋 Work Together</a>
                        <a href="contact.html">Let's 👋 Work Together</a>
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
    <footer class="footer-area">
      <div class="container">
        <div class="text text-center">
          <p>@ BentoFolio 2024, Design By <a href="#">MarvelTheme</a></p>
        </div>
      </div>
    </footer>
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