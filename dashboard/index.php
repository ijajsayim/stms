<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" href="/assets/stms-favicon.png" type="image/x-icon">
  <title>STMS DASHBOARD</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body id="body">
  <!--Nav Bar Starts-->
  <div class="my-container">
    <nav class="navbar">
      <div class="nav_icon" onclick="toggleSidebar()">
        <i class='bx bx-menu'></i>
      </div>
      <div class="navbar__left">
        <span style="font-size:2vw;">SIGNAL TRAINING CENTRE & SCHOOL (STC&S)</span>
      </div>
      <div class="navbar__right">
        <!-- Add Username here -->
        <span style="font-size:2vw;">Profile Name</span> 
        //profile will be added here
        <a href="../login/logout.php">
          <!-- Add Profile Picture here -->
          <img width="30" src="assets/avatar.svg" alt="" />
          <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
        </a>

      </div>
    </nav>
    
    <main>
      <div class="main__container">
        <!-- MAIN TITLE STARTS HERE -->
        
        <div class="main__title">
          <img src="assets/hello.svg" alt="" />
          <div class="main__greeting">
            <!--h1>Hello Capt Muhammad Mahdi Hassan</h1-->
            <h1>Hello <b><?php echo htmlspecialchars($_SESSION["userid"]); ?></b></h1>
            <p>Welcome to STMS</p>
          </div>
        </div>
        
        <!-- MAIN TITLE ENDS HERE -->
        
        
      </div>
      
      <div class="tab-container">
        <!-- Nav Module starts here -->
        <ul>
          <li data-tab-target="#routine" class="active tab">Routine</li>
          <li data-tab-target="#notice" class="tab">Notice</li>
          <li data-tab-target="#instructors" class="tab">Instructors</li>
          <li data-tab-target="#ongoing-course" class="tab">Ongoing Course</li>
          <li data-tab-target="#assessments" class="tab">Assessments</li>
        </ul>
      </div>
      <div class="tab-content">
        <div id="routine" data-tab-content class="active"> 
          <!-- Add Routine Module here -->
          <h1>Routine</h1>
          <p>This is the routine module</p>     
        </div>
        <div id="notice" data-tab-content>
          <!-- Add Notice Module here -->
          <h1>Notice</h1>
          <p>This is the Notice module</p>
        </div>
        <div id="instructors" data-tab-content>
          <!-- Add Instructors Module here -->
          <h1>Instructors</h1>
          <p>This is the Instructors module</p>
        </div>
        <div id="ongoing-course" data-tab-content>
          <!-- Add Courses Module here -->
          <h1>Ongoing Course</h1>
          <p>This is the Ongoing Course module</p>
        </div>
        <div id="assessments" data-tab-content>
          <!-- Add Assessments Module here -->
          <h1>Assessments</h1>
          <p>This is the Assessments module</p>
        </div>
      </div>
      
    </main>
    
    <div id="sidebar">
      <div class="sidebar__title">
        <div class="sidebar__img">
          <img src="assets/stms-favicon.png" alt="logo" />
        </div>
        <i class=></i>
        <i
        onclick="closeSidebar()"
        class='bx bx-x'
        id="sidebarIcon"
        aria-hidden="true"
        ></i>
      </div>
      
      <div class="sidebar__menu">
        <div class="sidebar__link active_menu_link">
          <i class='bx bx-home' ></i>
          <a href="#">Dashboard</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-calendar'></i>
          <a href="Modules/events.html">Events</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-note bx-flip-vertical' ></i>
          <a href="#">My Course</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-notepad' ></i>
          <a href="#">White Program</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-notepad' ></i>
          <a href="#">Training Program</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-book-bookmark' ></i>
          <a href="#">Course Materials</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-notification' ></i>
          <a href="#">Notice</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-star' ></i>
          <a href="#">Feedback</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-user' ></i>
          <a href="#">Profiles</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-camera' ></i>
          <a href="#">Gallery</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-archive' ></i>
          <a href="#">Archived Resource</a>
        </div>
        <div class="sidebar__link">
          <i class='bx bx-calendar-star' ></i>
          <a href="#">Major Events</a>
        </div>
        <div class="sidebar__logout">
          <i class='bx bx-log-out-circle bx-rotate-180' ></i>
          <a href="#">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js" defer></script>
</body>
</html>
