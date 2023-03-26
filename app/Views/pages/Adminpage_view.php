<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/adminpage_css.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <!-- Responsive Sidebar -->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-line-chart'></i>
      <span class="logo_name">Team 5 AWS</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-briefcase'></i>
            <span class="links_name">Manage Accounts</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-account' ></i>
            <span class="links_name">Client Portfolio</span>
          </a>
        </li>
        <li>
          <a href="#">
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
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src=Admin.jpg alt="">
        <span class="admin_name">Administrator</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

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
    </section>
       
  <script>
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
