<!DOCTYPE html>
<html lang="en">
<?php session_start();
?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Faculty</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <img src="../views/images/letterp.jpg" width="90" height="150" class="d-inline-block align-top" alt="Princeton" />    
                <a href="#"><h2>Princeton University</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="faculty_home.php">
                            <i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a>
                            
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Departments</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="faculty_departments.php?id=computer science">Computer Science</a>
                                </li>
                                
                                <li>
                                    <a href="faculty_departments.php?id=commerce">Commerce</a>
                                </li>
                                <li>
                                    <a href="faculty_departments.php?id=history">History</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-graduation-cap"></i>Students</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="faculty_view_students.php">View Students</a>
                                </li>
                                
                                <li>
                                    <a href="faculty_add_student.php">Add New Student</a>
                                </li>
                                <li>
                                    <a href="faculty_remove_stud.php">Remove Student</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Semester</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="faculty_semesters.php?id=1">First Semester</a>
                                </li>
                                
                                <li>
                                    <a href="faculty_semesters.php?id=2">Second Semester</a>
                                </li>
                                <li>
                                    <a href="faculty_semesters.php?id=3">Third Semester</a>
                                </li>
                                <li>
                                    <a href="faculty_semesters.php?id=4">Fourth Semester</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Time Table</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="faculty_timetable.php?id=1">First Semester</a>
                                </li>
                                
                                <li>
                                    <a href="faculty_timetable.php?id=2">Second Semester</a>
                                </li>
                                <li>
                                    <a href="faculty_timetable.php?id=3">Third Semester</a>
                                </li>
                                <li>
                                    <a href="faculty_timetable.php?id=4">Fourth Semester</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-book"></i>Notices</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="faculty_view_notices.php">View Notices</a>
                                </li>
                                
                                <li>
                                    <a href="faculty_create_notices.php">Create New</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for students and faculty" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                 <!-- profile image goes here--->   
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                 <!-- profile image goes here--->      
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <!-- profile image goes here--->
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <!-- profile image goes here--->
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                   <!-- profile image goes here--->
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php
                                                                    include '../config/connection.php';
                                                                    $var = $_SESSION['fac_id'];
                                                                    $sql = "select * from faculty where fac_id='".$var."'";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    if($row = mysqli_fetch_assoc($result))
                                                                        {
                                                                            echo  $row['fac_name'];
                                                                            
                                                                        }
                        				
                                                                            ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <i class="fa fa-user fa-3x" aria-hidden="true"></i>  
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
                                                        <?php
                                                                    include '../config/connection.php';
                                                                    $var = $_SESSION['fac_id'];
                                                                    $sql = "select * from faculty where fac_id='".$var."'";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    if($row = mysqli_fetch_assoc($result))
                                                                        {
                                                                            echo  $row['fac_name'];
                                                                            
                                                                        }
                        				
                                                                            ?></a>
                                                    </h5>
                                                    <span class="email"><?php
                                                                    include '../config/connection.php';
                                                                    $var = $_SESSION['fac_id'];
                                                                    $sql = "select * from faculty where fac_id='".$var."'";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    if($row = mysqli_fetch_assoc($result))
                                                                        {
                                                                            echo  $row['email'];
                                                                            
                                                                        }
                        				
                                                                            ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="admin_profile.php">
                                                        <i class="zmdi zmdi-account"></i>My Profile</a>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="home.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <?php
            include '../controller/MyController.php';
    $obj = new MyController();
    if(isset($_POST['submit']))
    {
        $department      = $_POST['department'];
        $semester        = $_POST['semester'];
        $day             = $_POST['day'];
        $h1              = $_POST['h1'];
        $h2              = $_POST['h2'];
        $h3              = $_POST['h3'];
        $h4              = $_POST['h4'];
        
        $obj->faculty_create_timetable($department,$semester,$day,$h1,$h2,$h3,$h4);
    }
?> 

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div>
                        <br>
                            <h3>Create Time Table</h3>
                            <br>
                        </div>
                        <div class="login-form">
                            <form  method="post">
                                
                                <div class="form-group">
                               <?php
                                
                                                                    $var = $_SESSION['fac_dept'];
                                                                    
                                                                            ?>
                                    <label>Department </label>
                                    <input class="au-input au-input--full" type="text" name="department" placeholder="Department" value="<?php echo $var; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Semester </label>
                                    <select class="browser-default custom-select" name="semester">
                                    <option selected>Choose Semester</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Day </label>
                                    <select class="browser-default custom-select" name="day">
                                    <option selected>Choose day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Hour 1</label>
                                    <input class="au-input au-input--full" type="text" name="h1" placeholder="Hour 1">
                                </div>
                                <div class="form-group">
                                    <label>Hour 2</label>
                                    <input class="au-input au-input--full" type="text" name="h2" placeholder="Hour 2">
                                </div>
                                <div class="form-group">
                                    <label>Hour 3</label>
                                    <input class="au-input au-input--full" type="text" name="h3" placeholder="Hour 3">
                                </div>
                                <div class="form-group">
                                    <label>Hour 4</label>
                                    <input class="au-input au-input--full" type="text" name="h4" placeholder="Hour 4">
                                </div>
                                
                            
                                
                                <div class="row">
                                <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 <input type="submit" class="au-btn au-btn--block au-btn--blue m-b-20" value="Create" name="submit">
                                 </div>
                                 
                                <div class="col-md-3">
                                <input type="reset" class="au-btn au-btn--block au-btn--blue m-b-20 " value="Cancel">
                                </div>
                                
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




            <?php include('admin_footer.php');?>