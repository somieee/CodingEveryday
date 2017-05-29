<?php
  $conn=mysqli_connect('localhost', 'root', 'root');
  mysqli_select_db($conn, 'opentutorials');
  $sql="SELECT * FROM topic WHERE title='".$_POST['title']."'";
  $result=mysqli_query($conn, $sql);
  if($result->num_rows!=0) {
    $sql="DELETE FROM topic WHERE title='".$_POST['title']."'";
    mysqli_query($conn, $sql);
    header('Location: http://localhost/CodingEveryday/index.php');
  }
  else {
    echo "No matched Title";
  }
  //header('Location: http://localhost/CodingEveryday/index.php');
?>
