<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./css/investmentdetails_css.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php $db = db_connect(); 
$investid = $_GET["investid"];
$investsql = "SELECT investmentid,investmentname,investmenttype,risklevel,price,Abstract,Publish_date,Expiry_date,Author,Instruments,Currency,Major_section,Minor_section,Region,Country FROM investment_idea_table where investmentid = '{$investid}'";

$investquery = $db->query($investsql);


foreach ($investquery->getResult() as $row) 
{ 
$investname = $row->investmentname;
$invest_id = $row->investmentid;
$investtype = $row->investmenttype;
$investrisk = $row->risklevel;
$investprice = $row->price;
$investabstract = $row->Abstract;
$publishdate = $row->Publish_date;
$expirydate = $row->Expiry_date;
$author = $row->Author;
$instruments = $row->Instruments;
$currency = $row->Currency;
$majorsec = $row->Major_section;
$minorsec = $row->Minor_section;
$region = $row->Region;
$country = $row->Country;

?>

<table>
<tbody>
<tr>
<th  scope="row">Investment ID</th>
<td> <?php echo $invest_id ?> </td>
</tr>
<tr>
<th scope="row">Abstract</th>
<td> <?php echo $investabstract ?> </td>
</tr>
<tr>
<th scope="row">Investment Title</th>
<td> <?php echo $investname ?> </td>
</tr>
<tr>
<th scope="row">Investment Type</th>
<td> <?php echo  $investtype ?> </td>
</tr>
<tr>
<th  scope="row">Risk Level</th>
<td> <?php echo  $investrisk ?> </td>
</tr>
<tr>
<th  scope="row">Price</th>
<td > <?php echo  $investprice ?></td>
</tr>
<tr>
<th  scope="row">Publish Date</th>
<td> <?php echo $publishdate ?></td>
</tr>
<th  scope="row">Expiry Date</th>
<td>  <?php echo $expirydate ?></td>
</tr>
<tr>
<th  scope="row">Author</th>
<td> <?php echo $author ?></td>
</tr>
<tr>
<th  scope="row">Instruments</th>
<td > <?php echo $instruments ?></td>
</tr>
<tr>
<th  scope="row">Currency</th>
<td > <?php echo $currency ?></td>
</tr>
<tr>
<th  scope="row">Major Section</th>
<td > <?php echo $majorsec ?></td>
</tr>
<tr>
<th  scope="row">Minor Section</th>
<td > <?php echo $minorsec ?></td>
</tr>
<tr>
<th  scope="row">Region</th>
<td > <?php echo $region ?> </td>
</tr>
<tr>
<th  scope="row">Country</th>
<td > <?php echo $country ?></td>
</tr>
</tbody>
</table>
<?php } ?>
</body>
</html>