<?php
include ($dataLink == "single") ? './model/Hoobie.php':'../model/Hoobie.php';


function saveHoobie ($data){
        $status__ = false ;
        $hoobie =  new Hoobie();
        if($hoobie->saveHoobie ($data["profile_id"], $data["title"],$data["description"])){
                $status__ = true;
        }
        return $status__;     
}

function getAllHoobie ($user_id){
        $hoobie =  new Hoobie();
        return $hoobie->getAllHoobies ($user_id);     
}

function updateCustomerHoobies ($customerid){
        $hoobie =  new Hoobie();
        return $hoobie->updateCustomerHoobie ($customerid);     
}

