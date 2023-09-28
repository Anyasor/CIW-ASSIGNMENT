<?php 
include 'connection.php';


if(isset($_POST['submit-btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];



    $sql = "INSERT INTO subscribe ( name, email) VALUES ('$name','$email')";
    $sql_save = mysqli_query($connection,$sql);

    if(!$sql_save){
        echo 'Failed';
    }
}

    