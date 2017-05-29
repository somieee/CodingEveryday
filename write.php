<?php
  $conn=mysqli_connect("localhost", 'root', 'root');
  mysqli_select_db($conn, "opentutorials");
  $result=mysqli_query($conn, "SELECT * FROM topic;");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/CodingEveryday/style.css">
  </head>
  <body id="target">
    <header>
      <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="Coding Everyday">
      <h1><a href="http://localhost/CodingEveryday/index.php">JavaScript</a></h1>
    </header>
    <nav>
      <ol>
        <?php
            while($row=mysqli_fetch_assoc($result)) {
            echo '<li><a href="http://localhost/CodingEveryday/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
          }
        ?>
      </ol>
    </nav>
    <div id="control">
      <input type="button" value="white" id="white_btn"/>
      <input type="button" value="black" id="black_btn"/>
      <a href="http://localhost/CodingEveryday/write.php">write</a>
      <a href="http://localhost/CodingEveryday/delete.php">delete</a>
    </div>
    <script src="http://localhost/CodingEveryday/script.js"></script>
    <article>
      <form action="process.php" method="post">
        <p>
          Title: <input type="text" name="title" >
        </p>
        <p>
          Author: <input type="text" name="author" >
        </p>
        <p>
          Description: <textarea name="description"></textarea>
        </p>
        <input type="hidden" role="uploadcare-uploader" data-images-only="true" />
        <input type="submit" name="name">
      </form>
    </article>
    <script>
      UPLOADCARE_PUBLIC_KEY = "c7312695a719807b0a45";
    </script>
    <script charset="utf-8" src="//ucarecdn.com/libs/widget/2.10.3/uploadcare.full.min.js"></script>
    <script>
      var singleWidget = uploadcare.SingleWidget('[role=uploadcare-uploader]');
      singleWidget.onUploadComplete(function(info){
        document.getElementById('description').value = document.getElementById('description').value+'<img src="'+info.cndUrl+'">';
      });
    </script>
</body>
</html>
