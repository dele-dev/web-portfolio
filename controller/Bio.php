<?php
include ($dataLink == "single") ? './model/Bio.php':'../model/Bio.php';



function saveBio ($data){
        $bio =  new Bio(); 
        if($bio->saveBio ($data["firstname"],$data["lastname"],$data["middlename"],$data["picture_url"],$data["biotext"])){
                return true;
        }else{
                return false;
        }     
}

function getAllBio($user_id){
         $bio =  new Bio();
        return $bio->getAllBio($user_id);     
}

