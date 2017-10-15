<!DOCTYPE html>
<html>
  <head>
    <title>Paste bin</title>
  </head>
  <body>
    Paste Here:
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <textarea rows="8" cols="50" name="paste_data" placeholder="Enter text..."></textarea>
        <br>
        <input type="submit"/>
    </form>
    <?php
      include('paste.php');
      if(isset($paste_link) && !empty($paste_link)){
        echo '<a href="' . $paste_link . '">' . $paste_link . '</a>';
      };
    ?>
  </body>
</html>
