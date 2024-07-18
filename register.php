<?php 
$dataLink = "single";
include "./controller/Central.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web site -  Personal Portfolio | join Us</title>
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


    <!-- main area part start -->
    <main>

      <section class="content-box-area mt-4">
        <div class="container">
          <div class="row g-4">
          <div class="col-xl-7">
              <div class="card profile-card">
                <div class="card-body">
                    <img style="    width: 37em;" src="assets/img/blog/blog-img-4.jpg" alt="profile">
                </div>
              </div>
          </div>
            <div class="col-xl-5">
              <div class="card content-box-card">
                <div class="card-body portfolio-card contact-card">
                  <div class="top-info">
                    <a href="index.php"> <img src="./assets/img/icons/awwwards.png" alt="Logo" srcset=""> </a>
                    <br>
                    <br>
                    <div class="text">
                      <h1 class="main-title">Join 👋 <span>Us</span> Today!</h1>
                      <p>Be part of this great.</p>
                    </div>
                  </div>
                  <div class="contact-area">
                    <div class="leave-comments-area">
                      <div class="comments-box">
                        <form   method="POST">
                          <div class="row gx-3">
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">First Name</label>
                                <input name="firstname" required type="text" class="form-control shadow-none" placeholder="first name eg: kofi">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Last Name</label>
                                <input name="lastname" required type="text" class="form-control shadow-none" placeholder="last name eg: Olukemi">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none" placeholder="Enter your email">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Pasword</label>
                                <input name="password" required type="password" class="form-control shadow-none" placeholder="eg we322i99834jnsd">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Confirm Password</label>
                                <input name="confirm-password" required type="password" class="form-control shadow-none" placeholder="eg we322i99834jnsd">
                              </div>
                            </div>


                            <div class="col-md-12">
                              <button class="submit-btn" name="save_user" type="submit">
                                Create Account
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </button>
                              <a href="login.php">Already a member? Login instead!</a>
                            </div>
                            <?php
                                if(isset($_POST["save_user"])){

                                  $firstname = $_POST["firstname"];
                                  $lastname = $_POST["lastname"];
                                  $email = $_POST["email"];
                                  $password = $_POST["password"];
                                  $confirm_password = $_POST["confirm-password"];

                                  $fields = ($firstname !== "" && $lastname !== ""  && $email !== "" && $password !== "" && $confirm_password !== "" ) ? true : false;

                                  if($fields){ // check for empty fields

                                    if($confirm_password != $password){ // check that password is confrimed! 
                                        echo " Password not match!";
                                    }else{

                                        if(saveBioNew($_POST)){
                                          echo "User registion successful!";
                                        }else{
                                            echo "Umable to save Profile, please try again!";;
                                        }
                                        
                                    }

                              }else{
                                  echo "Fields can't be empty!";
                              }
                          }
                            ?>
                          </div>
                        </form>
                        <p class="ajax-response mb-0"></p>
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