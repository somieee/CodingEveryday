<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <ol>
    <script type="text/javascript">
      list = new Array("Dasom", "David", "Lisa", "Carl")
      i = 0;
      while (i < list.length ){
        document.write("<li>"+list[i]+"</li>");
        i = i+1;
      }
    </script>
  </ol>
    <h1>php</h1>
    <ul>
    <?php
      $list = array("Dasom", "David", "Delta", "Gamma");
      $i=0;
      while($i < count($list)) {
        echo "<li>".$list[$i]."</li>";
        $i = $i+1;
      }

    ?>
    </ul>
  </body>
</html>
