<?php


class Skill {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "Skills_tbl";
    
      }

      
    public function saveSkill ($profile_id, $title,$logo_url,$rating) {

            $insert =  "INSERT INTO `skills_tbl`(`id`, `profile_id`, `title`, `logo_url`,
             `rating`, `date_at`, `status`, `deleted`) 
             VALUES (null,'$profile_id','$title','$logo_url','$rating',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllSkill ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and deleted = 0 order by id desc ";
        

        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

public function updateSkills ($user_id){

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