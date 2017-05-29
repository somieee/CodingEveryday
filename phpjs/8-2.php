<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login result</title>
  </head>
  <body>
    <?php
      $password=$_GET["password"];

      if($password == "12345") {
        echo "Success";
      }
      else {
        echo "Reject";
      }
    ?>
  </body>
</html>
