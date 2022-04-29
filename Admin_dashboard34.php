<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Admin- Dashboard</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<!-- <div class="header-left">
<a href="index.php" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
 <a href="index.php" class="logo logo-small"> 
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div> -->

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>

<!-- <div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div> -->


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

<!-- <li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
 <i class="far fa-bell"></i> <span class="badge badge-pill">3</span> 
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
 <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li> -->


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/profile.png" width="31"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/profile.png" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6>Ryan Taylor</h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="inbox.php">Inbox</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="submenu active">
<a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="Admin_dashboard34.php">Admin Dashboard</a></li>
<!-- <li><a href="teacher-dashboard.php" class="active">Teacher Dashboard</a></li>
<li><a href="student-dashboard.php">Student Dashboard</a></li> -->
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="admin-student-list.php">Student List</a></li>
<!-- <li><a href="student-details.php">Student View</a></li> -->
<li><a href="admin-add-student.php">Student Add</a></li>
<!-- <li><a href="edit-student.php">Student Edit</a></li> -->
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="admin-teacher-list.php">Teacher List</a></li>
<!-- <li><a href="teacher-details.php">Teacher View</a></li> -->
<li><a href="admin-add-teacher.php">Teacher Add</a></li>
<!-- <li><a href="edit-teacher.php">Teacher Edit</a></li> -->
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-building"></i> <span> Classes</span> <span class="menu-arrow"></span></a>
<ul>
    <li><a href="admin-class-list.php">Classes List</a></li>
    <li><a href="admin-add-class.php"> Add Class</a></li>
<!-- <li><a href="edit-department.php"> Edit Class</a></li> -->
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-book-reader"></i> <span> Coach</span> <span class="menu-arrow"></span></a>
<ul>
    <li><a href="admin-coach-list.php">Coach List</a></li>
    <li><a href="admin-add-coach.php">Coach Add</a></li>
<!-- <li><a href="edit-subject.php">Subject Edit</a></li> -->
</ul>
</li>
<!-- <li class="menu-title">
<span>Management</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="fees-collections.php">Fees Collection</a></li>
<li><a href="expenses.php">Expenses</a></li>
<li><a href="salary.php">Salary</a></li>
<li><a href="add-fees-collection.php">Add Fees</a></li>
<li><a href="add-expenses.php">Add Expenses</a></li>
<li><a href="add-salary.php">Add Salary</a></li>
</ul>
</li>
<li>
<a href="holiday.php"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href="fees.php"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li>
<li>
<a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
</li>
<li>
<a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
</li>
<li>
<a href="library.php"><i class="fas fa-book"></i> <span>Library</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="forgot-password.php">Forgot Password</a></li>
<li><a href="error-404.php">Error Page</a></li>
</ul>
</li>
<li>
<a href="blank-page.php"><i class="fas fa-file"></i> <span>Blank Page</span></a>
</li>-->
<!-- <li class="menu-title">
<span></span>
</li>
<li>
<a href="sports.php"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li> -->
<!-- <li>
<a href="hostel.php"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
</li>
<li>
<a href="transport.php"><i class="fas fa-bus"></i> <span>Transport</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li>
<a href="components.php"><i class="fas fa-vector-square"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.php">Basic Inputs </a></li>
<li><a href="form-input-groups.php">Input Groups </a></li>
<li><a href="form-horizontal.php">Horizontal Form </a></li>
<li><a href="form-vertical.php"> Vertical Form </a></li>
<li><a href="form-mask.php"> Form Mask </a></li>
<li><a href="form-validation.php"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.php">Basic Tables </a></li>
<li><a href="data-tables.php">Data Table </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul>
<li class="submenu">
<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
</ul>
</li>
<li>
<a href="javascript:void(0);"> <span>Level 1</span></a>
</li>
</ul>
</li>
</ul>--> 
</div>
</div>
</div> 


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome Admin</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
<li class="breadcrumb-item active">Admin Dashboard</li>
</ul>
</div>
</div>
</div>


<div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-five w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-chalkboard"></i>
</div> -->
<div class="db-info">
<h3>30,000</h3>
<h6>Total Number Of Students</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-six w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-user-graduate"></i>
</div> -->
<div class="db-info">
<h3>50,000</h3>
<h6>Total Number of Teachers</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-seven w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-book-open"></i>
</div> -->
<div class="db-info">
<h3>300</h3>
<h6>Total Number Of Coaches </h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-eight w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-clock"></i>
</div> -->
<div class="db-info">
<h3>300</h3>
<h6>TOTAL SCHOOLS</h6>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- <div class="row">
<div class="col-12 col-lg-12 col-xl-9">
<div class="row">
<div class="col-12 col-lg-8 col-xl-8 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Upcoming Lesson</h5>
</div>
<div class="col-6">
<span class="float-end view-link"><a href="#">View All Courses</a></span>
</div>
</div>
</div>
<div class="pt-3 pb-3">
<div class="table-responsive lesson">
<table class="table table-center">
<tbody>
<tr>
<td>
<div class="date">
<b>Aug 4, Tuesday</b>
<p>2.30pm - 3.30pm (60min)</p>
</div>
</td>
<td>
<div class="date">
<b>Lessons 30</b>
<p>3.1 Ipsuum dolor</p>
</div>
</td>
<td><a href="#">Confirmed</a></td>
<td><button type="submit" class="btn btn-info">Reschedule</button></td>
</tr>
<tr>
<td>
<div class="date">
<b>Aug 5, Wednesday</b>
<p>3.00pm - 4.30pm (90min)</p>
</div>
</td>
<td>
<div class="date">
<b>Lessons 31</b>
<p>3.2 Ipsuum dolor</p>
</div>
</td>
<td><a href="#">Confirmed</a></td>
<td><button type="submit" class="btn btn-info">Reschedule</button></td>
</tr>
<tr>
<td>
<div class="date">
<b>Aug 6, Thursday</b>
<p>11.00am - 12.00pm (20min)</p>
</div>
</td>
<td>
<div class="date">
<b>Lessons 32</b>
<p>3.3 Ipsuum dolor</p>
</div>
</td>
<td><a href="#">Confirmed</a></td>
<td><button type="submit" class="btn btn-info">Reschedule</button></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-4 col-xl-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">Semester Progress</h5>
</div>
</div>
</div>
  average percentage here------------------------ 
<div class="dash-widget">
<div class="circle-bar circle-bar1">
<div class="circle-graph1" data-percent="50">
<b>50%</b>
</div>
</div>
<div class="dash-info">
<h6>Lesson Progressed</h6>
<h4>30 <span>/ 60</span></h4>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-6 col-xl-8 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Teaching Activity</h5>
</div>
<div class="col-6">
<ul class="list-inline-group text-end mb-0 ps-0">
<li class="list-inline-item">
<div class="form-group mb-0 amount-spent-select">
<select class="form-control form-control-sm form-select">
<option>Weekly</option>
<option>Monthly</option>
<option>Yearly</option>
</select>
</div>
</li>
</ul>
</div>
</div>
</div>-->
<div class="card-body">
<div id="apexcharts-area"></div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 col-xl-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Teaching History</h5>
</div>
<div class="card-body">
<div class="teaching-card">
<ul class="activity-feed">
<li class="feed-item">
<div class="feed-date1">Sep 05, 9 am - 10 am (60min)</div>
<span class="feed-text1"><a>Lorem ipsum dolor</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 04, 2 pm - 3 pm (70min)</div>
<span class="feed-text1"><a>Et dolore magna</a></span>
<p>Completed</p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 02, 1 pm - 2 am (80min)</div>
<span class="feed-text1"><a>Exercitation ullamco</a></span>
<p>Completed</p>
</li>
<li class="feed-item">
<div class="feed-date1">Aug 30, 10 am - 12 pm (90min)</div>
<span class="feed-text1"><a>Occaecat cupidatat</a></span>
<p>Completed</p>
</li>
</ul>
</div>
</div> -->
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-12 col-xl-3 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">Calendar</h5>
</div>
</div>
</div>
<div class="card-body">
<div id="calendar-doctor" class="calendar-container"></div>
<div class="calendar-info calendar-info1">
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
<div class="calendar-details">
<p>10 am</p>
<h6 class="calendar-violet d-flex justify-content-between align-items-center">Pharetra et <span>10am - 11am</span></h6>
</div>
<div class="calendar-details">
<p>11 am</p>
<h6 class="calendar-red d-flex justify-content-between align-items-center">Break <span>11am - 11.30am</span></h6>
</div>
<div class="calendar-details">
<p>12 pm</p>
<h6 class="calendar-orange d-flex justify-content-between align-items-center">Massa <span>11.30am - 12.00pm</span></h6>
</div>
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<footer>
<!-- <p>Copyright © 2020 Dreamguys.</p> -->
</footer>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>

<script src="assets/js/circle-progress.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>