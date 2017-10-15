<?php
    include('random_string.php');
    include('setup.php');
    $unique_string = generateKey();
    $paste_link = '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Adding paste data to the database
        $paste_data = $_POST["paste_data"];
        $sql = "INSERT INTO pastebin (paste_data, unique_string) values ('" . $paste_data . "','" . $unique_string . "');";
        if($conn->query($sql) === TRUE){
            // Generating a paste link if query is valid
            $paste_link = "http://localhost/pastebin/view.php?s=" . $unique_string;
        }
        else{
            echo "Error: " .$sql . "<br>";
        }
    }
?>
