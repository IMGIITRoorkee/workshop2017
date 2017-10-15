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
                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                          <link rel="stylesheet" href="css/main.css">
                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                          <title>Paste bin</title>
                        </head>
                        <body>
                          <div class="header">
                            Pastebin
                          </div>
                          <div class="container">
                            <div class="jumbotron remove-color">
                              <h3 class="margin-left-40 margin-head">Here is the Content: </h3>
                              <div class="textbox">
                                ' . $paste_data . '
                              </div>
                            </div>
                          </div>
                        </body>
                       </html>';

    echo $render_content;
?>
