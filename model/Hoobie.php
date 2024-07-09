<?php


class Hoobie {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "hoobies_tbl";
    
      }

    public function saveHoobie ($profile_id, $title,$description) {

            $insert =  "INSERT INTO `hoobies_tbl`(`id`, `profile_id`, `title`, `description`, `date_at`, `status`, `deleted`)  
             VALUES (null,'$profile_id','$title','$description',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllHoobies ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and  deleted = 0 order by id desc ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

public function updateHoobies ($user_id){

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