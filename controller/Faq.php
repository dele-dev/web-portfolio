<?php
include ($dataLink == "single") ? './model/Faq.php':'../model/Faq.php';



function saveFaq ($data){ 
        $faq =  new Faq();
        if($faq->saveFaqDetials ($data["profile_id"],$data["title"],$data["description"])){
                return true;
        }else{
                return false;
        }     
}

function getAllFaq ($user_id){
         $faq =  new Faq();
        return $faq->getFaq ($user_id);     
}

