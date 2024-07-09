<?php
include ($dataLink == "single") ? './model/Language.php':'../model/Language.php';


function saveLanguage ($data){
        $status__ = false ;
        $language =  new Language();
        if($language->saveLanguage ($data["profile_id"], $data["title"],$data["picture_url"],$data["rate"])){
                $status__ = true;
        }
        return $status__;     
}

function getAllLanguage ($user_id){
        $language =  new Language();
        return $language->getAllLanguages ($user_id);     
}

function updateLanguages ($user_id){
        $language =  new Language();
        return $language->updateLanguage ($cuuser_idstomerid);     
}

