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
            
            <div class="content">
              <h2>Work in Progress</h2>
             </div>
            
            </body>
          
            
    
</html>
