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
  <title>Load Unit</title>

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
      <br> <br><br><br>
      <!-- Page Content -->
      <div class="container rounded col-md-10">
        <!-- header Page  -->
        <div class="form-group">
          <center>
            <h2>ตารางเเสดงหน่วยภาระงานสอนของอาจารย์ผู้สอน</h2>
          </center>
        </div>
        <!-- fromAll -->
        <!-- <div class="rounded col-md-offset-2 " id="page-content-wrapper " style="border: 4px solid #b8b8be;
         background: #e7e4e2; width: 80%; height:auto; text-align: center;"> -->
        <div class="form-group fromTE-form" style="background: #e7e4e2;">
          <div class="form-group col-md-offset-7" id="form-check form-check-inline">
            <br>
            <div class="col-md-5">
              <input type="text" class="form-control col-md-1" name="hostname2" placeholder="ค้นหารายละเอียด" value="" />

            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-info">ค้นหา</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-success">Export</button>
            </div>
            <br>
          </div>
          <br>
          <div class="container-fluid">
            <table class="table table-dark">
              <colgroup>
                <!-- col1 -->
                <col width="5%">
                <!-- col2 -->
                <col width="15%">
                <!-- col3 -->
                <col width="10%">
                <!-- col4 -->
                <col width="10%">
                <!-- col5 -->
                <col width="15%">
                <!-- col6 -->
                <col width="5%">
                <!-- col7 -->
                <col width="10%">
                <!-- col8 -->
                <col width="5%">
                <!-- col9 -->
                <col width="5%">
                <!-- col10 -->
                <col width="7%">
                <!-- col11 -->
                <col width="5%">
                <!-- col12 -->
                <col width="5%">
              </colgroup>
              <thead>
                <tr>
                  <th scope="col">ลำดับ</th>
                  <th scope="col">ชื่อผู้สอน</th>
                  <th scope="col">หมวด(กลุ่ม)</th>
                  <th scope="col">รหัสวิชา</th>
                  <th scope="col">รายชื่อวิชา</th>
                  <th scope="col">หน่วยกิต</th>
                  <th scope="col">วิชาบังคับ/เลือก</th>
                  <th scope="col">Sec</th>
                  <th scope="col">สาขา</th>
                  <th scope="col">จำนวนที่รับน.ศ.</th>
                  <th scope="col">Lecture(ชม.)</th>
                  <th scope="col">Lab(ชม.)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>วันจิตรา โต๊ะหวันหลง</td>
                  <td>วิชาเฉพาะ(วิชาแกน)</td>
                  <td>977-120</td>
                  <td>Mathematics คณิตศาสตร์</td>
                  <td>3(3-0-6)</td>
                  <td>บังคับ</td>
                  <td>1</td>
                  <td>Software Engineering</td>
                  <td>30</td>
                  <td>1.5</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>กิตย์ศิริ ช่อเจี้ยง</td>
                  <td>วิชาเฉพาะ(วิชาเฉพาะด้าน กลุ่มเทคโนโลยีและวิธีการทางซอฟต์แวร์)</td>
                  <td>976-140</td>
                  <td>Software and Computer Programming ซอฟต์แวร์และการโปรแกรมคอมพิวเตอร์</td>
                  <td>3(2-2-5)</td>
                  <td>บังคับ</td>
                  <td>1</td>
                  <td>Software Engineering</td>
                  <td>30</td>
                  <td>1.5</td>
                  <td>2</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          <p>Copyright © 2020 Load Unit Planing Management System <a href="https://www.computing.psu.ac.th/th/">Collage Of computing</a>.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- END MAIN CONTENT-->
  <!-- END PAGE CONTAINER-->
  </div>

  </div>

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