<?php

include ($dataLink == "single") ? './model/BasicInfo.php':'../model/BasicInfo.php';



function saveBasicInfo ($data){
        $basicInfo =  new BasicInfo(); //$user_id, $title ,$description,$company_name,$start_date,$end 
        return $basicInfo->saveBasicInfos ($data["user_id"],$data["title"],$data["description"]);     
}

function getAllBasicInfos ($user_id) {
        $BasicInfo =  new BasicInfo();
        return $BasicInfo->getAllBasicInfos ($user_id); 
}

