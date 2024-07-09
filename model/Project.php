<?php


class Project {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "projects_tbl";
    
      }

    public function saveProject ($profile_id, $title,$descriptions,$start_date,$end_date, $url_1,$url_2,$rating) {

            $insert =  "INSERT INTO `projects_tbl`(`id`, `profile_id`, `title`, `descriptions`, 
            `start_date`, `end_date`, `url_1`, `url_2`, `rating`, `date_at`, `status`, `deleted`)  
             VALUES (null,'$profile_id','$title','$descriptions','$start_date','$end_date','$url_1'
             ,'$url_2','$rating',now(),'0','0')";

                    

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
    public function getAllProject ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and deleted = 0 order by id desc ";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

    public function getProjectById ($user_id,$product_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and id = '".$product_id."' and deleted = 0 order by id desc ";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}

public function updateProjects ($user_id){

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