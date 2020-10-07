<?php
session_start();
require('db.php');

$username = $_SESSION['staff_nameSur'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>วางเเผนการเปิดรายวิชา</title>

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
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="images/LogoProject-removebg-preview.png" alt="LoadUnitPlanningAndManagementSystem" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">

            <li>
              <a href="home.php">
                <i class="fas fa-home"></i>หน้าหลัก</a>
            </li>
            <li>
              <a href="planCourse.php">
                <i class="fab fa-wpforms"></i>เล่มหลักสูตร</a>
            </li>
            <li>
              <a href="openCourse.php">
                <i class="fab fa-wpforms"></i>วางเเผนการเปิดรายวิชา</a>
            </li>

            <li>
              <a href="residualSubjects.php">
                <i class="fab fa-wpforms"></i>รายวิชาตกค้าง</a>
            </li>
            <li>
              <a href="loadUnit.php">
                <i class="fas fa-table"></i>Load Unit</a>
            </li>

            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-address-card"></i>จัดตารางสอน-สอบ</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="formTeachExam.php">แบบฟอร์มจัดตารางสอน-สอบ</a>
                </li>
                <li>
                  <a href="approve.php">การตรวจสอบApprove</a>
                </li>

              </ul>
            </li>
            <li>
              <a href="login.php">
                <i class="fas fa-sign-out-alt"></i>ออกจากระบบ</a>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="#">
          <img src="images/LogoProject-removebg-preview.png" alt="LoadUnitPlanningAndManagementSystem" />
        </a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">

            <li>
              <a href="home.php">
                <i class="fas fa-home"></i>หน้าหลัก</a>
            </li>
            <li>
              <a href="planCourse.php">
                <i class="fas fa-book"></i>เล่มหลักสูตร</a>
            </li>
            <li>
              <a href="openCourse.php">
                <i class="fas fa-book"></i>วางเเผนการเปิดรายวิชา</a>
            </li>

            <li>
              <a href="residualSubjects.php">
                <i class="fab fa-wpforms"></i>รายวิชาตกค้าง</a>
            </li>
            <li>
              <a href="loadUnit.php">
                <i class="fas fa-table"></i>Load Unit</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-address-card"></i>จัดตารางสอน-สอบ</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="formTeachExam.php">แบบฟอร์มจัดตารางสอน-สอบ</a>
                </li>
                <li>
                  <a href="approve.php">การตรวจสอบApprove</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="login.php">
                <i class="fas fa-sign-out-alt"></i>ออกจากระบบ</a>
            </li>
          </ul>
          </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container" style="padding-left:20px;">
      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                </form>
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="content">
                      <i class="fas fa-user"></i>
                      <a class="js-acc-btn" href="#" style="color: black;">
                        <?php echo $username; ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->



        <!-- MAIN CONTENT-->
        <br> <br><br><br>
        <!-- Page Content -->
        <div class="container rounded col-md-10">
          <!-- header Page  -->
          <div class="form-group fromTE-form">
            <center>
              <h1>เเผนการเปิดรายวิชาในเเต่ละภาคการศึกษา</h1>
              <h4>ปริญญาตรี (BACHRLOR DEGREE PROGRAM)</h4>
            </center>
          </div>

          <?php
          $connect = mysqli_connect('localhost', 'root', '', 'loadunitplan');
          mysqli_query($connect, "set character set utf8");

          if (mysqli_connect_error()) {
            echo "Failed to connect to MySQL :" . mysqli_connect_error();
          }
          $querydegree = "SELECT * FROM degree";
          $resultdegree = mysqli_query($connect, $querydegree) or die(mysql_error());
          $querymajor = "SELECT * FROM major";
          $resultmajor = mysqli_query($connect, $querymajor) or die(mysql_error());
          $querycourse = "SELECT * FROM course";
          $resultcourse = mysqli_query($connect, $querycourse) or die(mysql_error());
          $queryyear = "SELECT * FROM years";
          $resultyear = mysqli_query($connect, $queryyear) or die(mysql_error());
          $querysemesteryear = "SELECT * FROM semesteryear";
          $resultsemesteryear = mysqli_query($connect, $querysemesteryear) or die(mysql_error());



          ?>




          <!-- fromAll -->
          <!-- <div class="rounded col-md-offset-2 " id="page-content-wrapper " style="border: 4px solid #b8b8be;
         background: #e7e4e2; width: 80%; height:auto; text-align: center;"> -->
          <div class="form-group fromTE-form" style="background: #e7e4e2;">
            <br>

            <div class="row col-md-10 offset-md-1">

              <br>
              <div class="Degree">
                <br>

                <label class="col-md-5">ปริญญา</label>
                <select class="custom-select custom-select-sm mb-2 col-md-6" name="Degree" id="Degree">
                  <?php foreach ($resultdegree as $row) : ?>
                    <option> <?= $row['degree_name'] ?> </option>
                  <?php endforeach ?>

                </select>
              </div>

              <div class="major">
                <br>

                <label class="col-md-3">สาขา</label>
                <select class="custom-select custom-select-sm mb-2 col-md-8" name="major" id="major">
                  <?php foreach ($resultmajor as $row) : ?>
                    <option> <?= $row['major_name'] ?> </option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="cousrse">
                <br>
                <label class="col-md-3">เล่มหลักสูตร</label>
                <select class="custom-select custom-select-sm  col-md-8" name="course" id="course">
                  <?php foreach ($resultcourse as $row) : ?>
                    <option value=<?= $row['course_name'] ?>> <?= $row['course_name'] ?> </option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="row col-md-12 offset-md-1">
              <label class="col-md-2">ชั้นปี</label>
              <select class="custom-select custom-select-sm col-md-1" name="Year" id="Year">
                <?php foreach ($resultyear as $row) : ?>
                  <option> <?= $row['year_num'] ?> </option>
                <?php endforeach ?>

              </select>

              <label class="col-md-3">ภาคการศึกษา/ปีการศึกษา</label>
              <select class="custom-select custom-select-sm col-md-2" name="semesterYear" id="semesterYear">
                <?php foreach ($resultsemesteryear as $row) : ?>
                  <option> <?= $row['semesterYear_num'] ?> </option>
                <?php endforeach ?>
              </select> &nbsp;&nbsp;&nbsp;

              <button type="button" class="btn btn-primary">แสดง</button>
            </div>
          </div>
        </div>

        <!-- search -->

        <div class="row">

          <!--<div class="col-md-5 offset-md-1">
            <input type="text" class="form-control" name="hostname2" placeholder="ค้นหารายละเอียด" value="" />
          </div>
          <div class="col-sm-2">
            <button type="button" class="btn btn-info">ค้นหา</button>
          </div>-->
          <div class="col-md-3 offset-md-3">
            <button type="button" class="btn btn-success">Export</button>
          </div>

          <div class="col-sm-3 ">
            <form action="openCourseInsert.php" method="post">
              <button type="button" class="btn btn-info" onclick="window.location.href='openCourseInsert.php'">Insert</button>
            </form>
          </div>
        </div>

        <!-- End search -->
        <br>
        <!-- table -->

        <div class="container-fluid">
          
        <form action="" method="post">
          <table class="table table-dark">
              <colgroup>
                <col span="4" width="60">
                <col width="100">
                <col width="30">
                <col width="30">
                <col width="80">
              </colgroup>
            <thead>
              <tr>
                <th scope="col">หมวด</th>
                <th scope="col">กลุ่ม</th>
                <th scope="col">บังคับ/เลือก</th>
                <th scope="col">รหัสวิชา</th>
                <th scope="col">รายชื่อวิชา</th>
                <th scope="col">หน่วยกิต</th>
                <th scope="col">ผู้สอน</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>




              <?php

              $query = "SELECT * FROM openCourse";
              $result = mysqli_query($connect, $query) or die(mysql_error());

              while ($row = mysqli_fetch_assoc($result)) {
                $OC_category = $row['openCourse_category'];
                $OC_group = $row['openCourse_group'];
                $OC_forceSelect = $row['openCourse_forceSelect'];
                $OC_courseCode = $row['openCourse_courseCode'];
                $OC_listSubjects = $row['openCourse_listSubjects'];
                $OC_credit = $row['openCourse_credit'];
                $OC_instructor = $row['openCourse_instructor'];
                $OC_id = $row['openCourse_ID'];

                echo "<tr>
              <td>$OC_group</td>              
              <td>$OC_group</td>
              <td>$OC_forceSelect</td>
              <td>$OC_courseCode</td> 
              <td>$OC_listSubjects</td> 
              <td>$OC_credit</td> 
              <td>$OC_instructor</td>
              <td>

              <a href=openCourseEdit.php?openCourse_ID=" . $OC_id . " >  
              <button type='button' name ='edit.$OC_id' class='btn btn-warning' >Edit</button></a>

              <a onClick=\"javascript: return confirm('Please confirm deletion');\" href=openCourseDelete.php?openCourse_ID=" . $OC_id . " >  
              <button type='button' name ='delete.$OC_id' class='btn btn-danger' >Delete</button></a></td>

              
              
              
              </tr>";
              }
              ?>
            </tbody>


          </table>
        </form>
        </div>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          <p>Copyright © 2020 Load Unit Planing Management System
            <a href="https://www.computing.psu.ac.th/th/">Collage
              Of computing</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT-->
  <!-- END PAGE CONTAINER-->

  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="vendor/slick/slick.min.js">
  </script>
  <script src="vendor/wow/wow.min.js"></script>
  <script src="vendor/animsition/animsition.min.js"></script>
  <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="vendor/circle-progress/circle-progress.min.js"></script>
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="vendor/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->