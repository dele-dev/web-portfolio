<?php


class Award  {

   
    
    public $conn;
    public $tableName;
    
    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "awards_tbl";
    
      }

    public function saveAwardDetials ($user_id,$title,$description,$awarder) {
        
            $insert =  "INSERT INTO ".$this->tableName."(`id`, `profile_id`, `tile`, `description`, `Awarder`, `date_at`, `status`, `deleted`) 
                        VALUES (null,'$user_id','$title','$description','$awarder',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

                        $this->conn->close();
    }





    public function getAward ($user_id) {

        $sql = "select * from awards_tbl where  profile_id =  '".$user_id."' and deleted = 0";

        $result = $this->conn->query($sql);
        
        if($result->num_rows ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
        
}


public function updateAwardProfile ($address,$telephone,$postal,$gender,$dob,$Award_id) {

    $insert =  "UPDATE `profile` SET address='$address', telephone = '$telephone' , 
    postal = '$postal' , gender = '$gender', dob = '$dob' ";

            

    $result = $this->conn->query($insert);

        if($result){
                    return true;
        }else{
                    return false;
                }

                $this->conn->close();
}  




}

?>