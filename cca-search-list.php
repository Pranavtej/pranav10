<?php session_start();
include 'connect.php';
$class=$_GET['data'];
$cid=$_SESSION['cid'];
$query="select c.sid,c.$class as ST,s.student_name from ccapoints c,student s where c.sid=s.sid and s.cid='$cid' ORDER BY c.$class DESC";
$result=mysqli_query($con,$query);
// $data=mysqli_fetch_assoc($result);

?>





<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Students</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="style<!DOCTYPE html>
sheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<!--<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>-->
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>

<!--<div class="top-nav-search">
<form>
    <input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>-->


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">

<!-- <li class="nav-item dropdown noti-dropdown"> -->
<!-- <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
</a> -->
<!--<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header"><span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message"></li>
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
</li>-->


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
<h6><?php echo $_SESSION['Teacher_Name'];?></h6>
<p class="text-muted mb-0">teacher</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="inbox.html">Inbox</a>
<a class="dropdown-item" href="logout.php">Logout</a>
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
<!-- <li><a href="index.html">Admin Dashboard</a></li> -->
<li><a href="teacher-dashboard.php" class="active">Teacher Dashboard</a></li>
<!-- <li><a href="student-dashboard.html">Student Dashboard</a></li> -->
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="teacher-student.php">Student List</a></li>
<!--<li><a href="student-details.html">Student View</a></li>-->
<li><a href="teacher-student-add.php">Student Add</a></li>
<li><a href="teacher-student-edit-list.php">Student Edit</a></li>
<li><a href="teacher-student-add-per-list.php"> Add Performace </a></li>

</ul>
</li>

<li class="submenu">
<a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="teacher-subjects.php">Subject List</a></li>
<!-- <li><a href="teacher-subject-add.php">Subject Add</a></li> -->
<li><a href="teacher-subject-add.php">Subject Edit</a></li>
</ul>
</li>
<!-- <li class="submenu">
    <a href="#"><i class="fas fa-user-graduate"></i> <span>Parents</span> <span class="menu-arrow"></span></a></li> -->
    <li class="submenu">
        <a href="#"><i class="fas fa-book-reader"></i> <span>Class Performance</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="teacher-class-performance.php" class="active">Performance List</a></li></ul></li>
    <li class="submenu">
        <a href="#"><i class="fas fa-book-reader"></i> <span>Scores</span> <span class="menu-arrow"></span></a>
        <ul>
        <li><a href="teacher-student-academic.php" class="active">Rank List</a></li>
        <li><a href="teacher-student-cca.php" class="active">Co-Circular Rank</a></li>
        <li><a href="teacher-student-sports.php" class="active">Sports Rank</a></li>
    </ul></li>
<!--<li class="menu-title">
<span>Management</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="fees-collections.html">Fees Collection</a></li>
<li><a href="expenses.html">Expenses</a></li>
<li><a href="salary.html">Salary</a></li>
<li><a href="add-fees-collection.html">Add Fees</a></li>
<li><a href="add-expenses.html">Add Expenses</a></li>
<li><a href="add-salary.html">Add Salary</a></li>
</ul>
</li>
<li>
<a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
</li>
<li>
<a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
</li>
<li>
<a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
</li>
<li>
<a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
</li>
<li>
<a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
</li>
<li class="menu-title">
<span>Pages</span>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="error-404.html">Error Page</a></li>
</ul>
</li>
<li>
<a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
</li>
<li class="menu-title">
<span>Others</span>
</li>
<li>
<a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li>
<li>
<a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
</li>
<li>
<a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
</li>
<li class="menu-title">
<span>UI Interface</span>
</li>
<li>
<a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="form-input-groups.html">Input Groups </a></li>
<li><a href="form-horizontal.html">Horizontal Form </a></li>
<li><a href="form-vertical.html"> Vertical Form </a></li>
<li><a href="form-mask.html"> Form Mask </a></li>
<li><a href="form-validation.html"> Form Validation </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="tables-basic.html">Basic Tables </a></li>
<li><a href="data-tables.html">Data Table </a></li>
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
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Students</li>
</ul>
</div>
<div class="col-auto text-end float-end ms-auto">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
<th>Rank</th>
<th>Student ID</th>
<th>Student Name</th>
<th><?php echo $class;?></th>
</tr>
</thead>
<tbody>
<!-- c.sid,c.running,c.relay_race,c.tug_of_war,c.shot_put,c.orator,c.drama,c.total,s.student_name -->
<?php
$var=0;
foreach($result as $data)
{
     $var=$var+1;
     $sid=$data['sid'];
     $name=$data['student_name'];
     $be=$data['ST'];
     

echo'
<tr>
<td>'.$var.'</td>
<td>'.$sid.'</td>
<td>'.$name.'</td>
<td>'.$be.'</td>
</tr>';
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<!--<footer>
<p>Copyright © 2020 Dreamguys.</p>
</footer>-->

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>