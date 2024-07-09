<?php
include ($dataLink == "single") ? './model/Award.php':'../model/Award.php';


function saveAward ($data){ 
        $award =  new Award();
        if($award->saveAwardDetials ($data["user_id"],$data["title"],$data["description"],$data["awarder"])){
                return true;
        }else{
                return false;
        }     
}

function getAllAward ($user_id){
         $award =  new Award();
        return $award->getAward ($user_id);     
}

