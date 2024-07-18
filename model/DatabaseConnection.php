<?php


define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','portfolio_db');

class DatabaseConnection
{
    public $conn;
    
    public function __construct()
    {
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        //echo "Database Connected Successfully";
        return $this->conn = $conn;
    }

    public function randUnique ($user) {
        return "xyz".rand(99999,999999)."-".$user;
    }
    
    public function encrpty ($string){
        return sha1(base64_encode($string));
    }
}

?>


