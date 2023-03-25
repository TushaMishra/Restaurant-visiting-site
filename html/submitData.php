<?php

    // connecting to database
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname  = 'restro';

    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $msg = $_REQUEST['msg'];
    
    $sqlEntry = "INSERT INTO INFO (NAME , EMAIL, MSG) VALUES ('$name', '$email', '$msg')";
    if($conn->query($sqlEntry)){
        $result = "Information updated...";
    }else{
        $result = "Somting is wrong.";
    }
    echo $result;

?>