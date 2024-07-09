<?php


class FrameWork  {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "frame_works_tbl";
    
      }


    public function saveFrameWork($profile_id, $title,$description,$logo_url,$rating ) {

            $insert =  " INSERT INTO `frame_works_tbl`(`id`, `profile_id`, `title`, `description`,
             `logo_url`, `ratings`, `date_at`, `status`, `deleted`) 
             VALUES (null,'$profile_id','$title','$description','$logo_url','$rating',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

                        $this->conn->close();
    }


    
    public function getAllFrameWork ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and  deleted = 0 ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }
        
}



public function updateFrameWork ($customerid){

    $sql = "UPDATE `customer_expirences_tbl`  set status = 'done' where  id = '".$customerid."'";
        
    
    $result = $this->conn->query($sql);


    if($result){
        
        return true;

    }else{
        return false;
    }

}




}

?>