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
    <title>เล่มหลักสูตร</title>

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
                            <h1>การเพิ่มข้อมูลรายวิชาตามเล่มหลักสูตร</h1>
                            <h4>ปริญญาตรี (BACHRLOR DEGREE PROGRAM)</h4>
                        </center>
                    </div>
                    <div class="form-group fromTE-form" style="background: #e7e4e2;">

                        <div class="row col-md-10 offset-md-1">
                            <br>
                            <div class="major">
                                <br>
                                <label class="col-md-3">สาขา</label>
                                <select class="custom-select custom-select-sm mb-2 col-md-8">
                                    <option value="1">Information Technology</option>
                                    <option value="2">Electronic Business</option>
                                    <option value="3" selected>Software Engineering</option>
                                    <option value="4">Engineering Computer</option>
                                    <option value="5">Computing</option>
                                    <option value="6">Digital Business</option>
                                    <option value="7">Digital Engineering</option>
                                </select>
                            </div>
                            <div class="cousrse">
                                <br>
                                <label class="col-md-3">เล่มหลักสูตร</label>
                                <select class="custom-select custom-select-sm  col-md-8">
                                    <option selected>หลักสูตรวิทยาศาสตรบัณฑิต หลักสูตรปรับปรุง พ.ศ.2557(59-61)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row col-md-12 offset-md-1">
                            <label class="col-md-2">ชั้นปี</label>
                            <select class="custom-select custom-select-sm col-md-1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected>4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                            <label class="col-md-3">ภาคการศึกษา/ปีการศึกษา</label>
                            <select class="custom-select custom-select-sm col-md-2">
                                <option selected>1/2560</option>
                                <option>2/2560</option>
                                <option>1/2561</option>
                                <option>2/2561</option>
                            </select> &nbsp;&nbsp;&nbsp;
                        </div>

                        <div class="row col-md-12 offset-md-1">
                            <label class="col-md-1">หมวด</label>
                            <select class="custom-select custom-select-sm col-md-2">
                                <option value="1" selected>วิชาเฉพาะ</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label class="col-md-3">กลุ่ม</label>
                            <select class="custom-select custom-select-sm col-md-2">
                                <option selected>วิชาแกน</option>
                                <option>วิชาเฉพาะด้าน กลุ่มเทคโนโลยีและวิธีการทางซอฟต์แวร์</option>
                            </select> &nbsp;&nbsp;&nbsp;
                        </div>

                        <div class="row col-md-12 offset-md-1">
                            <label class="col-md-2">บังคับ/เลือก</label>
                            <select class="custom-select custom-select-sm col-md-1">
                                <option selected>บังคับ</option>
                                <option>เลือก</option>
                            </select> &nbsp;&nbsp;&nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2020 Load Unit Planing Management System <a href="https://www.computing.psu.ac.th/th/">Collage
                                        Of computing</a>.</p>
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