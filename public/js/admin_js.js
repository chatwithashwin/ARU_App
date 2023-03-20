function admindashclick() 
{
    document.getElementById("admindashboardview").style.display = "block";
    document.getElementById("manageaccounts").style.display = "none";
    document.getElementById("investmentview").style.display = "none";

}

function manageaccountclick() 
{
    document.getElementById("manageaccounts").style.display = "block";
    document.getElementById("admindashboardview").style.display = "none";
    document.getElementById("investmentview").style.display = "none";
}

function investmentrepoclick()
{   
    document.getElementById("manageaccounts").style.display = "none";
    document.getElementById("admindashboardview").style.display = "none";
    document.getElementById("investmentview").style.display = "block";

}

function AddUserAccount()
{
    let email_id = document.getElementById("emailid").value;
    let username = document.getElementById("username").value;
    let nationtal_id = document.getElementById("nationtalid").value;

    let gender = "Male";
    if(document.getElementById("maleradio").checked)
    {
    gender = document.getElementById("maleradio").value;
    }
    if(document.getElementById("femaleradio").checked)
    {
    gender = document.getElementById("femaleradio").value;
    }
    if(document.getElementById("otherradio").checked)
    {
    gender = document.getElementById("otherradio").value;
    }
    let password = document.getElementById("password").value;
   
    let usertype = document.getElementById("usertype").value;

    $.ajax({
      async: false,
      url : './adduser?username='+username+'&slug='+password+'&emailid='+email_id+'&nationtalid='+nationtal_id+'&gender='+gender+'&usertype='+usertype ,                                                    
      type : 'POST',
      success : function (result) {
      alert("User Added Successfully");
      document.getElementById("emailid").value = "";
      document.getElementById("username").value = "";
      document.getElementById("password").value = "";
      document.getElementById("nationtalid").value = "";
     
      },
    error : function () {
    console.log ('error');
    }

  });
}

function DeleteUserAccount()
{
  let username = document.getElementById("username").value;


    $.ajax({
      async: false,
      url : './deleteuser?username='+username ,                                                    
      type : 'POST',
      success : function (result) {
      alert("User Deleted Successfully");
      document.getElementById("username").value = "";
      },
    error : function () {
    console.log ('error');
    }

  });

}

function ajaxCall(type,term,f1,f2,f3)
  {
    var res ="";
    $.ajax({
        async: false,
        url : './search?term='+term+'&type='+type+'&f1='+f1+'&f2='+f2+'&f3='+f3,
        type : 'POST',
        success : function (result) {
        //  res = result.replace("<!-- DEBUG-VIEW START 1 APPPATH\Views\pages\Search_view.php -->","");
        res = result.replaceAll("<!-- DEBUG-VIEW ENDED 1 APPPATH\\Views\\pages\\Search_view.php -->\r\n","");
        //res = res.replaceAll(" ","");
        res = res.trim();
        res = res.substring(64);
        console.log("res ->>> "+res); 
       
        },
      error : function () {
      console.log ('error');
      }

    });

    return res;
    
  }

function InvestmentSearch()
{ 
    let term = document.getElementById("search2").value;

    let f1 = "0";
    let f2 = "0";
    let f3 = "0";

    if(document.getElementById("investf1").checked)
    {
      f1 = document.getElementById("investf1").value;
    }
    
    if(document.getElementById("investf2").checked)
    {
      f2 = document.getElementById("investf2").value;
    }

    if(document.getElementById("investf3").checked)
    {
      f3 = document.getElementById("investf3").value;
    }

    let type1 = "investment";
    var data = ajaxCall(type1,term,f1,f2,f3);

    console.log("data ->>> "+data); 
    let data1 = data.split("~~");
    
    let tabledata = "";
  
    for(j=0;j<data1.length-1;j++)
    {
      let tablerow =  '<tr><th scope="row"><div class="media align-items-center"><a href="#" class="avatar rounded-circle mr-3"><img alt="Image placeholder" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg"></a><div class="media-body"><span class="mb-0 text-sm">#1</span></div></div></th><td>#2</td><td>#3</td><td>#4</td><td>$ #5</td>';
      let data2 = data1[j].split("||");
     // alert(data2);
      for(i=0;i<6;i++)
      {
      let temp = '#'+ (i+1);
      //alert(data2[i]);
      tablerow = tablerow.replace(temp, data2[i]);
      //alert(tablerow  );
      } 
     

      tabledata = tabledata + tablerow;
      
    }

  let new_tbody = '<tbody>' + tabledata +'</tbody>';
  console.log(new_tbody);
  document.getElementById("investmenttable").children[1].innerHTML = new_tbody;
}