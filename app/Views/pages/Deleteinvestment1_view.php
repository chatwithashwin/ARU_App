<?php 
$investid = $_GET["investid"];

$db = db_connect(); 
$builder = $db->table('investment_idea_table');

$builder->delete(['investmentid' => $investid]);


return;

?>