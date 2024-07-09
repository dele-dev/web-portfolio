<?php

class SoftSkill {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "soft_skills_tbl";
    
      }


    public function saveSoftSkill ($profile_id, $title,$descriptions, $icon_url,$rating) {

            $insert =  "INSERT INTO `soft_skills_tbl`(`id`, `profile_id`, `title`, `description`,
             `icon_url`, `ratings`, `date_at`, `status`, `deleted`)
             VALUES (null,'$profile_id','$title','$descriptions','$icon_url','$rating',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllSoftSkill ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and deleted = 0 order by id desc ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

public function updateSoftSkills ($user_id){

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