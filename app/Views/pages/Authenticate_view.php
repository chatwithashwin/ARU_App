<!DOCTYPE html>
<html lang="en" >
<head></head>

<body>
<?php $db = db_connect(); 

$username = $_GET["username"];
$password = $_GET["slug"];

$sql = "select Username from usertable where username = '{$username}' and password = '{$password}' ";

$query = $db->query($sql);

$user = "";

foreach ($query->getResult() as $row) {
  $user = $row->Username;
  
}
 
if($user != "")
{
    echo '<script>alert("Success");</script>';
    header("Location:./homepage");
    exit();
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