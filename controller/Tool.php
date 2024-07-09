<?php
include ($dataLink == "single") ? './model/Tool.php':'../model/Tool.php';


function  saveTool ($data){
        $status__ = false ;
        $tool =  new Tool();
        if($tool->saveTool ($data["profile_id"], $data["title"], $data["description"],$data["picture_url"],$data["rate"])){
                $status__ = true;
        }
        return $status__;     
}

function getAllTool ($user_id){
        $tool =  new Tool();
        return $tool->getAllTool ($user_id);     
}

function updateTools ($user_id){
        $tool =  new Tool();
        return $tool->updateTool ($cuuser_idstomerid);     
}


