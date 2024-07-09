<?php


class Messages {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "feedback_tbl";
    
      }

    public function saveMessages ($name, $email,$subject,$budget, $message,$user_id) {

            $insert =  "INSERT INTO `feedback_tbl`(`id`,`profile_id`, `fullname`, `email`,
             `subject`, `budget`, `message`, `created_at`, `status`, `deleted`)
             VALUES (null,'$user_id','$name','$email','$subject','$budget','$message',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllMessage () {

        $sql = "select * from ".$this->tableName." where deleted = 0 order by id desc ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}


}

?>