
<?php $db = db_connect(); 

$type = $_GET["type"];
$filter1 = $_GET["f1"];
$filter2 = $_GET["f2"];
$filter3 = $_GET["f3"];
$term = $_GET["term"];

$flag = 0;

$sql = "";

if($type == "investment")
{
    $sql = " SELECT investmentid,investmentname,investmenttype,risklevel,price,postoption FROM investment_idea_table where  lower(investmentname) like lower('%{$term}%') "; // where username = '{$username}' and password = '{$password}' ";
   
    $sql1 = " SELECT investmentid,investmentname,investmenttype,risklevel,price,postoption FROM investment_idea_table where  ";

    $condition1 = "";
    $condition2 = "";
    $condition3 = "";

    if($filter1 == "1")
    {
        $condition1  =  "  lower(investmentid) like  lower('%{$term}%') " ;
        $sql1 = $sql1. $condition1;
        $flag = $flag + 1;
    }

    if($filter2 == "1")
    {
        $condition2  =  "   lower(investmenttype) like  lower('%{$term}%') " ;
        if($flag>0)
        {
            $sql1 = $sql1. " OR " .$condition2;
        }
        else
        {
            $sql1 = $sql1. $condition2;
        }

        $flag = $flag + 1;
    }

    if($filter3 == "1")
    {
        $condition3  =   "  lower(risklevel) like  lower('%{$term}%') " ;
        if($flag>0)
        {
            $sql1 = $sql1. " OR " .$condition3;
        }
        else
        {
            $sql1 = $sql1. $condition3;
        }
        $flag = $flag + 1;
    }



    if($filter1 == "1" || $filter2 == "1" || $filter3 == "1")
    {
        $sql = $sql1;
    }
    
    $query = $db->query($sql);

$res = "";


foreach ($query->getResult() as $row) {
  
  $res = $res.$row->investmentname;  
  $res = $res."||";
  $res = $res.$row->investmentid;
  $res = $res."||";
  $res = $res.$row->investmenttype;
  $res = $res."||";
  $res = $res.$row->risklevel;
  $res = $res."||";
  $res = $res.$row->price;
  $res = $res."||";
  $res = $res.$row->postoption;

  $res = $res."~~";
}


}
else if($type == "client")
{

    $sql = "SELECT clientid,clientname,emailid,region,networth,interests FROM client_data_table where  lower(clientname) like lower('%{$term}%') "; // where username = '{$username}' and password = '{$password}' ";
   
    $sql1 = " SELECT clientid,clientname,emailid,region,networth,interests FROM client_data_table where ";

    $condition1 = "";
    $condition2 = "";
    $condition3 = "";

    if($filter1 == "1")
    {
        $condition1  =  "  lower(clientid) like  lower('%{$term}%') " ;
        $sql1 = $sql1. $condition1;
        $flag = $flag + 1;
    }

    if($filter2 == "1")
    {
        $condition2  =  "   lower(interests) like  lower('%{$term}%') " ;
        if($flag>0)
        {
            $sql1 = $sql1. " OR " .$condition2;
        }
        else
        {
            $sql1 = $sql1. $condition2;
        }

        $flag = $flag + 1;
    }

    if($filter3 == "1")
    {
        $condition3  =   "  lower(region) like  lower('%{$term}%') " ;
        if($flag>0)
        {
            $sql1 = $sql1. " OR " .$condition3;
        }
        else
        {
            $sql1 = $sql1. $condition3;
        }
        $flag = $flag + 1;
    }



    if($filter1 == "1" || $filter2 == "1" || $filter3 == "1")
    {
        $sql = $sql1;
    }

    $query = $db->query($sql);

$res = "";


foreach ($query->getResult() as $row) {
  //clientid,clientname,emailid,region,networth
  $res = $res.$row->clientname;  
  $res = $res."||";
  $res = $res.$row->clientid;
  $res = $res."||";
  $res = $res.$row->emailid;
  $res = $res."||";
  $res = $res.$row->region;
  $res = $res."||";
  $res = $res.$row->networth;
  $res = $res."||";
  $res = $res.$row->interests;
 
  $res = $res."~~";
  
  
}
    


}



echo $res;  
return;

?>
