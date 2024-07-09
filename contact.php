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
                <div class="card-body portfolio-card contact-card">
                  <div class="top-info">
                    <div class="text">
                      <h1 class="main-title">Let's 👋 <span>Work</span> Together</h1>
                      <p>I'm here to help if you're searching for a software enginear to bring your
                         idea to life or a technical partner to help take your business to the next level.</p>
                    </div>
                  </div>
                  <div class="contact-area">
                    <div class="leave-comments-area">
                      <div class="comments-box">
                        <form   method="POST">
                          <div class="row gx-3">
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Name</label>
                                <input name="name" required type="text" class="form-control shadow-none" placeholder="Enter your name">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none" placeholder="Enter your email">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Subject</label>
                                <input name="subject" required type="text" class="form-control shadow-none" placeholder="Subject">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-4">
                                <label class="form-label">Budget</label>
                                <select name="budget" required class="form-select shadow-none">
                                  <option disabled selected>Select budget...</option>
                                  <option value="$5000">$5000</option>
                                  <option value="$5000 - $1000">$5000 - $10000</option>
                                  <option value="$10000 - $2000">$10000 - $20000</option>
                                  <option value="$20000">$20000+</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-4">
                                <label class="form-label">Comment</label>
                                <textarea name="message" class="form-control shadow-none" rows="4"
                                  placeholder="Type details about your inquiry"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <button class="submit-btn" name="message_save" type="submit">
                                Send Message
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.5 11.6665V6.6665H12.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M17.5 6.6665L10 14.1665L2.5 6.6665" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </button>
                            </div>
                            <?php
                                  if(isset($_POST["message_save"])){
                                        $name = $_POST["name"];
                                        $email = $_POST["email"];
                                        $subject = $_POST["subject"];
                                        $budget = $_POST["budget"];
                                        $message = $_POST["message"];


                                        $fields = ($name !== "" && $email !== "" && $subject !== ""
                                        && $budget !== "" && $message !== "" ) ? true : false;

                                        if($fields){ // check for empty fields

                                            $_POST["user_id"] = $user_profile;

                                            if(saveMessage($_POST)){
                                                if(sendEmail_ ($data,$recieverEmail)){
                                                  echo "Message sent successfully!";
                                                }else{
                                                  echo "Oooops! kind resend!";
                                                }
                                            }else{
                                                echo "Umable to send Message, please try again!";
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
                    <div class="contact-map-area">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25280012016!2d-74.14448732737499!3d40.69763123331177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1711832776336!5m2!1sen!2sbd"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- FAQ -->
                    <?php include "./includes/faq.php" ?>
                    <!-- FAQ END -->
                    
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