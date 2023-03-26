<?php 

$db = db_connect(); 

//inserting data into post_table
$builder = $db->table('investment_idea_table');

$investid = $_GET["investid"];
$investname = $_GET["investname"];
$investprice = $_GET["investprice"];
$investrisk = $_GET["investrisk"];
$investtype = $_GET["investtype"];
$investabstract = $_GET["invest_abstract"];
$publishdate = $_GET["publishdate"];
$expirydate = $_GET["expirydate"];
$authour = $_GET["authour"];
$instruments = $_GET["instruments"];
$currency = $_GET["currency"];
$majorsec = $_GET["majorsec"];
$minorsec = $_GET["minorsec"];
$region = $_GET["region"];
$country = $_GET["country"];

//SELECT Abstract,Publish_date,Expiry_date,Author,Instruments,Currency,Major_section,Minor_section,Region,Country FROM investment_idea_table where investmentid = '{$investid}'";



$data = [
    'investmentid'      => $investid,
    'investmentname'      => $investname,
    'price'     => $investprice,
    'risklevel'     => $investprice,
    'investmenttype'     => $investtype,
    'Publish_date'     => $publishdate,
    'Expiry_date'     => $expirydate,
    'Author'     => $authour,
    'Instruments'     => $instruments,
    'Currency'     => $currency,
    'Major_section'     => $majorsec,
    'Minor_section'     => $minorsec,
    'Region'     => $region,
    'Country'     => $country,
    'postoption' => '0',
    
];


$builder->insert($data);

return; 
?>