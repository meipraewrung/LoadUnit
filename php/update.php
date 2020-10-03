<?php
$a = $_GET['openCourse_ID'];
$b = $_GET['openCourse_name'];
$c = $_GET['course_instructor'];
$d = $_GET['openCourse_category'];
$e = $_GET['openCourse_group'];
$f = $_GET['openCourse_forceSelect'];
$f = $_GET['openCourse_courseCode'];
$f = $_GET['openCourse_listSubjects'];
$f = $_GET['openCourse_credit'];
$f = $_GET['openCourse_instructor'];
$f = $_GET['executivePosition_ID'];

$con = mysqli_connect("localhost","root", "", "loadunitplan");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
//$sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="INSERT INTO plancourse(loadunitplan,loadunitplan,course_instructor/*,openCourse_category,openCourse_ID,openCourse_name*/) VALUES ('".$a."','".$b."','".$c."')";
$result = mysqli_query($con,$sql);

?>