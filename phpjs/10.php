<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      list = new Array("One", "Two", "Three");
      document.write(list+"<br>");
      document.write(list[0]+"<br>");
      document.write(list[2]);
      document.write(list.length);
    </script>

    <h1>php</h1>
    <?php
      $list = array("Four", "Five");
      foreach ($list as $item) {
        echo $item;
      }
      echo join(', ', $list);

      array_walk($list, create_function('$a', 'echo $a;'));
      echo count($list);
    ?>
  </body>
</html>
