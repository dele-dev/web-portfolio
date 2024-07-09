<?php

include ($dataLink == "single") ? './model/Admin.php':'../model/Admin.php';


function authenticateAdmin ($data){
        $admin =  new Admin();
        return $admin->AuthenticateAdmin (
                sha1(base64_encode($data["username"]))
         , sha1(base64_encode($data["password"])) );     
}


