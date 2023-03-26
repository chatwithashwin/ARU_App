<?php 
$investid = $_GET["investid"];

$db = db_connect(); 
$builder = $db->table('post_table');

$builder->delete(['investmentid' => $investid]);


//update post column im the investment table
$builder1 = $db->table('investment_idea_table');
$data1 = [
    'postoption' => '0',
];

$builder1->where('investmentid', $investid);
$builder1->update($data1);

return;

?>