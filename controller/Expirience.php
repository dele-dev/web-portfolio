<?php
include ($dataLink == "single") ? './model/Expirence.php':'../model/Expirence.php';



function saveExpirence ($data){
        $expirence =  new Expirence(); //$user_id, $title ,$description,$company_name,$start_date,$end 
        return $expirence->saveExpirences ($data["user_id"],$data["title"],$data["description"],$data["company_name"],$data["start_date"],$data["end_date"]);     
}

function getAllexpirences ($user_id) {
        $expirence =  new Expirence();
        return $expirence->getAllexpirences ($user_id); 
}

