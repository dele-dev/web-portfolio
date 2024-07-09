<?php
include ($dataLink == "single") ? './model/Messages.php':'../model/Messages.php';

function saveMessage ($data){
        $status__ = false ;
        $message =  new Messages();
        if($message->saveMessages ($data["name"], $data["email"], $data["subject"],$data["budget"],$data["message"],$data["user_id"])){
                 $status__ = true;
        }
                return $status__;     
}

function getAllMessage (){
        $message =  new Messages();
        return $message->getAllMessage ();     
}

function updateMessage  ($user_id){
        $transaction =  new Message();
        return $Message->updateMessage ($user_id);     
}







