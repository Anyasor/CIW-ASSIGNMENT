<?php
include 'connection.php';

    $email = $_POST['email'];

    $query ="DELETE FROM subscribe where email='$email'";

    $result = mysqli_query($connection, $query)
    or die("error retrieving email from database" . mysqli_error($connection));

    
        echo "you have been sucessfully unsubscribed";

    mysqli_close($connection);
?>
