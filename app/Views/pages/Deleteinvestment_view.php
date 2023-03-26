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
function DeleteAction()
{

    var p1 = document.getElementById("invest_id").value;
   
  
    $.ajax({
        async: false,
        url : './deleteinvestment1?investid='+p1,
        type : 'POST',
        success : function (result) {
        alert("Investment Deleted Successfully");
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
      </br> 
      </br>
      </br>  
        <button class="registerbtn" onclick="DeleteAction()">Delete</button>   
        <button class="registerbtn" onclick="window.close()">Cancel</button>  
      <label>   
	  </div> 
  </form>
  </body>
  </html>