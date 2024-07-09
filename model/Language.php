<?php

class Language{

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "languages_tbl";
    
      }

    public function saveLanguage ($profile_id, $name,$logo_url,$rating) {

            $insert =  "INSERT INTO `languages_tbl`(`id`, `profile_id`, `name`, `logo_url`, `rating`,
             `date_at`, `status`, `deleted`) 
             VALUES (null,'$profile_id','$name','$logo_url','$rating',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllLanguages ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and deleted = 0 order by id desc ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

public function updateLaguage ($user_id){

    $sql = "UPDATE `hoobies_tbl`  set status = '0' where  profile_id = '".$user_id."'";
        
    
    $result = $this->conn->query($sql);


    if($result){
        
        return true;

    }else{
        return false;
    }

}


}

?>