<?php




class Expirence  {

    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "expirences_tbl";
    
      }


    public function saveExpirences ($user_id, $title ,$description,$company_name,$start_date,$end ) {

            $insert =  " INSERT INTO `expirences_tbl`(`id`, `profile_id`, `title`, `description`, `company_name`,
             `start_date`, `end`, `date_at`, `status`, `deleted`)
              VALUES (null,'$user_id','$title','$description','$company_name','$start_date','$end','now()','0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

                        $this->conn->close();
    }


    
    public function getAllexpirences ($user_id) {

        $sql = "select * from ".$this->tableName." where profile_id = '".$user_id."' and  deleted = 0 ";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }
        
}



public function updateCustomerexpirences_tbl ($customerid){

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