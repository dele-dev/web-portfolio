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
    <title>Dashbaod - Award</title>
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
            <h1 class="p-relative">Awards</h1>

            <form action="" method="post">
                                                <!-- General Info Widget -->
                                <div class="general-info p-20 bg-white rad-10">
                                 
                                <div class="mb-15">
                                        <label for="from" class="fs-14 c-grey mb-5 d-block">Title</label>
                                        <div class="d-flex gap-10 align-center">
                                            <input type="text" placeholder="eg: john" required name="title" class="w-full p-10 b-none border-ccc rad-6 " id="title" >
                                        
                                        </div>
                                </div>
                                <div class="mb-15">
                                        <label for="Description" class="fs-14 c-grey mb-5 d-block"> Description </label>
                                        <textarea  placeholder="eg: need the money..." required name="description" class="w-full p-10 b-none border-ccc rad-6" id="description"></textarea>
                                </div>

                                <div class="mb-15">
                                        <label for="awarder" class="fs-14 c-grey mb-5 d-block">Awarder</label>
                                        <input type="text"  required  name="awarder" class="w-full p-10 b-none border-ccc rad-6" id="last-name">
                                 </div>
                                 
                                  
                                    
                                    <div class="mb-15">
                                        <button type="submit" style="padding: 10px;width: 100px;" name="save" class="bg-blue btn-shape fs-14 c-white b-none d-line my-pointer ">Add new</button>
                                    </div>
                                    <div class="mb-15">

                                    </div>

                                    <?php 
                                    if(isset($_POST["save"])){
                                            $title = $_POST["title"];
                                            $description = $_POST["description"];
                                            $awarder = $_POST["awarder"];


                                            $fields = ($title !== "" && $description !== "" && $awarder !== "" ) ? true : false;

                                            if($fields){ // check for empty fields

                                                $_POST["user_id"] = $admin_id;

                                                if(saveAward($_POST)){
                                                    echo "New Award info Saved!";
                                                }else{
                                                    echo "Umable to save Profile, please try again!";
                                                }
                                        }else{
                                            echo "Fields can't be empty!";
                                        }
                                    }
                                ?>
                                
                                </div>

                                <!-- End General Info Widget -->
                </form>
                <br>
                <br>
            <div class="friends-page wrapper pb-20 m-20 d-grid gap-20">
                
            <?php

                $award_List = getAllAward($admin_id); 

                foreach ($award_List as $awards => $value){

                ?>

                <div class="friend p-20 rad-6 bg-white p-relative">    
                    <div class="foot between-flex gap-10 flex-column-mobile">
                        <span class="c-grey fs-13 fw-500"><?php echo $award_List[$awards][2]; ?></span>
                        <span class="c-grey fs-13 fw-500"> <?php echo $award_List[$awards][3];  ?></span>
                        <span class="c-grey fs-13 fw-500"><?php echo $award_List[$awards][4]; ?></span>
                        <div>
                            <a href="delete.php?id=<?php echo $award_List[$awards][0] ?>" class="btn-shape bg-red c-white fs-13">remove</a>
                        </div>
                    </div>
                </div>


                <?php 
                                }
                    ?>

                
              
            </div>
        </div>
        <!-- End Content -->
    </div>
</body>
</html>