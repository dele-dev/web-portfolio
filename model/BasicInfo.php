<?php




class BasicInfo  {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "about_tbl";
    
      }


    public function saveBasicInfos ($user_id, $title ,$description ) {

            $insert =  " INSERT INTO `about_tbl`(`id`, `profile_id`, `title`,
             `descprition`, `date_at`, `status`, `deleted`)
              VALUES (null,'$user_id','$title','$description','now()','0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

                        $this->conn->close();
    }


    
    public function getAllBasicInfos ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and  deleted = 0 ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }
        
}



public function updateBasicInfos_tbl ($customerid){

    $sql = "UPDATE `customer_BasicInfos_tbl`  set status = 'done' where  id = '".$customerid."'";
        
    
    $result = $this->conn->query($sql);


    if($result){
        
        return true;

    }else{
        return false;
    }

}




}

?>