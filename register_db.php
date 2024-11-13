<?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    $connection = mysqli_connect($servername,$username,$password,$dbname);

    if($connection){
        //echo "connection OK";
    }
    else{
        echo "connection failed".mysqli_connect_error();
    }
?>