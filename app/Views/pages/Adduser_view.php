<?php 

$db = db_connect(); 
$builder = $db->table('usertable');

$emailid = $_GET["emailid"];
$username = $_GET["username"];
$pass = $_GET["slug"];
$natid = $_GET["nationtalid"];
$gender = $_GET["gender"];
$type = $_GET["usertype"];
$acctype = "";
if($type == "Admin")
{
    $acctype = "ADMIN";
}
else if($type == "RM")
{
    $acctype = "RM";
}
else if($type == "Client")
{
    $acctype = "CLIENT";
}

$data = [
    'Username'      => $username,
    'Password'      => $pass,
    'UserEmail'     => $emailid,
    'UserType'      => $acctype,
    'gender'        => $gender,
    'national_id'   => $natid,
];

$builder->insert($data);

return;

?>
