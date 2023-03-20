<?php 
$username = $_GET["username"];

$db = db_connect(); 
$builder = $db->table('usertable');


$builder->delete(['Username' => $username]);

return;

?>
