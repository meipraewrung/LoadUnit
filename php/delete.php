<?php 
$conn = mysqli_connect("localhost","root", "", "loadunitplan");
$sql = "DELETE FROM `plancourse` WHERE 'openCourse_ID'";
$result = mysqli_query($conn, $sql);

?>