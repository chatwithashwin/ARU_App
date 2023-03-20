<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/adminpage_css.css">
    <link rel="stylesheet" href="./css/adminpage_tables.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script  src="./js/admin_js.js"></script>
   </head>
<body onload="admindashclick()">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php $db = db_connect(); 
$investsql = "SELECT investmentid,investmentname,investmenttype,risklevel,price,postoption FROM investment_idea_table limit 10";
$investquery = $db->query($investsql);
?>

<script>

  function AddInvestment()
  {
    window.open("./addinvestment", "hello", "width=600,height=600");

  }

  function DeleteInvestment()
  {
    window.open("./deleteinvestment", "hello", "width=600,height=600");

  }
  </script>

    <!-- Responsive Sidebar -->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-line-chart'></i>
      <span class="logo_name">Team 5 AWS</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#admindashboardview" onclick="admindashclick()" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#manageaccounts" onclick="manageaccountclick()">
            <i class='bx bx-briefcase'></i>
            <span class="links_name">Manage Accounts</span>
          </a>
        </li>
        <li>
          <a href="#investmentview" onclick="investmentrepoclick()">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Investment Repositry</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-chat' ></i>
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
        <span class="dashboard">Administration Panel</span>
      </div>
      <div class="search-box">
        
      </div>
      <div class="profile-details">
        <img src=Admin.jpg alt="">
        <span class="admin_name"><?php echo $_GET["username"] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <header id="admindashboardview">
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Clients</div>
            <i class='bx bx-user-plus' style='color:#ffffff' ></i>
            <div class="number">36,256</div>
            <div class="indicator">
            </div>
          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Investments</div>
            <i class='bx bx-package' style='color:#ffffff' ></i>
            <div class="number">38,876</div>
            <div class="indicator">
              
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <i class='bx bx-layer-plus' style='color:#ffffff'   ></i>
            <div class="number">$12,876</div>
            <div class="indicator">
            </div>
          </div>
       
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Savings</div>
            <i class='bx bx-bell-plus' style='color:#ffffff' ></i>
            <div class="number">$22,876</div>
            <div class="indicator">
            </div>
          </div>

        </div>
      </div>
      <h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Steven George</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Steven@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Peter Rowlands</h2>
        <p class="title">Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Peter@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Chris John</h2>
        <p class="title">RM Manager </p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>John@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

      <div class="sales-boxes">
        <div class="recent-sales box">
        <i class='bx bx-stats bx-rotate-90 bx-spin' style='color:#3638e2'  ></i>
          <div class="title">Top Investments</div>
          
          <div class="sales-details">
            <ul class="details">
            <li class="topic">Product ID</li>
            <li><a href="#">0001271</a></li>
            <li><a href="#">0001272</a></li>
            <li><a href="#">0001273</a></li>
            <li><a href="#">0001274</a></li>
            <li><a href="#">0001275</a></li>
            <li><a href="#">0001276</a></li>
            <li><a href="#">0001277</a></li>
            <li><a href="#">0001278</a></li>
             <li><a href="#">0001279</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Product Type</li>
            <li><a href="#">Equity</a></li>
            <li><a href="#">Bonds</a></li>
            <li><a href="#">Pension Plan</a></li>
            <li><a href="#">Trade</a></li>
            <li><a href="#">Bonds</a></li>
            <li><a href="#">Trade</a></li>
            <li><a href="#">Equity</a></li>
            <li><a href="#">Trade</a></li>
             <li><a href="#">Bonds</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Regions</li>
            <li><a href="#">North America</a></li>
            <li><a href="#">Europe</a></li>
            <li><a href="#">UK</a></li>
            <li><a href="#">India</a></li>
            <li><a href="#">Canada</a></li>
            <li><a href="#">UK</a></li>
            <li><a href="#">USA</a></li>
             <li><a href="#">New York</a></li>
            <li><a href="#">Europe</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total Worth</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li>
             <li><a href="#">$23.53</a></li>
             <li><a href="#">$46.52</a></li>
          </ul>
          </div>
          
        </div>
        <div class="top-sales box">
            <div class="title">Blog Post</div>
          </div>
        </div>
      </div>
</header>
<header id="manageaccounts">
 
        <div class="container1">  
        <center>  <h1> User Account
          Permissions & Security</h1> </center>  
        
        </br> 
        <hr>  
        </br> 
        </br> 
        <label> User ID :  </label>   
        
      <input id="username" type="text" name="Username" placeholder="Username" size="25" required />  </br>   </br>
      <label> Password : </label>   
      <input id="password" type="password" name="Password" placeholder="Password" size="25" required />  </br>   </br>
      <label> User Email ID : </label> 
      <input id="emailid" type="text" name="User Id" placeholder= "Email ID" size="25" required /> </br>   </br> 
      <label> National ID : </label>    
      <input id="nationtalid" type="text" name="National ID" placeholder="National ID" />   </br>    </br> 
        <div>   
        <label>   
        Gender :  
        </label><br>  
        <input id="maleradio" type="radio" value="Male" name="gender" checked > Male   
        <input id="femaleradio" type="radio" value="Female" name="gender"> Female   
        <input id="otherradio" type="radio" value="Other" name="gender"> Other  
          
        </div>  
</br>
        <div>
      <label>Account Type  
       
      </label>   
        
      <select id="usertype">  <center><option value="Admin">Administrator</option>  
        <option value="Client">Client</option>  
        <option value="RM">RM Manager</option>  
      </center>
      
      </select>  
      </div>  
      </br> 
        
          <label>   
        <button type="submit" onclick="AddUserAccount()" class="registerbtn">Add User</button>   
        <button type="submit" onclick="DeleteUserAccount()" class="registerbtn">Remove User</button>  
      <label>  
        
</div>
  
</header>

<header id="investmentview">
	<div class="home-content">
	
	<div class="sales-boxes">
	<div class="table-view">
	<div class="search-box">
        <center><input type="text" id="search2" placeholder="Search...">
        <i class='bx bx-search' onclick="InvestmentSearch()" ></i> 
		
		<!--<button id="filter-button" >--Filter</button>  -->
<i id="filter-button" class='bx bx-filter' ></i>
<button class="btn btn-primary" onclick="AddInvestment();"> Add </button>
<button class="btn btn-primary" onclick="DeleteInvestment();"> Delete </button>		</center>
<div id="filter-container" class="filters">
  <ul class="filters__list">
    <li>
  <input id="investf1" type="checkbox" value="1" />
    <label for="f1">Investment ID</label>
    </li>
        <li>
  <input id="investf2" type="checkbox" value="1"/>
    <label for="f2">Investment Type</label>
    </li>
        <li>
  <input id="investf3" type="checkbox" value="1" />
    <label for="f3">Risk Level</label>
    </li>  
  </ul></div>	
      </div> 
	</div>
	</div>
	<div class="sales-boxes">
	<div class="table-view" style="overflow-x:auto;">
	
<table id="investmenttable" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Investment Name</th>
                    <th scope="col">Investment ID</th>
                    <th scope="col">Investment Type</th>
                    <th scope="col">Risk Level</th>
                    <th scope="col">Investment Price</th>
                    
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
                    
                  </tr>
                  <?php
                  }
                  ?>
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

var button1 = document.getElementById("filter-button1");
var container1 = document.getElementById("filter-container1");


button1.onclick = function (e) {
  e.stopPropagation();
  if (container1.classList.contains("filters--active")) {
    container1.classList.remove("filters--active");
  } else {
    container1.classList.add("filters--active");
  }
};

container1.onclick = function (e) {
  e.stopPropagation();
};

window.onclick = function () {
  container1.classList.remove("filters--active");
};



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
