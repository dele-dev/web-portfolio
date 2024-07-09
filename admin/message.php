<?php 
$dataLink = "double";
include "../controller/Central.php";
    
 $admin_id =   $_SESSION["adminlogin"] ;
 $admin_username = $_SESSION["adminUsername"];

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Dashboard - Feedback</title>
</head>
<body class="bg-eee">
    <div class="page d-flex bg-eee">
        <!-- Sidebar -->
        <?php 
            include './includes/aside.php';
        ?>
        <!-- End Sidebar -->
        <!-- Content -->
        <div class="content w-full">
            <!-- Content Head -->
            <div class="head p-20 p-10-mobile bg-white between-flex">
                <div class="search p-relative">
                    <input class="p-10 rad-10" type="search" placeholder="Type A Keyword">
                </div>
                <div class="icons d-flex align-center">
                    <a href="#" class="mr-15 p-relative"><i class="fa-regular fa-bell fa-lg"></i></a>
                    <img src="./imgs/avatar.png">
                </div>
            </div>
            <!-- End Content Head -->
            <h1 class="p-relative">Dashboard -  </h1>
            <!-- Wrapper -->
            <div class="wrapper d-grid gap-20">

            </div>
            <!-- End Wrapper -->
           <!-- Projects Table -->
           <div class="projects p-20 bg-white rad-10 m-20">
                <h2 class="mb-20">Feedbacks</h2>
                <div class="responsive-table">
                    <table class="w-full fs-15 fw-500">
                        <thead>
                            <tr>
                                <td class="fw-bold bg-eee">S_n</td>
                                <td class="fw-bold bg-eee">Name</td>
                                <td class="fw-bold bg-eee">Email</td>
                                <td class="fw-bold bg-eee">Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                             <?php

                                            $allFeedBacks = [];

                                            // test for null
                                            if(getAllMessage ()){

                                            $allFeedBacks = getAllMessage () ; 
                                            // test for empty array
                                            $allFeedBacks = count($allFeedBacks) < 1 ? [] : $allFeedBacks;
                                            }

                                            $conter = 0;
                                foreach ($allFeedBacks as $feedba  => $value ){
                         
                                     
                            ?>
                            <tr>
                                <td><?php echo ($conter + 1) ; ?></td>
                                <td><?php echo $allFeedBacks[$feedba]["2"]; ?></td>
                                <td><?php echo $allFeedBacks[$feedba]["3"]; ?></td>
                                <td><?php echo $allFeedBacks[$feedba]["7"]; ?></td>
                               
                            </tr>

                           <?php
                                     

                                    }
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Projects Table -->
        </div>
        <!-- End Content -->
    </div>
</body>
</html>