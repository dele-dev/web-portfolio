<?php
include ($dataLink == "single") ? './model/FrameWork.php':'../model/FrameWork.php';

function saveFrameWork ($data){
        $status__ = false ;
        $frameWork =  new FrameWork();
        if($frameWork->saveFrameWork ($data["profile_id"], $data["title"], $data["description"],$data["picture_url"],$data["rate"])){
                 $status__ = true;
                
        }
                return $status__;     
}

function getAllFrameWork ($user_id){
        $frameWork =  new FrameWork();
        return $frameWork->getAllFrameWork ($user_id);     
}

function updateFrameWork  ($user_id){
        $transaction =  new FrameWork();
        return $frameWork->updateFrameWork ($user_id);     
}







