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
    <title>Dashbaod - Project</title>
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
            <h1 class="p-relative">Projects</h1>

            <form action="" method="post" enctype="multipart/form-data">
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
                                        <label for="logo" class="fs-14 c-grey mb-5 d-block"> First Look  </label>
                                        <input type="file"  required  name="look1" class="w-full p-10 b-none border-ccc rad-6" id="logo">

                                    </div>
                                <div class="mb-15">
                                        <label for="logo" class="fs-14 c-grey mb-5 d-block"> Second Look  </label>
                                        <input type="file"  required  name="look2" class="w-full p-10 b-none border-ccc rad-6" id="logo">
                                </div>

                                <div class="mb-15">
                                        <label for="rate" class="fs-14 c-grey mb-5 d-block">Rate your self</label>
                                        <select   required  name="rate" class="w-full p-10 b-none border-ccc rad-6" id="rate">
                                                <option >5</option>
                                                <option >4</option>
                                                <option >3</option>
                                                <option >2</option>
                                                <option >1</option>
                                        </select>
                                 </div>

                                <div class="mb-15">
                                        <label for="start_date" class="fs-14 c-grey mb-5 d-block">Start Date</label>
                                        <input type="date"  required  name="start_date" class="w-full p-10 b-none border-ccc rad-6" id="start_date">
                                 </div>
                                <div class="mb-15">
                                        <label for="end_date" class="fs-14 c-grey mb-5 d-block">End Date</label>
                                        <input type="date"  required  name="end_date" class="w-full p-10 b-none border-ccc rad-6" id="end_date">
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
                                                $rate = $_POST["rate"];
                                                $start_date = $_POST["start_date"];
                                                $end_date = $_POST["end_date"];

                                                $url_1 = uploasFiles ("look1");
                                                $url_2 = uploasFiles ("look2");

                                                $_POST["url_1"] = ($url_1[0] == true ) ? $url_1[1] : "";
                                                $_POST["url_2"] = ($url_2[0] == true ) ? $url_2[1] : "";


                                                $fields = ($title !== "" && $rate !== ""  && $description !== "" && $start_date !== "" && $end_date !== "" ) ? true : false;


                                                
                                                if($fields){ // check for empty fields

                                                    $_POST["profile_id"] = $admin_id;
                                                        
                                                    if(saveProject ($_POST)){
                                                        echo "New Project Saved!";
                                                    }else{
                                                        echo "Umable to save Profile, please try again!";;
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

                    $project_list = getAllProject($admin_id); 

                    foreach ($project_list as $projects => $value){
                    ?>

                    <div class="friend p-20 rad-6 bg-white p-relative">    
                        <div class="foot between-flex gap-10 flex-column-mobile">
                            <span class="c-grey fs-13 fw-500"><?php echo $project_list[$projects][2]; ?></span>
                            <span class="c-grey fs-13 fw-500"><?php echo $project_list[$projects][3]; ?></span>
                            <span class="c-grey fs-13 fw-500"><img src="../includes/uploads/<?php echo $project_list[$projects][6]; ?>" class="mb-10"></span>
                            <span class="c-grey fs-13 fw-500"><?php echo $project_list[$projects][5]; ?></span>
                            <div>
                                <a href="delete.php?id=<?php echo $project_list[$projects][0] ?>" class="btn-shape bg-red c-white fs-13">remove</a>
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