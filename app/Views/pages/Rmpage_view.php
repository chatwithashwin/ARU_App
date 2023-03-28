<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/rmpage_css.css">
    <link rel="stylesheet" href="./css/rmpage_tables.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body onload="dashclick()">
<script  src="./js/rm_js.js"></script>
<?php $db = db_connect(); 

$clientsql = "SELECT clientid,clientname,emailid,region,networth FROM client_data_table";
$investsql = "SELECT investmentid,investmentname,investmenttype,risklevel,price,postoption FROM investment_idea_table limit 7";

$clientquery = $db->query($clientsql);
$investquery = $db->query($investsql);
?>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-line-chart'></i>
      <span class="logo_name">Team 5 AWS</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#dashboardview" onclick="dashclick()" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_n
            ame">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#clientview" onclick="clientclick()">
            <i class='bx bx-bar-chart-square' ></i>
            <span class="links_name">Client Portfolio</span>
          </a>
        </li>
        <li>
          <a href="#investmentview" onclick="investmentclick()">
            <i class='bx bxs-user-account' ></i>
            <span class="links_name">Investment Repository</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-chat'></i>
            <span class="links_name">Message</span>
          </a>
        </li>
      
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Relationship Manager</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="./images/clientprofilepic.jpg" alt="">
        <span class="admin_name"><?php echo $_GET["username"] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
</br>
</br>
</br>
  <header id="dashboardview">
  <div class="page-content">
            
            <div class="analytics">

                <div class="card">
                    <div class="card-head">
                        <h2>107,200</h2>
                        <span class="las la-user-friends"></span>
                    </div>
                    <div class="card-progress">
                        <small>User activity this month</small>
                        <div class="card-indicator">
                            <div class="indicator one" style="width: 60%"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                        <h2>340,230</h2>
                        <span class="las la-eye"></span>
                    </div>
                    <div class="card-progress">
                        <small>Page views</small>
                        <div class="card-indicator">
                            <div class="indicator two" style="width: 80%"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                        <h2>$653,200</h2>
                        <span class="las la-shopping-cart"></span>
                    </div>
                    <div class="card-progress">
                        <small>Monthly revenue growth</small>
                        <div class="card-indicator">
                            <div class="indicator three" style="width: 65%"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                        <h2>057</h2>
                        <span class="las la-envelope"></span>
                    </div>
                    <div class="card-progress">
                        <small>New E-mails received</small>
                        <div class="card-indicator">
                            <div class="indicator four" style="width: 5%"></div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="records table-responsive">

                <div class="record-header">
                    <div class="add">
                        <span>Markets</span>
                        <select name="" id="">
                            <option value="">Equties</option>
                            <option value="">Options</option>
                            <option value="">Futures</option>
                            <option value="">Bonds</option>
                        </select>
                        <button>Add</button>
                    </div>

                    <div class="browse">
                       <input type="search" placeholder="Search" class="record-search">
                        <select name="" id="">
                            <option value="">Status</option>
                        </select>
                    </div>
                </div>

                <div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><span class="las la-sort"></span> CLIENT</th>
                                <th><span class="las la-sort"></span> TOTAL</th>
                                <th><span class="las la-sort"></span>REGION</th>
                                <th><span class="las la-sort"></span> P AND L STATUS</th>
                                <th><span class="las la-sort"></span> ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Jacob</h4>
                                            <small>jacob1234@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $2000
                                </td>
                                <td>
                                    OMAN
                                </td>
                                <td>
                                    <span class="paid">Profit</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Thomas</h4>
                                            <small>Thomas456@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $1597
                                </td>
                                <td>
                                    UAE
                                </td>
                                <td>
                                    <span class="unpaid">Loss</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Anglia Ruskin</h4>
                                            <small>anglia@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $15000
                                </td>
                                <td>
                                    FRANCE
                                </td>
                                <td>
                                    <span class="unpaid">Loss</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Andrew </h4>
                                            <small>bruno@yahoo.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $3171
                                </td>
                                <td>
                                    UK
                                </td>
                                <td>
                                    <span class="paid">Profit</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Herts</h4>
                                            <small>hertforshire@uni.org</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $5000
                                </td>
                                <td>
                                    GERMANY
                                </td>
                                <td>
                                    <span class="paid">Profit</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Elon Musk</h4>
                                            <small>musk@tesla.org</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $2171
                                </td>
                                <td>
                                    UNITED STATES
                                </td>
                                <td>
                                    <span class="paid">Profit</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Anand Designs</h4>
                                            <small>anand@gmail.com-</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $3171
                                </td>
                                <td>
                                    UNITED KINGDOM
                                </td>
                                <td>
                                    <span class="unpaid">Loss</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Harshath Mehtha</h4>
                                            <small>mehtha@growmore.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $3171
                                </td>
                                <td>
                                    NETHERLANDS
                                </td>
                                <td>
                                    <span class="paid">Profit</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <span class="lab la-telegram-plane"></span>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    <div class="client">
                                       <div class="client-img bg-img" style="background-image: url(usermales.jpg)"></div>
                                        <div class="client-info">
                                            <h4>Adani</h4>
                                            <small>adanigroup@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    $2171
                                </td>
                                <td>
                                    INDIA
                                </td>
                                <td>
                                    <span class="unpaid">Loss</span>
                                </td>
                                <td>
                                    <div class="actions">
                                        <a href="message.html"><span class="lab la-telegram-plane"></span></a>
                                        <span class="las la-eye"></span>
                                        <span class="las la-ellipsis-v"></span>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        
        </div>
	</header>

  <header id="investmentview">
	<div class="home-content">
	
	<div class="sales-boxes">
	<div class="table-view">
	<div class="search-box">
        <center><input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i> 
		
		<!--<button id="filter-button" >--Filter</button>  -->
<i id="filter-button" class='bx bx-filter' ></i>		</center>
<div id="filter-container" class="filters">
  <ul class="filters__list">
    <li>
  <input id="f1" type="checkbox" />
    <label for="f1">Investment ID</label>
    </li>
        <li>
  <input id="f2" type="checkbox" />
    <label for="f2">Investment Name</label>
    </li>
        <li>
  <input id="f3" type="checkbox" />
    <label for="f3">Investment Type</label>
    </li>  
  </ul></div>	
      </div> 
	</div>
	</div>
	<div class="sales-boxes">
	<div class="table-view" style="overflow-x:auto;">
	
<table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Investment Name</th>
                    <th scope="col">Investment ID</th>
                    <th scope="col">Investment Type</th>
                    <th scope="col">Risk Level</th>
                    <th scope="col">Investment Price</th>
                    <th scope="col">Post Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($investquery->getResult() as $row) 
                  { 
                  $investname = $row->investmentname;
                  $investid = $row->investmentid;
                  $investtype = $row->investmenttype;
                  $investrisk = $row->risklevel;
                  $investprice = $row->price;
                  $investpost = $row->postoption;

 
                  ?>

                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $investname  ?> </span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <?php echo $investid  ?>
                    </td>
                    <td>
                    <?php echo $investtype  ?>
                    </td>
                    <td>
                    <?php echo $investrisk  ?>
                    </td>
                    <td>
                      $ <?php echo $investprice  ?>
                    </td>
                    <td>
                    <?php if($investpost == "1")
                    {
                      ?> <button class="btn btn-primary">Unpost </button>
                    <?php
                    }
                    else
                    {
                      ?>
                      <button class="btn btn-primary">Post </button>
                    <?php } ?>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
			  </div>
			  </div>
	</header>

  <header id="clientview">
	<div class="home-content">
	
	<div class="sales-boxes">
	<div class="table-view">
	<div class="search-box">
        <center><input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i> 
		
		<!--<button id="filter-button" >--Filter</button>  -->
<i id="filter-button" class='bx bx-filter' ></i>		</center>
<div id="filter-container" class="filters">
  <ul class="filters__list">
    <li>
  <input id="f1" type="checkbox" />
    <label for="f1">Client ID</label>
    </li>
        <li>
  <input id="f2" type="checkbox" />
    <label for="f2">Client Name</label>
    </li>
        <li>
  <input id="f3" type="checkbox" />
    <label for="f3">Region</label>
    </li>  
  </ul></div>	
      </div> 
	</div>
	</div>
	<div class="sales-boxes">
	<div style="overflow:auto;" class="table-view">
	
<table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Client Name</th>
                    <th scope="col">Client ID</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Region</th>
                    <th scope="col">Net Worth</th>
                    <th scope="col">Contact</th>
                  </tr>
                </thead>
                <tbody>
                <?php


                  foreach ($clientquery->getResult() as $row) 
                  { 
                  $clientname = $row->clientname;
                  $clientid = $row->clientid;
                  $emailid = $row->emailid;
                  $region = $row->region;
                  $networth = $row->networth;
                 

 
                  ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" style="background-image: url(usermales.jpg)" >
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo  $clientname ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <?php echo  $clientid ?>
                    </td>
                    <td>
                    <?php echo  $emailid ?>
                    </td>
                    
                    <td>
                    <?php echo  $region ?>
                    </td>
                    <td>
                      $ <?php echo  $networth ?>
                    </td>
                    <td> <button class="btn btn-primary"> Message </td>
                   
                  </tr>
                  <?php  } ?>
                </tbody>
              </table>
			  </div>
			  </div>
	</header>

  </section>
  <script>
  
var button = document.getElementById("filter-button");
var container = document.getElementById("filter-container");
var input = document.querySelectorAll("input");

button.onclick = function (e) {
  e.stopPropagation();
  if (container.classList.contains("filters--active")) {
    container.classList.remove("filters--active");
  } else {
    container.classList.add("filters--active");
  }
};

container.onclick = function (e) {
  e.stopPropagation();
};

window.onclick = function () {
  container.classList.remove("filters--active");
};

console.log(input);

for (var i = 0; i < input.length; i++) {
  var currentInput = input[i];

  currentInput.onclick = function () {
    var isChecked = false;
    for (var j = 0; j < input.length; j++) {
      if (input[j].checked) {
        isChecked = true;
        break;
      }
    }

    if (isChecked) {
      button.classList.add("button--highlight");
    } else {
      button.classList.remove("button--highlight");
    }
  };
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

