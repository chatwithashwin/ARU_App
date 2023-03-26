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