<?php


class Tool {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "Tools_tbl";
    
      }

    public function saveTool ($profile_id, $title,$descriptions,$logo_url,$rating) {

            $insert =  "INSERT INTO `tools_tbl`(`id`, `profile_id`, `title`, 
            `description`, `logo_url`, `ratings`, `date_at`, `status`, `deleted`) 
             VALUES (null,'$profile_id','$title','$descriptions','$logo_url','$rating',now(),'0','0')";

                    

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllTool ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id ='".$user_id."' and deleted = 0 order by id desc ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

public function updateTools ($user_id){

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