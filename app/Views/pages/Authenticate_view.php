<!DOCTYPE html>
<html lang="en" >
<head></head>

<body>
<?php $db = db_connect(); 

$username = $_GET["username"];
$password = $_GET["slug"];

$sql = "select Username, Usertype from usertable where username = '{$username}' and password = '{$password}' ";

$query = $db->query($sql);

$user = "";
$type = "";

foreach ($query->getResult() as $row) {
  $user = $row->Username;
  $type = $row->Usertype;
  
}
 
if($user != "")
{
  if($type == "ADMIN")
  {
    echo '<script>alert("Success");</script>';
    header("Location:./adminhome?username={$user}");
    exit();
  }
  else if($type == "RM")
  {
    echo '<script>alert("Success");</script>';
    header("Location:./rmhome?username={$user}");
    exit();
  }
  else if($type == "CLIENT")
  {
    echo '<script>alert("Success");</script>';
    header("Location:./clienthome?username={$user}");
    exit();
  }
}
else
{
    echo '<script> alert("Incorrect username or password"); </script>';
    header("Location:./home");
    exit();

}


?>
</body>

</html>