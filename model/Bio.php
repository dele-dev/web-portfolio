<?php


class Bio {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "profile_tbl";
    
      }

    public function saveBio ($firstname, $lastname,$middlename,$picture_url,$biotext) {

            $insert =  "INSERT INTO `profile_tbl`(`id`, `firstname`, `lastname`, `middlename`, `picture_url`,`bio_text`, `date_at`, `status`, `deleted`) 
             VALUES (null,'$firstname','$lastname','$middlename','$picture_url','$biotext',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllBio($user_id) {

        $sql = "select * from ".$this->tableName." where id = '".$user_id."' and deleted = 0 ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}


}

?>