<?php
session_start();
include 'DatabaseConnection.php';



class Admin  {

   
    public $conn;
    public $tableName;

    function __construct() {
    
        $db = new DatabaseConnection ();
        $this->conn =  $db->conn;
        $this->tableName = "admin_track";

      }



    public function AuthenticateAdmin ($username,$password) {

        $auth =  "select * from ".$this->tableName." where username = '".$username."' and password = '".$password."'";                

        $result = $this->conn->query($auth);

            if($result->num_rows > 0){
                    
                    $data = mysqli_fetch_assoc($result);

                    $_SESSION["adminlogin"] =  $data['id'];
                    $_SESSION["adminUsername"] =  $data['username'];

                    return true;
                
            }else{
                        return false;
                    }

                    $this->conn->close();
}




    //  return $result->free_result();


    



}

?>