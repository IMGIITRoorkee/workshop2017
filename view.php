<?php
    $unique_string = $_GET['s'];
    include('setup.php');

    $sql = "SELECT paste_data FROM pastebin WHERE unique_string='" . $unique_string . "';";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $paste_data = $row["paste_data"];
        }
    }

    if(!$paste_data){
        echo "Error 404 <hr> Page not found";
    }
    $render_content = '<html>
                        <head>
                            <title>Paste bin</title>
                        </head>
                        <body>
                          <div class="header">
                            Paste bin
                          </div>
                          <div class="textbox">
                            ' . $paste_data . '
                          </div>
                        </body>
                       </html>';

    echo $render_content;
?>
