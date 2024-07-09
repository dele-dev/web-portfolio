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
    <link rel="stylesheet" href="./css/simple.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title  >Dashboard -  Profile</title>

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
            <h1 class="p-relative">Profile</h1>
            <div class="profile-page pb-20">
                <!-- Overview -->
                <div class="overview rad-10 bg-white m-20 d-flex align-center flex-column-mobile">
                    <div class="avatar-box text-center p-20">
                            <?php
                                $bio_Link =  getAllBio($admin_id);
                            ?>
                        <img src="../includes/uploads/<?php echo $bio_Link[0][4]; ?>" class="mb-10">
                        <h3 class="mb-10 fw-600">
                            <?php
                              echo count($bio_Link) > 0 ? $bio_Link[0][1] ." ".$bio_Link[0][2]: "No users yet";
                            ?>
                            </h3>
                        <span class="d-block mb-15 c-grey fs-15 fw-500">                            <?php
                              echo count($bio_Link) > 0 ? $bio_Link[0][5] : "No users yet";
                            ?> </span>
                        <div class=" mb-10 bg-eee rad-6 p-relative">
                        </div>
                  
                    </div>
                    <div class="info-box w-full p-20">
                        <div class="row p-20">
                            <span class="d-block fs-15 c-grey fw-500 mb-15 text-center-mobile">Personal Information</span>
                            <div class="info d-flex align-center gap-10 text-center-mobile flex-column-mobile">
                                
                            <?php

                                $personal_List = getAllBasicInfos($admin_id); 

                                foreach ($personal_List as $personals => $value){

                            ?>
                                <div>
                                    <span class="c-grey fw-500 fs-14"><?php echo $personal_List[$personals][2] ?>:</span>
                                    <span class="fw-500 fs-15"><?php echo $personal_List[$personals][3] ?></span>
                                    <span class="removeme"><a href="action.php?id=<?php echo $personal_List[$personals][0]; ?>&type=delete&from_where=about">x</a></span>
                                </div>
                            <?php
                        
                                }
                            ?>
                                
                            </div>
                        </div>
                        <div class="row p-20">
                            <span class="d-block fs-15 c-grey fw-500 mb-15 text-center-mobile">Contact Information</span>
                            <div class="info d-flex align-center gap-10 text-center-mobile flex-column-mobile">
                                
                            <?php

                                $contact_List = getAllFeedback($admin_id); 

                                foreach ($contact_List as $contacts => $value ){
                                ?>
                                    <div>
                                        <span class="c-grey fw-500 fs-14"><?php echo $contact_List[$contacts][2]; ?>:</span>
                                        <span class="fw-500 fs-15"><?php echo $contact_List [$contacts][3]; ?></span>
                                        <span class="removeme"><a href="action.php?id=<?php echo $contact_List[$contacts][0]; ?>&type=delete&from_where=contact">x</a></span>
                                    </div>
                                <?php
                                }
                                ?>
                              
                            </div>
                        </div>
                      
                     
                    </div>
                </div>
                <!-- End Overview -->
                
                <div class="tasks p-20 rad-10 bg-white">
                    <h1>Profile</h1>
                    <form action="" method="post"  enctype="multipart/form-data">
                                                <!-- General Info Widget -->
                            <div class="general-info p-20 bg-white rad-10">
                                 
                                    <div class="mb-15">
                                            <label for="description" class="fs-14 c-grey mb-5 d-block">First Name</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="firstname" class="w-full p-10 b-none border-ccc rad-6 " id="firstname" >            
                                            </div>
                                    </div>
                                    <div class="mb-15">
                                            <label for="description" class="fs-14 c-grey mb-5 d-block">Last name</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="lastname" class="w-full p-10 b-none border-ccc rad-6 " id="lastname" >            
                                            </div>
                                    </div>
                                    <div class="mb-15">
                                            <label for="description" class="fs-14 c-grey mb-5 d-block">Middle Name</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="middlename" class="w-full p-10 b-none border-ccc rad-6 " id="middlename" >            
                                            </div>
                                    </div>

                                    <div class="mb-15">
                                            <label for="picture" class="fs-14 c-grey mb-5 d-block">Profile Picture</label>
                                            <input type="file"  required  name="profiledp" class="w-full p-10 b-none border-ccc rad-6" id="profilepicture">
                                    </div>
                                    <div class="mb-15">
                                            <label for="bio" class="fs-14 c-grey mb-5 d-block">Your Bio </label>
                                            <textarea placeholder="I am..."  required  name="biotext" class="w-full p-10 b-none border-ccc rad-6" id="biotext"></textarea>
                                    </div>
                                    
                                  
                                    
                                    <div class="mb-15">
                                        <button type="submit" style="padding: 10px;width: 100px;" name="save" class="bg-blue btn-shape fs-14 c-white b-none d-line my-pointer ">Add new</button>
                                    </div>
                                    <div class="mb-15">

                                    </div>
                                </div>
                        </div>
                        <?php 
                                if(isset($_POST["save"])){
                                        $firstname = $_POST["firstname"];
                                        $lastname = $_POST["lastname"];
                                        $middlename = $_POST["middlename"];
                                        $biotext = $_POST["biotext"];

                                        $profile_picture = uploasFiles ("profiledp");

                                        $_POST["picture_url"] = ($profile_picture[0] == true ) ? $profile_picture[1] : "";

                                        $fields = ($firstname !== "" && $lastname !== ""  && $middlename !== "" && $biotext !== "" ) ? true : false;


                                        
                                        if($fields){ // check for empty fields

                                            if(saveBio($_POST)){
                                                echo "Profile Saved!";
                                            }else{
                                                echo "Umable to save Profile, please try again!";;
                                            }
                                    }else{
                                        echo "Fields can't be empty!";
                                    }
                                }
                        ?>

                                <!-- End General Info Widget -->
                    </form>

                    <h1>Personal Information</h1>
                    <form action="" method="post">
                                                <!-- General Info Widget -->
                            <div class="general-info p-20 bg-white rad-10">
                                 
                                    <div class="mb-15">
                                            <label for="title" class="fs-14 c-grey mb-5 d-block">Title</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="title" class="w-full p-10 b-none border-ccc rad-6 " id="title" >            
                                            </div>
                                    </div>
                                    <div class="mb-15">
                                            <label for="description" class="fs-14 c-grey mb-5 d-block">Description</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="description" class="w-full p-10 b-none border-ccc rad-6 " id="lastname" >            
                                            </div>
                                    </div>
                                  
                                    
                                    <div class="mb-15">
                                        <button type="submit" style="padding: 10px;width: 100px;" name="save_personal" class="bg-blue btn-shape fs-14 c-white b-none d-line my-pointer ">Add new</button>
                                    </div>
                                    <div class="mb-15">

                                    </div>
                                </div>
                        </div>
                                <!-- End General Info Widget -->
                                <?php 
                                    if(isset($_POST["save_personal"])){
                                            $title = $_POST["title"];
                                            $description = $_POST["description"];


                                            $fields = ($title !== "" && $description !== "" ) ? true : false;

                                            if($fields){ // check for empty fields
                                                $_POST["user_id"] = $admin_id;

                                                if(saveBasicInfo($_POST)){
                                                    echo "New Personal info Saved!";
                                                }else{
                                                    echo "Umable to save Profile, please try again!";
                                                }
                                        }else{
                                            echo "Fields can't be empty!";
                                        }
                                    }
                                ?>

                    </form>

                    <h1>Contact Information</h1>
                    <form action="" method="post">
                                                <!-- General Info Widget -->
                            <div class="general-info p-20 bg-white rad-10">
                                 
                                    <div class="mb-15">
                                            <label for="title" class="fs-14 c-grey mb-5 d-block">Title</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="title" class="w-full p-10 b-none border-ccc rad-6 " id="title" >            
                                            </div>
                                    </div>
                                    <div class="mb-15">
                                            <label for="description" class="fs-14 c-grey mb-5 d-block">Value</label>
                                            <div class="d-flex gap-10 align-center">
                                                <input type="text" placeholder="eg: john" required name="value" class="w-full p-10 b-none border-ccc rad-6 " id="lastname" >            
                                            </div>
                                    </div>
                                    
                                  
                                    
                                    <div class="mb-15">
                                        <button type="submit" style="padding: 10px;width: 100px;" name="save_contact" class="bg-blue btn-shape fs-14 c-white b-none d-line my-pointer ">Add new</button>
                                    </div>
                                    <div class="mb-15">

                                    </div>

                                </div>

                                <?php 
                                if(isset($_POST["save_contact"])){
                                        $title = $_POST["title"];
                                        $value = $_POST["value"];


                                        $fields = ($title !== "" && $value !== "" ) ? true : false;

                                        if($fields){ // check for empty fields
                                            $_POST["user_id"] = $admin_id;

                                            if(saveContacts($_POST)){
                                                echo "New Contact info Saved!";
                                            }else{
                                                echo "Umable to save Profile, please try again!";
                                            }
                                    }else{
                                        echo "Fields can't be empty!";;
                                    }
                                }
                        ?>
                        </div>
                                <!-- End General Info Widget -->
                    </form>
                
                </div>


                
                
             

            </div>


        </div>
        <!-- End Content -->
    </div>
</body>
</html>