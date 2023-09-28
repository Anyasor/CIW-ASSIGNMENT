<?php 
include 'connection.php';

if(isset($_POST['btn-send'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO Contact(username, email, subject, msg) VALUES('$username', '$email', '$subject' , '$msg')";
    $sql_save = mysqli_query($connection , $sql);
    
    if(!$sql_save){
        echo 'Contact table not connected';
    }
}

if(empty($username)|| empty($email)|| empty($subject) || empty($msg)){
    header("location: contact.php?error");
}else{
    header("location:contact.php?success");
}
 




?>