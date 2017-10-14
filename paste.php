<?php
    include('setup.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $paste_data = $_POST["paste_data"];
        echo $paste_data;
    }
?>
