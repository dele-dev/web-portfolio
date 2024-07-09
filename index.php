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
      <section class="home-area">
        <div class="container">
          <div class="row g-4">
            <div class="col-xl-4">
              <!-----Profile HTML -->
              <?php include "./includes/profilecard.php" ?>
              <!-----Profile HTML  ENDS -->
            </div>
            <div class="col-xl-4">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body work-experiance-card">
                      <h3 class="card-title">Work Experience</h3>
                      <div class="work-experiance-main">
                      <?php

                            $experience_List = getAllexpirences($user_profile); 

                            foreach ($experience_List as $experiences => $value){

                            ?>
                        <ul class="work-experiance-slider list-unstyled">
                        
                          <li>
                            <div class="date">
                              <p><?php echo $experience_List[$experiences][5] ."-".$experience_List[$experiences][6]; ?></p>
                            </div>
                            <div class="info">
                              <div class="icon">
                                <img src="assets/img/icons/adobe.svg" alt="adobe">
                              </div>
                              <div class="text">
                                <h4 class="title"><?php echo $experience_List[$experiences][4] ; ?></h4>
                                <h6 class="subtitle"><?php echo $experience_List[$experiences][2]  ?></h6>
                              </div>
                            </div>
                          </li>
      
                        </ul>
                        <?php
                            }
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="card expertise-card">
                    <div class="card-body">
                      <h3 class="card-title">My Expert Area
                      </h3>
                      <div class="expertise-main mt-24">
                        <div class="row g-3">
                        <?php

                            $language_list = getAllLanguage($user_profile); 

                            foreach ($language_list as $languages => $value){

                            ?>
                          <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                            <div class="expertise-item">
                              <div class="image text-center">
                                <img style="    width: fit-content;" src="./includes/uploads/<?php echo $language_list[$languages][3]  ?>" alt="figma">
                              </div>
                              <div class="text">
                                <h4 class="title"><?php echo $language_list[$languages][2]  ?></h4>
                              </div>
                            </div>
                          </div>
                          <?php
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card card-projects">
                <div class="card-body">
  
                  <h3 class="card-title">Recent Projects <a class="link-btn" href="portfolio.php">All Projects
                      <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
  
                    </a></h3>
                  <div class="projects-main mt-24">
                    <div class="row g-4 parent-container">
                      <?php

                      $project_list = getAllProject($user_profile); 

                      foreach ($project_list as $projects => $value){
                      ?>
                      <div class="col-lg-12">
                        <div class="project-item">
                          <div class="image">
                            <img src="./includes/uploads/<?php echo $project_list[$projects][6]  ?>" alt="project-1" class="img-fluid w-100">
                            <a href="./includes/uploads/<?php echo $project_list[$projects][6]  ?>"
                              class="gallery-popup full-image-preview parent-container">
                              <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <path d="M10 4.167v11.666M4.167 10h11.666"></path>
                              </svg>
                            </a>
                            <div class="info">
                              <span class="category"><?php echo $project_list[$projects][2]  ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php 
                      }
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="services-area mt-24">
            <div class="row g-4">
              <div class="col-xl-8">
                <div class="card services-card">
                  <div class="card-body">
                    <h3 class="card-title">Services I Offered
                      <a class="link-btn" href="services.php"> See All Services
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.16699 10H15.8337" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M10.833 15L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                          <path d="M10.833 5L15.833 10" stroke="#4770FF" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        </svg>
  
                      </a></h3>
                    <div class="services-main mt-24">
                      <div class="row g-4">
                        <?php

                        $skill_List = getAllSkill($user_profile); 

                        foreach ($skill_List as $skills => $value){

                        ?>
                        <div class="col-md-3 col-sm-6 col-6">
                          <div class="services-item text-center">
                            <div class="image">
                              <img style="    height: 100px;" src="./includes/uploads/<?php echo $skill_List[$skills][3]  ?>" alt="ui-ux">
                            </div>
                            <div class="text">
                              <h3 class="title"><?php echo $skill_List[$skills][2];  ?></h3>
                            </div>
                          </div>
                        </div>
                        <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card lets-talk-together-card">
                  <div class="card-body">
                    <div class="scrolling-info">
                      <div class="slider-item">
                        <p>
                          Available For Hire 🚀 Crafting Digital Experiences 🎨 Available For Hire 🚀 Crafting Digital
                          Experiences 🎨
                        </p>
                      </div>
                    </div>
                    <h3 class="card-title">Let's👋
                      <span class="d-block">Work Together</span>
                    </h3>
                    <a class="link-btn" href="contact.php"> Let's Talk
                      <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 11.6665V6.6665H12.5" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                        <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </a>
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