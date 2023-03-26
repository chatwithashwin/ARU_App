
<?php 

$username = $_GET["username"];
$type = $_GET["type"];



  if($type == "ADMIN")
  {
    header("Location:./adminhome?username={$username}");
    exit();
  }
  if($type == "RM")
  {
    header("Location:./rmhome?username={$username}");
    exit();
  }
  if($type == "CLIENT")
  {
    header("Location:./clienthome?username={$username}");
    exit();
  }




  ?>