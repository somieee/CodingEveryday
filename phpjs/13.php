<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <script type="text/javascript">
      function test_js(input) {
          return input+10;
      }
      document.writeln(test_js(5));
      document.write(test_js(12));
      prompt(test_js(10));
    </script>

    <h1>php</h1>
    <?php
      function test_php($input) {
        return $input+12;
      }

      echo test_php(5);

    ?>
  </body>
</html>
