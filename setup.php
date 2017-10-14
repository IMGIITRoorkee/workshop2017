<?php
    $servername = "localhost";
    $username = "root";
    $password = "workshop";
    $db = "workshop";

    $conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
    }else{
        echo "Connection established <br>";
    }
?>
