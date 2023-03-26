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

<?php 
$investid = $_GET["investid"];

?>


<script> 
function PostAction()
{
    var title = document.getElementById("title").value;
    var desc = document.getElementById("postdesc").value;
    let invest_id = document.getElementById("investid").value;  
    $.ajax({
        async: false,
        url : './addpost?investid='+invest_id+'&title='+title+'&desc='+desc,
        type : 'POST',
        success : function (result) {
        alert("Posted Successfully");
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
         
      <label>Title </label>   
      <input type="text" id="title" name="Title" placeholder= "" size="15"/>   
      <label> Description </label>   
	    <textarea id="postdesc" name="Postdesc" rows="4" cols="50"> </textarea>
      <label>   
      <input type="hidden" id="investid" name="investid" value="<?php echo $investid ?>">
        <button class="registerbtn" onclick="PostAction()">Post</button>   
        <button class="registerbtn" onclick="window.close()">Cancel</button>  
      <label>   
	  </div> 
  </form>
  </body>
  </html>