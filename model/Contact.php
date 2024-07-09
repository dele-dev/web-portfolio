<?php


class Contact {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "contact_tbl";
      }

    public function saveContact ($user_id, $title,$value) {

            $insert =  "INSERT INTO `contact_tbl`(`id`, `profile_id`, `suject`, `value`, `date_at`, `status`, `deleted`)  
             VALUES (null,'$user_id','$title','$value',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllFeedback ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and deleted = 0 order by id desc ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}


}

?>