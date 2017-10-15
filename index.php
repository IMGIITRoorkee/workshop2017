<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Paste bin</title>
  </head>
  <body>
    <div class="header">
      Pastebin
    </div>
    <form class="container image-contain" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <div class="jumbotron remove-color">
        <h3 class="margin-left-40 margin-head"> Paste Here: </h3>
        <div>
          <textarea class="pastetext" rows="8" cols="50" name="paste_data" placeholder="Enter text..."></textarea>
          <input type="submit" class="btn btn-success pull-right btn-block-display" value="Submit Text" />
        </div>
      </div>
    </form>
    <?php
      include('paste.php');
      if(isset($paste_link) && !empty($paste_link)){
        echo '<div class="container">
                <div class="jumbotron remove-color">
                  <span class="margin-left-40" show-url">Share the URL: </span>
                  <a href="' . $paste_link . '" class="show-url">'.
                    $paste_link .
                  '</a>
                </div>
              </div>';
      };
    ?>
  </body>
</html>
