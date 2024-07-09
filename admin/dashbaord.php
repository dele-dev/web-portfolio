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
    <link rel="stylesheet" href="./css/patch.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Admin - Dashboard</title>
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
            <h1 class="p-relative">Dashboard</h1>
            <!-- Wrapper -->
            <div class="wrapper d-grid gap-20">
                <!-- Welcome Widget -->
                <div class="welcome bg-white rad-10 overflow-hidden text-center-mobile">
                    <div class="intro p-20 bg-eee between-flex block-mobile">
                        <div class="text">
                            <h2>Welcome,</h2>
                            <p class="c-grey mt-5"><?php 
                                    echo '@Admin';
                            ?></p>
                        </div>
                        <img class="welcome-img hide-mobile" src="./imgs/welcome.png">
                    </div>
                    <?php
                                $bio_Link =  count(getAllBio($admin_id)) > 0 ? getAllBio($admin_id) : [] ;
                            ?>
                    <img class="avatar-img" src="../includes/uploads/<?php echo $bio_Link[0][4]; ?>">
                    <div class="body p-20">
                        <div class="info d-flex mb-20 gap-10 text-center block-mobile">
                            <div class="mb-20 mt-20">
                            
                            <?php 
                              echo count($bio_Link) > 0 ? $bio_Link[0][1] ." ".$bio_Link[0][2]: "No users yet";
                            ?>
                            <span class="d-block c-grey mt-5 fs-14">Level one</span></div>
                        
                        </div>
                       
                    </div>
                </div>
                <!-- End Welcome Widget -->
                              
                <!-- Tickets Widget -->
                <div class="tickets p-20 rad-10 bg-white">
                    <h2>Widgets</h2>
                    <p class="fs-14 mt-5 c-grey">Everything in one</p>
                    <div class="stats d-flex gap-20 mt-20 flex-wrap">
                        <div class="box p-20 c-grey rad-10 text-center">
                            <i class="fa-regular fa-envelope fa-2x c-orange mb-10"></i>
                            <span class="d-block fs-25 mb-5 c-black">
                                <?php 
                                 
                                 // test for null
                                 if(getAllMessage() !== null){

                                    $contactList = getAllMessage () ;
                                    // test for empty array
                                    echo count($contactList) < 1 ? 0 : count($contactList);
                                 }else{
                                    echo 0;
                                 }
                                    
                            ?>
                            </span>
                            Contacts Messages
                        </div>
                        <div class="box p-20 c-grey rad-10 text-center">
                            <i class="fa-solid fa-medal fa-2x c-blue mb-10"></i>
                            <span class="d-block fs-25 mb-5 c-black"><?php
                                           // test for null
                                     if(getAllAward ($admin_id) !== null){
                                        
                                        $awardList = getAllAward ($admin_id) ; 
                                        // test for empty array
                                       echo count($awardList) < 1 ? 0 : count($awardList);
                                    }else{
                                            echo 0;
                                   }

                                ?>
                                </span>
                            Awards
                        </div>
                        <div class="box p-20 c-grey rad-10 text-center">
                            <i class="fa-regular fa-file-alt fa-2x c-green mb-10"></i>
                            <span class="d-block fs-25 mb-5 c-black"><?php
                            
                                     // test for null
                                     if(getAllFrameWork ($admin_id) !== null){

                                        $frameWorkList = getAllFrameWork ($admin_id) ;
                                         
                                         // test for empty array
                                        echo count($frameWorkList) < 1 ? 0 : count ($frameWorkList);
                                     }else{
                                             echo 0;
                                    }

                                ?></span>
                            Frame works
                        </div>
                        <div class="box p-20 c-grey rad-10 text-center">
                            <i class="fa-regular fa-folder fa-2x c-red mb-10"></i>
                            <span class="d-block fs-25 mb-5 c-black"><?php  
                                          // test for null
                                     if(getAllProject ($admin_id) !== null){

                                        $projectList = getAllProject ($admin_id) ; 
                                        // test for empty array
                                       echo count($projectList) < 1 ? 0 : count ($projectList);
                                    }else{
                                            echo 0;
                                   }
                                ?> </span>
                             Projects
                        </div>
                    </div>
                </div>
                <!-- End Tickets Widget -->
             

                <!-- Tasks Widget -->
                <div class="tasks p-20 rad-10 bg-white">
                    <h2 class="mb-20">My Experiences </h2>
                    <hr><br>

                    <div class="scroll-it">

                            <?php

                                $experienceList = [];

                                   // test for null
                                if(getAllexpirences ($admin_id) !== null){

                                    $experienceList = getAllexpirences ($admin_id) ; 
                                    // test for empty array
                                    $experienceList = count($experienceList) < 1 ? [] : $experienceList;
                                }
                                    
                                foreach ($experienceList as $experiences => $value ){
                            ?>
                                                                
                                        <div class="task-row between-flex gap-10">
                                            <div class="info">
                                                <h3 class="fs-16 fw-bold mb-5"><?php echo $experienceList[$experiences]["2"] !== null ? $experienceList[$experiences]["2"] : ""; ?></h3>
                                                <small class="fs-12 fw-semi-bold mb-10"><?php echo  $experienceList[$experiences]["4"] !== null ? $experienceList[$experiences]["4"] : ""; ?></small> :: <?php echo $experienceList[$experiences]["3"] !== null ? $experienceList[$experiences]["3"] : ""; ?>                                    
                                                
                                                <p class="fs-14 c-grey"><?php echo $experienceList[$experiences]["5"] !== null ? $experienceList[$experiences]["5"] : ""; ?></p>
                                            </div>
                                            
                                        </div>
                            
                            <?php
                                    }
                            ?>       
                  
                    </div>
                </div>
                <!-- End Tasks Widget -->
             

                <!-- Reminders Widget -->
                <div class="reminders p-20 bg-white rad-10">
                    <h2 class="mb-20">Hoobies </h2>
                    <hr>
                    <br>


                    <ul>
                      
                    <?php

                            $hoobieList = [];

                            // test for null
                            if(getAllHoobie ($admin_id) !== null){

                            $hoobieList = getAllHoobie ($admin_id) ; 
                            // test for empty array
                            $hoobieList = count($hoobieList) < 1 ? [] : $hoobieList;
                            }

                                    
                                foreach ($hoobieList as $hoobies => $value ){
                         
                            ?>
                                 <li class="d-flex align-center">
                                    <span class="key mr-15 bg-green rad-half"></span>
                                    <div class="info green pl-15">
                                        <p class="fs-15 fw-600 mb-5"><?php echo $hoobieList[$hoobies]["2"]; ?></p>
                                        <small class="fs-12 fw-semi-bold mb-10"> <?php echo $hoobieList[$hoobies]["3"]; ?> 
                                        <span class="fs-13 c-grey"><?php echo $hoobieList[$hoobies]["3"]; ?></span>
                                    </div>
                                </li>
                            <?php
                                }
                            ?> 
                       

                    </ul>
                </div>
                <!-- End Reminders Widget -->
              
              

            </div>
            <!-- End Wrapper -->
            <!-- Projects Table -->
            <div class="projects p-20 bg-white rad-10 m-20">
                <h2 class="mb-20">Frequently Ask Question</h2>
                <div class="responsive-table">
                    <table class="w-full fs-15 fw-500">
                        <thead>
                            <tr>
                                <td class="fw-bold bg-eee">S_n</td>
                                <td class="fw-bold bg-eee">Question</td>
                                <td class="fw-bold bg-eee">Answer</td>
                                <td class="fw-bold bg-eee">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            
                             <?php


                                 $faqList = [];

                                // test for null
                                if(getAllFaq ($admin_id) !== null){

                                $faqList = getAllFaq ($admin_id) ; 
                                // test for empty array
                                $faqList = count($faqList) < 1 ? [] : $faqList;
                                }

                                $conter = 0;


                                foreach ($faqList as $faqs  => $value ){
                         
                                     if($conter  < 10){
                            ?>
                            <tr>
                                <td><?php echo ($conter + 1) ; ?></td>
                                <td><?php echo $faqList[$faqs]["2"]; ?></td>
                                <td><?php echo $faqList[$faqs]["3"]; ?></td>
                                <td>
                                    <a href="action.php?id=<?php echo $faqList[$faqs]["0"] ?>&type=delete&from_where=faq" > remove</a>
                                </td>
                                
                            </tr>

                           <?php
                                     }

                                     $conter +=1;

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