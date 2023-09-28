<?php 
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "assignment";

$connection = new mysqli($server_name, $user_name, $password, $db_name );

if(!$connection){
    echo 'database is  not connected';
}


?>