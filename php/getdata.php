

<?php
 // Connects to your Database
 //ดึงข้อมูล
 mysql_connect("localhost", "root", "6030213020") or die(mysql_error());
 mysql_select_db("LoadUnitPlan") or die(mysql_error());
 $data = mysql_query("SELECT * FROM opencourse")
 or die(mysql_error());
 print "<table border cellpadding=3>";
 while($info = mysql_fetch_array( $data ))
 {
    
    print "<b>หมวด</b> ".$info['openCourse_category'] . " ";
    print "<b>กลุ่ม</b> ".$info['openCourse_group'] . " ";
    print "<b>บังคับ/เลือก</b> ".$info['openCourse_forceSelect'] . " ";
    print "<b>รหัสวิชา</b> ".$info['openCourse_courseCode'] . " ";
    print "<b>รายชื่อวิชา</b> ".$info['openCourse_listSubjects'] . " ";
    print "<b>หน่วยกิต</b> ".$info['openCourse_credit'] . " ";
    print "<b>ผู้สอน</b> ".$info['openCourse_instructo'] . " <br>";
 }
 print "</table>";
 ?>

