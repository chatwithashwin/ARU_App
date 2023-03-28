function dashclick() {
    document.getElementById("dashboardview").style.display = "block";
    document.getElementById("investmentview").style.display = "none";
    document.getElementById("clientview").style.display = "none";
}

function investmentclick() {
    document.getElementById("investmentview").style.display = "block";
    document.getElementById("dashboardview").style.display = "none";
    document.getElementById("clientview").style.display = "none";
}

function clientclick() {
    document.getElementById("investmentview").style.display = "none";
    document.getElementById("dashboardview").style.display = "none";
    document.getElementById("clientview").style.display = "block";
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
        if(data2[i] == "1")
        {
          tablerow = tablerow + '<td> <button class="btn btn-primary">Unpost </button></td></tr>';
        }
        else
        {
          tablerow = tablerow + '<td> <button class="btn btn-primary" onclick="PostInvestment(this)">Post </button></td></tr>';
        }

        tabledata = tabledata + tablerow;
        
      }

    let new_tbody = '<tbody>' + tabledata +'</tbody>';
    console.log(new_tbody);
    document.getElementById("investmenttable").children[1].innerHTML = new_tbody;
  }

  function ClientSearch()
  { 
      let term = document.getElementById("search1").value;

      let f1 = "0";
      let f2 = "0";
      let f3 = "0";

      if(document.getElementById("clientf1").checked)
      {
        f1 = document.getElementById("clientf1").value;
      }
      
      if(document.getElementById("clientf2").checked)
      {
        f2 = document.getElementById("clientf2").value;
      }

      if(document.getElementById("clientf3").checked)
      {
        f3 = document.getElementById("clientf3").value;
      }

      let type1 = "client";
      var data = ajaxCall(type1,term,f1,f2,f3);

      console.log("data ->>> "+data); 
      let data1 = data.split("~~");
      
      let tabledata = "";
    
      for(j=0;j<data1.length-1;j++)
      {
        let tablerow =  '<tr><th scope="row"><div class="media align-items-center"><a href="#" class="avatar rounded-circle mr-3"><img alt="Image placeholder" style="background-image: url(usermales.jpg)"></a><div class="media-body"><span class="mb-0 text-sm">#1</span></div></div></th><td>#2</td><td>#3</td><td>#4</td><td>$ #5</td><td>#6</td><td><button class="btn btn-primary"> Message </button></td></tr>';
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
    document.getElementById("clienttable").children[1].innerHTML = new_tbody;
  }

  function PostInvestment(x)
{
  let row_index = x.parentElement.parentElement.rowIndex;
  let table = document.getElementById('investmenttable');
  let investid = table.rows[row_index].cells[1].innerHTML;

  investid = investid.trim();
  window.open("./postinvestment?investid="+investid, "hello", "width=600,height=600");

}

function DeletePost(x)
{
  let row_index = x.parentElement.parentElement.rowIndex;
  let table = document.getElementById('investmenttable');
  let investid = table.rows[row_index].cells[1].innerHTML;

  investid = investid.trim();
  $.ajax({
        async: false,
        url : './deletepost?investid='+investid,
        type : 'POST',
        success : function (result) {
        alert("Post Deleted Successfully");
        window.close();
        },
      error : function () {
        alert("Error");
      console.log ('error');
      }

    });
}

