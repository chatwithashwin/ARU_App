function dashclick() {
    document.getElementById("clientdashboardview").style.display = "block";
    document.getElementById("clientinvestmentview").style.display = "none";

}

function investmentclick() {
    document.getElementById("clientinvestmentview").style.display = "block";
    document.getElementById("clientdashboardview").style.display = "none";
}

function getInvestmentDetails(x)
{


  let investid = x.value;

  investid = investid.trim();
  window.open("./investmentdetails?investid="+investid, "hello", "width=600,height=600");

}

