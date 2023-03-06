<?php 

    $servername = "db";
    $username = "root";
    $password = "password";
    $dbname = "team8";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error){
        
        die("Connection failed". $conn->connect_error);

    }

?>

