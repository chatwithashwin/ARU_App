<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/clientpage_css.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
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
            <i class='bx bx-bar-chart-square' ></i>
            <span class="links_name">My Investments</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-account' ></i>
            <span class="links_name">Profile Statistics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-chat'></i>
            <span class="links_name">Message</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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
        <span class="dashboard">Client Portfolio</span>
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
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Holdings</div>
            <div class="number">5</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">3|1.25(5.00%)</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Positions</div>
            <div class="number">Emirates</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$426,108</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Total Profit and Loss</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Reports</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Profitable Trade</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Sectoral Indices [ Stocks, Futures, Option ]</div>

          <div class="sales-details">
            <ul class="details">
              <li class="topic">Products</li>
              <li><a href="#">Emirates</a></li>
              <li><a href="#">ITC</a></li>
              <li><a href="#">Microsoft</a></li>
              <li><a href="#">Oman Air</a></li>
              <li><a href="#">Shell</a></li>
              <li><a href="#">HDFC Bank</a></li>
              <li><a href="#">JP Morgans</a></li>
              <li><a href="#">Lloyds Bank</a></li>
              <li><a href="#">Muscat Pharmacy</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Sectors</li>
            <li><a href="#">Airlines</a></li>
            <li><a href="#">Industry</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Airlines</a></li>
            <li><a href="#">Petroleum</a></li>
            <li><a href="#">Banking</a></li>
            <li><a href="#">Banking</a></li>
            <li><a href="#">Banking</a></li>
             <li><a href="#">Pharmaceutical</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Region</li>
            <li><a href="#">UAE</a></li>
            <li><a href="#">INDIA</a></li>
            <li><a href="#">USA</a></li>
            <li><a href="#">Oman</a></li>
            <li><a href="#">UAE</a></li>
            <li><a href="#">INDIA</a></li>
            <li><a href="#">USA</a></li>
             <li><a href="#">UK</a></li>
            <li><a href="#">OMAN</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Currency</li>
            <li><a href="#">Dirhams</a></li>
            <li><a href="#">Rupee</a></li>
            <li><a href="#">Dollar</a></li>
            <li><a href="#">Omani Riyal</a></li>
            <li><a href="#">Dirhams</a></li>
            <li><a href="#">Rupee</a></li>
            <li><a href="#">Dollar</a></li>
             <li><a href="#">GBP</a></li>
            <li><a href="#">Omani Riyal</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Market Price</li>
            <li><a href="#">د.إ204.98</a></li>
            <li><a href="#">₹24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">ر.ع.170.66</a></li>
            <li><a href="#">ر.ع.56.56</a></li>
            <li><a href="#">₹44.95</a></li>
            <li><a href="#">$67.33</a></li>
             <li><a href="#">£23.53</a></li>
             <li><a href="#">ر.ع.46.52</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Watch List</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="./images/emirates.jpg" alt="">
              <span class="product">Emirates</span>
            </a>
            <span class="price">د204.98</span>
          </li>
          <li>
            <a href="#">
               <img src="./images/omanair.png" alt="">
              <span class="product">Oman Air</span>
            </a>
            <span class="price">ر.ع.46.52</span>
          </li>
          <li>
            <a href="#">
               <img src="./images/jp.jpg" alt="">
              <span class="product">JP Morgan</span>
            </a>
            <span class="price">$67.33</span>
          </li>
          <li>
            <a href="#">
              <img src="./images/micro.jpg" alt="">
              <span class="product">Microsoft</span>
            </a>
            <span class="price">$25.88</span>
          </li>
          </li>
          </ul>
          <div class="new-updates">
            <div class="title">News Updates</div>
            <marquee>Hindenburg accuses Adani Group of stock manipulation and improper use of offshore tax havens that obscure the extent of stock ownership of Adani family members in group firms. It also raises concerns about high debt and what it calls excessive valuations.</marquee>
        </div>
        <br>
        <div class="new-updates">
          <div class="title">Calender</div>
          <img src="./images/calender1.jpg">
          
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

