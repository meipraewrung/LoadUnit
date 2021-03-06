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
  <title>แบบฟอร์มจัดตารางสอน-สอบ</title>

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

  <?php
  session_start();
  require('db.php');

  if (isset($_SESSION['staff_nameSur'])) {

    $username = $_SESSION['staff_nameSur'];
  ?>

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
    <div class="page-container" style="padding-left:25px;">
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
              <h1>แบบฟอร์มจัดตารางสอน-สอบ</h1>
            </center>

          </div>
          <!-- FormAll -->
          <div class="form-group formTE-form">

            <!-- Start row1 -->

            <div class="row col-md-12 ">

              <div class="form-group formTE-form">
                <!-- Start row1 -->
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-6">
                    <label>ภาคการศึกษา/ปีการศึกษา</label>
                    <select class="custom-select custom-select-sm col-md-2">
                      <option selected>1/2560</option>
                      <option>2/2560</option>
                      <option>1/2561</option>
                      <option>2/2561</option>
                    </select>
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <!-- End row1 -->
                <!-- Start row2 -->
                <div class="row">
                  <div class="col-md-3">
                    <label>รหัสวิชา</label>
                    <select class="custom-select custom-select-sm col-md-5">
                      <option value="1">977-241</option>
                      <option value="2">977-245</option>
                      <option value="3">976-241</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label>ชื่อวิชา</label>
                    <select class="custom-select custom-select-sm col-md-9">
                      <option value="1">Internet Programming การโปรแกรมอินเตอร์เน็ต</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label>หน่วยกิต</label>
                    <select class="custom-select custom-select-sm col-md-4">
                      <option value="1">3(2-2-5)</option>
                      <option value="2">2(2-2-4)</option>

                    </select>
                    <select class="custom-select custom-select-sm col-md-5">
                      <option value="1">Lecture&Lab</option>
                      <option value="2">Lecture</option>
                      <option value="3">Lab</option>
                    </select>
                  </div>
                </div><!-- End row2 -->
                <!-- Start row3 -->
                <div class="row">
                  <div class="col-md-3">
                    <label>ประเภท</label>
                    <select class="custom-select custom-select-sm col-md-8">
                      <option value="1">วิชาชีพบังคับ</option>
                      <option value="2">วิชาชีพเลือก</option>
                    </select>
                  </div>
                  <div class="col-md-5">
                    <label>สาขา</label>
                    <select class="custom-select custom-select-sm col-md-10">
                      <option value="1">Information Technology</option>
                      <option value="2">Electronic Business</option>
                      <option value="3">Software Engineering</option>
                      <option value="4">Engineering Computer</option>
                      <option value="5">Computing</option>
                      <option value="6">Digital Business</option>
                      <option value="7">Digital Engineering</option>
                    </select>
                  </div>
                </div><!-- End row3 -->
                <!-- Start row4 -->
                <div class="row">
                  <div class="col-md-12">
                    <label>ต้องผ่านการเรียน</label>
                    <select class="custom-select custom-select-sm col-md-5">
                      <option value="1">หมวดวิชาเฉพาะ วิชาเฉพาะด้าน กลุ่มโครงสร้างพื้นฐานของระบบ</option>
                    </select>
                    <select class="custom-select custom-select-sm col-md-2">
                      <option value="1">976-250</option>
                      <option value="2">976-152</option>
                    </select>
                    <select class="custom-select custom-select-sm col-md-3">
                      <option value="1">Database Systems ระบบฐานข้อมูล</option>
                      <option value="2">English</option>

                    </select>
                  </div>
                </div><!-- End row4 -->
                <br>
                <!-- Stat FormBox1  -->
                <div class="formTableTE-form">
                  <div class="row">
                    <!-- Stat box1 row1 -->
                    <div class="col-md-3">
                      <label>ตอน</label>
                      <select class="custom-select custom-select-sm col-md-3">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>สาขา</label>
                      <select class="custom-select custom-select-sm col-md-9">
                        <option value="1">Information Technology</option>
                        <option value="2">Electronic Business</option>
                        <option value="3">Software Engineering</option>
                        <option value="4">Engineering Computer</option>
                        <option value="5">Computing</option>
                        <option value="6">Digital Business</option>
                        <option value="7">Digital Engineering</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>ชั้นปี</label>
                      <select class="custom-select custom-select-sm col-md-4">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>ช่วงสอน</label>
                      <select class="custom-select custom-select-sm col-md-5">
                        <option value="1">Midtrem&Final</option>
                        <option value="2">Midtrem</option>
                        <option value="3">Final</option>
                      </select>
                    </div><!-- End box1 row1 -->
                    <br><br>
                    <!-- Stat box1 row2 -->
                    <div class="col-md-2">
                      <label>จำนวนนักศึกษา</label>
                    </div>
                    <div class="form-group ">
                      <label class="col-md-3">ต่ำสุด</label>
                      <input class="col-md-2" size="3" type="number">
                      <br> <br> <br>
                      <label class="col-md-3">สูงสุด</label>
                      <input class="col-md-2" type="number" name="">
                    </div>
                    <div class="col-md-1">
                      <label>อาจารย์</label>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="checkbox" name="" value="">ประจำ
                      <input type="text" name="">
                      <br><br>
                      <input type="checkbox" name="" value="">พิเศษ
                      <input type="text" name="">
                      <br><br>
                      <input type="checkbox" name="" value="">ประสานงาน
                      <input class="col-md-7" type="text" name="">
                    </div>
                    <!--- End box1 row2 -->
                    <!-- Stat box1 row3 -->
                    <!-- <div class="col-md-offset-4" id="form-check form-check-inline"> -->
                    <div class="col-md-1 offset-md-8">
                      <button type="button" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>เพิ่ม</button>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>ลบ</button>
                    </div>
                    <!-- </div> -->
                    <!-- End box1 row3 -->
                  </div>
                </div>
                <!--- End FormBox1 -->
                <br>
                <!-- Stat FormBox2 -->
                <div class="formTableTE-form">
                  <div class="row">
                    <!-- Stat box2 row1 -->
                    <div class="col-md-3">
                      <label>ชั่วโมง</label>
                      <select class="custom-select custom-select-sm col-md-8">
                        <option value="1">หลัก/สัปดาห์</option>
                      </select>
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="" value="">ปฏิบัติ
                      <label>คาบ</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">0.5</option>
                        <option value="2">1.0</option>
                        <option value="3">1.5</option>
                        <option value="4">2.0</option>
                        <option value="5">2.5</option>
                        <option value="6">3.0</option>
                        <option value="7">3.5</option>
                        <option value="8">4.0</option>
                        <option value="9">4.5</option>
                        <option value="10">5.0</option>
                        <option value="11">5.5</option>
                        <option value="12">6.0</option>
                        <option value="13">6.5</option>
                        <option value="14">7.0</option>
                        <option value="15">7.5</option>
                        <option value="16">8.0</option>
                      </select><label>จำนวน(ครั้ง/สัปดาห์)</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <label class="col-md-3">ห้องปฏิบัติการ</label>
                      <select class="custom-select custom-select-sm col-md-5">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                      </select>
                    </div><!-- End box2 row1 -->
                    <!-- Stat box2 row2 -->
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="" value="">ทฤษฎี
                      <label>คาบ</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">0.5</option>
                        <option value="2">1.0</option>
                        <option value="3">1.5</option>
                        <option value="4">2.0</option>
                        <option value="5">2.5</option>
                        <option value="6">3.0</option>
                        <option value="7">3.5</option>
                        <option value="8">4.0</option>
                        <option value="9">4.5</option>
                        <option value="10">5.0</option>
                        <option value="11">5.5</option>
                        <option value="12">6.0</option>
                        <option value="13">6.5</option>
                        <option value="14">7.0</option>
                        <option value="15">7.5</option>
                        <option value="16">8.0</option>
                      </select><label>จำนวน(ครั้ง/สัปดาห์)</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <label class="col-md-3">ห้องบรรยาย</label>
                      <select class="custom-select custom-select-sm col-md-5">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                      </select>
                    </div><!-- End box2 row2 -->
                    <!-- Stat box2 row3 -->
                    <!-- <div class="form-group col-md-offset-4" id="form-check form-check-inline"> -->
                    <div class="col-md-1 offset-md-8">
                      <button type="button" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>เพิ่ม</button>
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>ลบ</button>
                    </div>
                    <!-- </div> -->
                    <!-- End box2 row3 -->
                  </div>
                </div><!-- End FormBox2 -->
                <br>
                <!-- Stat FormBox3 -->
                <div class="formTableTE-form">
                  <div class="row">
                    <!-- Stat box3 row1 -->
                    <div class="col-md-3">
                      <label>สอบ กลางภาค</label>
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="" value="">ปฏิบัติ
                      <label>จำนวน(ชั่วโมง)</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">0.5</option>
                        <option value="2">1.0</option>
                        <option value="3">1.5</option>
                        <option value="4">2.0</option>
                        <option value="5">2.5</option>
                        <option value="6">3.0</option>
                        <option value="7">3.5</option>
                        <option value="8">4.0</option>
                        <option value="9">4.5</option>
                        <option value="10">5.0</option>
                        <option value="11">5.5</option>
                        <option value="12">6.0</option>
                        <option value="13">6.5</option>
                        <option value="14">7.0</option>
                        <option value="15">7.5</option>
                        <option value="16">8.0</option>
                      </select>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">สอบในตาราง</option>
                      </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <label>หมายเหตุ</label>
                      <input type="text">
                    </div><!-- Stat box3 row1 -->
                    <!-- Stat box3 row2 -->
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="" value="">ทฤษฎี
                      <label>จำนวน(ชั่วโมง)</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">0.5</option>
                        <option value="2">1.0</option>
                        <option value="3">1.5</option>
                        <option value="4">2.0</option>
                        <option value="5">2.5</option>
                        <option value="6">3.0</option>
                        <option value="7">3.5</option>
                        <option value="8">4.0</option>
                        <option value="9">4.5</option>
                        <option value="10">5.0</option>
                        <option value="11">5.5</option>
                        <option value="12">6.0</option>
                        <option value="13">6.5</option>
                        <option value="14">7.0</option>
                        <option value="15">7.5</option>
                        <option value="16">8.0</option>
                      </select>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">สอบในตาราง</option>
                      </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <label>หมายเหตุ</label>
                      <input type="text">
                    </div><!-- Stat box3 row2 -->
                  </div>
                </div><!-- End FormBox3 -->
                <br>
                <!-- Stat FormBox4 -->
                <div class="formTableTE-form">
                  <div class="row">
                    <!-- Stat box4 row1 -->
                    <div class="col-md-3">
                      <label>สอบ ปลายภาค</label>
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="" value="">ปฏิบัติ
                      <label>จำนวน(ชั่วโมง)</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">0.5</option>
                        <option value="2">1.0</option>
                        <option value="3">1.5</option>
                        <option value="4">2.0</option>
                        <option value="5">2.5</option>
                        <option value="6">3.0</option>
                        <option value="7">3.5</option>
                        <option value="8">4.0</option>
                        <option value="9">4.5</option>
                        <option value="10">5.0</option>
                        <option value="11">5.5</option>
                        <option value="12">6.0</option>
                        <option value="13">6.5</option>
                        <option value="14">7.0</option>
                        <option value="15">7.5</option>
                        <option value="16">8.0</option>
                      </select>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">สอบในตาราง</option>
                      </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <label>หมายเหตุ</label>
                      <input type="text">
                    </div><!-- End box4 row1 -->
                    <!-- Stat box4 row2 -->
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                      <input type="radio" name="" value="">ทฤษฎี
                      <label>จำนวน(ชั่วโมง)</label>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">0.5</option>
                        <option value="2">1.0</option>
                        <option value="3">1.5</option>
                        <option value="4">2.0</option>
                        <option value="5">2.5</option>
                        <option value="6">3.0</option>
                        <option value="7">3.5</option>
                        <option value="8">4.0</option>
                        <option value="9">4.5</option>
                        <option value="10">5.0</option>
                        <option value="11">5.5</option>
                        <option value="12">6.0</option>
                        <option value="13">6.5</option>
                        <option value="14">7.0</option>
                        <option value="15">7.5</option>
                        <option value="16">8.0</option>
                      </select>
                      <select class="custom-select custom-select-sm col-md-2">
                        <option value="1">สอบในตาราง</option>
                      </select>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                      <label>หมายเหตุ</label>
                      <input type="text">
                    </div><!-- End box4 row2 -->
                  </div>
                </div><!-- End FormBox4 -->
                <br>
                <!-- Stat button -->
                <div class="form-group col-md-8 offset-md-5" id="form-check form-check-inline">
                  <br>
                  <div class="col-md-5">
                    <button type="button" class="btn btn-success">
                      <span class="" aria-hidden="true"></span>ยืนยัน</button>
                    <button type="button" class="btn btn-danger">
                      <span class="" aria-hidden="true"></span>ยกเลิก</button>
                  </div>
                </div><!-- End button -->
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              <p>Copyright © 2020 Load Unit Planing Management System <a href="https://www.computing.psu.ac.th/th/">Collage Of
                  computing</a>.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- END MAIN CONTENT-->
  <!-- END PAGE CONTAINER-->
  
  <?php
  }
  ?>

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