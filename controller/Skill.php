<?php
include ($dataLink == "single") ? './model/Skill.php':'../model/Skill.php';


function saveSkill ($data){
        $status__ = false ;
        $skill =  new Skill();
        if($skill->saveSkill ($data["profile_id"], $data["title"],$data["picture_url"],$data["rate"])){
                $status__ = true;
        }
        return $status__;     
}

function getAllSkill ($user_id){
        $skill =  new Skill();
        return $skill->getAllSkill ($user_id);     
}

function updateSkills ($user_id){
        $skill =  new Skill();
        return $skill->updateSkill ($cuuser_idstomerid);     
}


