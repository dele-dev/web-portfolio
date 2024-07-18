<?php


class Bio {

    public $conn;
    public $db;
    public $tableName;

    function __construct() {
    
        $this->db = new DatabaseConnection ();
        $this->conn =  $this->db->conn;
        $this->tableName = "profile_tbl";
    
      }

    public function saveBioNew ($firstname, $lastname,$email,$password) {

            $encryptedPasword =  $this->db->encrpty($password); // encrypt the password 

            $insert =  "INSERT INTO `profile_tbl`(`id`, `firstname`, `lastname`, `email`,`password`, `date_at`, `status`, `deleted`) 
             VALUES (null,'$firstname','$lastname','$email','$encryptedPasword',now(),'0','0')";


            $result = $this->conn->query($insert);

            $last_id = $this->conn->insert_id;

                if($result){

                        $sql = "update profile_tbl set app_code = '".$this->db->encrpty($this->db->randUnique($last_id))."' where id = '".$last_id."'";

                        if($this->updateBio($sql))
                            return true;
                        else return false ;
                }else{
                            return false;
                        }

            $this->conn->close();
    }
    public function saveBio ($firstname, $lastname,$middlename,$picture_url,$biotext) {

            $insert =  "INSERT INTO `profile_tbl`(`id`, `firstname`, `lastname`, `middlename`, `picture_url`,`bio_text`, `date_at`, `status`, `deleted`) 
             VALUES (null,'$firstname','$lastname','$middlename','$picture_url','$biotext',now(),'0','0')";

            $result = $this->conn->query($insert);

                if($result){
                            return true;
                }else{
                            return false;
                        }

            $this->conn->close();
    }


    
public function getAllBio($user_id) {

        $sql = "select * from ".$this->tableName." where id = '".$user_id."' and deleted = 0 ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);;
        }else{
            return [];
        }   
}
public function authenticateUser($email,$password) {

        $encryptedPasword =  $this->db->encrpty($password); // encrypt the password 

        $sql = "select * from ".$this->tableName." where email = '".$email."' and password = '".$encryptedPasword."' and deleted = 0 ";
        
        $result = $this->conn->query($sql);

        if($result->num_rows > 0 ){
            return  $data = mysqli_fetch_all($result);
        }else{
            return [];
        }   
}

public function updateBio ($sql){
    return $this->conn->query($sql);
} 


}

?>