<?php
include ($dataLink == "single") ? './model/SoftSkill.php':'../model/SoftSkill.php';


function saveSoftSkill ($data){
        $status__ = false ;
        $softSkill =  new SoftSkill();
        if($softSkill->saveSoftSkill ($data["profile_id"], $data["title"], $data["description"],$data["picture_url"],$data["rate"])){
                $status__ = true;
        }
        return $status__;     
}

function getAllSoftSkill ($user_id){
        $softSkill =  new SoftSkill();
        return $softSkill->getAllSoftSkill ($user_id);     
}

function updateSoftSkills ($user_id){
        $softSkill =  new SoftSkill();
        return $softSkill->updateSoftSkill ($user_id);     
}


