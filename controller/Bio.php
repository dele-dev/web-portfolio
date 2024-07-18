<?php
include ($dataLink == "single") ? './model/Bio.php':'../model/Bio.php';



function saveBioNew ($data){
        $bio =  new Bio(); 
        if($bio->saveBioNew ($data["firstname"],$data["lastname"],$data["email"],$data["password"])){
                return true;
        }else{
                return false;
        }     
}
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

function authenticateUser($email,$password) {
         $bio =  new Bio();
        return $bio->authenticateUser($email,$password) ;     
}

