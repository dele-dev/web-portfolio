<?php 
$dataLink = "double";
    include "../controller/Admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/framework.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/patch.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <title>Admin - Login</title>
</head>
<body class="bg-eee">
    <div class="page d-flex bg-eee">
      
        <!-- Content -->
        <div class="content margin-fit">
          
            <h1 class="p-relative">Admin Auth </h1>
            <div class="wrapper d-grid gap-20 pb-20">
             

                    <form  method="post">
                                                    <!-- General Info Widget -->
                                    <div class="general-info p-20 bg-white rad-10">
                                        
                                     
                                        <div>
                                            <label for="email" class="fs-14 c-grey mb-5 d-block">Username</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="" required name="username" class="w-full p-10 b-none border-ccc rad-6 " id="Email" >
                                            
                                            </div>
                                        </div>
                                        <div class="mb-15">
                                            <label for="password" class="fs-14 c-grey mb-5 d-block">Password</label>
                                            <input type="password" placeholder="eg: 2332wejsdkjsd" required  name="password" class="w-full p-10 b-none border-ccc rad-6" id="last-name">
                                        </div>
                                       
                                        <div class="mb-15">
                                            <button type="submit" name="adminlogin" class="bg-blue btn-shape fs-14 c-white b-none d-block my-pointer">Login</button>
                                        </div>

                                    </div>
                                    <!-- End General Info Widget -->
                    </form>
               
                    <?php

// echo sha1(base64_encode("admin_myuser")) ."<br/>";
// echo sha1(base64_encode("pasword12@#1"));


                        if(isset($_POST['adminlogin'])){

                            if($_POST['username'] != "" && $_POST['password'] != ""  ){

                                        if(authenticateAdmin($_POST)){
                                            echo '<script> window.location.replace("dashbaord.php");</script>';
                                        }else {
                                            echo "Something happened! Please try again!";
                                        }
                            }else{

                                echo "fields can't be empty! ";

                            }

                        }

                        ?>


</div>
                
            </div>
        </div>
        <!-- End Content -->
    </div>
</body>
</html>