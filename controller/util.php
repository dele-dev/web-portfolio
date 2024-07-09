<?php
include ($dataLink == "single") ? './model/Actions.php':'../model/Actions.php';

function uploasFiles ($fileToUpload) {

        $target_dir = "../includes/uploads/";
        $sentfile = basename($_FILES[$fileToUpload]["name"]);
        $target_file = $target_dir . $sentfile;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
        }

        // Check file size
        if ($_FILES[$fileToUpload]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
                if (move_uploaded_file($_FILES[$fileToUpload]["tmp_name"], $target_file)) {
                        return [true,$sentfile];
                } else {
                        return [false];
                }
        }
}

function sendEmail_ ($data,$recieverEmail){
        $to = $recieverEmail;
       
   $subject = $data["subject"];

$message = "
<html>
       <head>
               <title>".$subject."</title>
</head>
<body>
<table>
<tr>
<th> Name :: '".$data["name"]."'</th>
<th> Email :: '".$data["email"]."'</th>
<th> Budget ::'".$data["budget"]."'</th>
<th> Message ::'".$data["message"]."'</th>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <portfolio@example.com>' . "\r\n"; // put your email address here please!

        if(mail($to,$subject,$message,$headers)) {
          return true ;
        }else {return false; }

}






function deleteIt ($item_to_be_selected,$table_to_use){
        $actions =  new Actions();
       return $actions->deleteIt ($item_to_be_selected,$table_to_use);     
}



