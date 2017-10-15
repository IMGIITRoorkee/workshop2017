<?php
    include('random_string.php');
    include('setup.php');
    $unique_string = generateKey();
    $paste_link = '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $paste_data = $_POST["paste_data"];
        $sql = "INSERT INTO pastebin (paste_data, unique_string) values ('" . $paste_data . "','" . $unique_string . "');";
        if($conn->query($sql) === TRUE){
            $paste_link = "http://localhost/pastebin/view.php?s=" . $unique_string;
        }
        else{
            echo "Error: " .$sql . "<br>";
        }
    }
?>
