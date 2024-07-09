<?php
include ($dataLink == "single") ? './model/Contact.php':'../model/Contact.php';



function saveContacts ($data){
        $contact =  new Contact();
        if($contact->saveContact ($data["user_id"],$data["title"],$data["value"])){

                return true;
        }else{
                return false;
        }     
}

function getAllFeedback ($user_id){
         $contact =  new Contact();
        return $contact->getAllFeedback ($user_id);     
}

