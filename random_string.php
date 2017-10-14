<?php
    function generateRandomString(){
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
        include('setup.php');
        $rand = generateRandomString();
        $sql = "SELECT * from pastebin where unique_string='" . $rand . "';";

        $index_result = $conn->query($sql);

        if($index_result->num_rows === 0){
            return $rand;
        }
        else{
            generateKey();
        }
        $conn->close();
    }
?>
