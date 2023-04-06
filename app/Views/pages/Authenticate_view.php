<!DOCTYPE html>
<html lang="en" >
<head></head>

<body>
<?php $db = db_connect(); 

$username = $_GET["username"];
$password = $_GET["slug"];

$sql = "select Username, Usertype from usertable where username = '{$username}' and password = MD5('{$password}') ";

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
    header("Location:./adminhome");
    exit();
  }
  else if($type == "RM")
  {
    echo '<script>alert("Success");</script>';
    //header("Location:./rmhome?username={$user}");
    header("Location:./sessionhandle1?username={$user}&type={$type}");
    exit();
  }
  else if($type == "CLIENT")
  {
    echo '<script>alert("Success");</script>';
    header("Location:./sessionhandle2?username={$user}&type={$type}");
    //header("Location:./clienthome?username={$user}");
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