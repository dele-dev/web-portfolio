<?php


class Faq  {

   
    
    public $conn;
    public $tableName;
    
    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "faq_tbl";
    
      }

    public function saveFaqDetials ($profile_id,$title,$description) {
            $insert =  "INSERT INTO ".$this->tableName."(`id`, `profile_id`, `title`, `details`,
             `date_at`, `status`, `deleted`)
                        VALUES (null,'$profile_id','$title','$description',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

                        $this->conn->close();
    }





    public function getFaq ($user_id) {

        $sql = "select * from faq_tbl where  profile_id =  '".$user_id."' and deleted = 0";

        $result = $this->conn->query($sql);
        
        if($result->num_rows ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
        
}


public function updateFaqProfile ($address,$telephone,$postal,$gender,$dob,$Faq_id) {

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