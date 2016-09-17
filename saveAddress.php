<?php session_start() ?>
<?php
    require_once 'classes/config.php';
    $con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if(mysqli_connect_error()) 
        echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
?>   
<?php

    $query = "UPDATE customers ";
    $query .= "SET address='" .$_GET['value']. "' ";
    $query .= "WHERE email='" .$_SESSION['email']. "'";
    //echo $query;
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo "not implied";
    }

?>