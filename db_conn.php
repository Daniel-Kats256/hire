<?php
    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'hire';

    $conn = mysqli_connect($hostname, $user, $password, $database);
    if($conn){
        echo "database connected".mysqli_connect_error();
    }
    else{
        echo "connection error" .mysqli_connect_error();
    }
?>