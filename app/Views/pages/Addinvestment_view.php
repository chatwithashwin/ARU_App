<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/postpage_css.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

   </head>
<body>



<script> 
function AddAction()
{

    var p1 = document.getElementById("invest_id").value;
    var p2 = document.getElementById("invest_name").value;
    var p3 = document.getElementById("invest_price").value;
    var p4 = document.getElementById("invest_type").value;
    var p5 = document.getElementById("invest_risk").value;
    var p6 = document.getElementById("invest_abstract").value;
    var p7 = document.getElementById("publishdate").value;
    var p8 = document.getElementById("expirydate").value;
    var p9 = document.getElementById("author").value;
    var p10 = document.getElementById("instruments").value;
    var p11 = document.getElementById("currency").value;
    var p12 = document.getElementById("majorsec").value;
    var p13 = document.getElementById("minorsec").value;
    var p14 = document.getElementById("region").value;
    var p15 = document.getElementById("country").value;
  
    
    $.ajax({
        async: false,
        url : './addinvestment1?investid='+p1+'&investname='+p2+'&investprice='+p3+'&investtype='+p4+'&investrisk='+p5+'&invest_abstract='+p6+'&publishdate='+p7+'&expirydate='+p8+'&authour='+p9+'&instruments='+p10+'&currency='+p11+'&majorsec='+p12+'&minorsec='+p13+'&region='+p14+'&country='+p15,
        type : 'POST',
        success : function (result) {
        alert("Investment Added Successfully");
        window.close();
        },
      error : function () {
        alert("Error");
      console.log ('error');
      }

    });
}
</script>
 <form>  
        <div class="container">  
      <label>Investment ID </label>   
      <input type="text" id="invest_id" name="invest_id" placeholder= "" size="15"/>   
      <label>Investment Name </label>   
      <input type="text" id="invest_name" name="invest_name" placeholder= "" size="15"/>  
      <label>Investment Price</label>   
      <input type="text" id="invest_price" name="invest_price" placeholder= "" size="15"/>  
      <label>Investment Type </label>         
      <select id="invest_type">  
        <center><option value="Shares">Shares</option>  
        <option value="Stocks">Stocks</option>  
        <option value="Bonds">Bonds</option>
        <option value="Equity">Equity</option>  
        </center>
      </select>
      <label>Risk Level </label>         
      <select id="invest_risk">  
        <center><option value="Low">Low</option>  
        <option value="Moderate">Moderate</option>  
        <option value="High">High</option>
        </center>
      </select>
      <label>Abstract</label>   
      <input type="text" id="invest_abstract" name="invest_abstract" placeholder= "" size="15"/>  
      <label>Publish Date</label>   
      <input type="date" id="publishdate" name="publishdate" placeholder= "" size="15"/>  
</br>
</br>
      <label>Expiry Date</label>   
      <input type="date" id="expirydate" name="expirydate" placeholder= "" size="15"/>  
      </br>
      </br>
      <label>Author</label>   
      <input type="text" id="author" name="author" placeholder= "" size="15"/>  
      <label>Instruments</label>   
      <input type="text" id="instruments" name="instruments" placeholder= "" size="15"/>  
      <label>Currency</label>   
      <input type="text" id="currency" name="currency" placeholder= "" size="15"/>  
      <label>Major Section</label>   
      <input type="text" id="majorsec" name="majorsec" placeholder= "" size="15"/>  
      <label>Minor Section</label>   
      <input type="text" id="minorsec" name="minorsec" placeholder= "" size="15"/>  
      <label>Region</label>   
      <input type="text" id="region" name="region" placeholder= "" size="15"/>  
      <label>Country</label>   
      <input type="text" id="country" name="country" placeholder= "" size="15"/>  
  
      </br>
      </br> 
      </br>
      </br>  
        <button class="registerbtn" onclick="AddAction()">Add</button>   
        <button class="registerbtn" onclick="window.close()">Cancel</button>  
      <label>   
	  </div> 
  </form>
  </body>
  </html>