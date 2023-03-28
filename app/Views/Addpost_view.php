<?php 

$db = db_connect(); 

//inserting data into post_table
$builder = $db->table('post_table');

$investid = $_GET["investid"];
$title = $_GET["title"];
$desc = $_GET["desc"];



$data = [
    'Title'      => $title,
    'Description'      => $desc,
    'investmentid'     => $investid,
    
];

$builder->insert($data);

//update post column im the investment table
$builder1 = $db->table('investment_idea_table');
$data1 = [
    'postoption' => '1',
];

$builder1->where('investmentid', $investid);
$builder1->update($data1);

return; 
?>