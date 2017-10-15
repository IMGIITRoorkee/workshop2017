<?php
    function generateRandomString(){
        // Generating a 7 character random string
        $length = 7;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++){
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateKey(){
        // Checking if the generated string already exists in the database
        include('setup.php');
        $rand = generateRandomString();
        $sql = "SELECT * from pastebin where unique_string='" . $rand . "';";

        $index_result = $conn->query($sql);

        // If there is no entry of the generated random string
        if($index_result->num_rows === 0){
            return $rand;
        }
        else{
            // Generate a new random string if the previous one already exists
            generateKey();
        }
        $conn->close();
    }
?>
