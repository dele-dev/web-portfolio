<?php
include ($dataLink == "single") ? './model/Project.php':'../model/Project.php';


function saveProject ($data){
        $status__ = false ;
        $project =  new Project();
        if($project->saveProject ($data["profile_id"], $data["title"],$data["description"],$data["start_date"],$data["end_date"], $data["url_1"],$data["url_2"],$data["rate"])){
                $status__ = true;
        }
        return $status__;     
}

function getAllProject ($user_id){
        $project =  new Project();
        return $project->getAllProject ($user_id);     
}

function getProjectById ($user_id,$product_id){
        $project =  new Project();
        return $project->getProjectById ($user_id,$product_id);     
}

function updateProjects ($user_id){
        $project =  new Project();
        return $project->updateProject ($cuuser_idstomerid);     
}

