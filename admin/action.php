<?php

include "../controller/Central.php";
    

if(isset($_GET["id"]) && isset($_GET["type"]) && isset($_GET["from_where"])){

    $item_to_be_selected = $_GET["id"];
    $action_performed = $_GET["type"];
    $table_to_use = $_GET["from_where"];


    switch ($action_performed){
        case "delete" :
              if(deleteIt($item_to_be_selected,$table_to_use)){
                    echo "<script> window.location.replace( '".$table_to_use.".php'); </script>";
              }else{
                echo "something happend try again!";
              }
        break;

    }
}





