<?php 

$db = db_connect(); 

//inserting data into post_table
$builder = $db->table('investment_idea_table');

$investid = $_GET["investid"];
$investname = $_GET["investname"];
$investprice = $_GET["investprice"];
$investrisk = $_GET["investrisk"];
$investtype = $_GET["investtype"];




$data = [
    'investmentid'      => $investid,
    'investmentname'      => $investname,
    'price'     => $investprice,
    'risklevel'     => $investprice,
    'investmenttype'     => $investtype,
    'postoption' => '0',
    
];

$builder->insert($data);

return; 
?>