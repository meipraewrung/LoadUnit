<?php
require_once('db.php');
$db = new Database('LoadUnitPlan','root','','localhost'); 
$result = $db->insert('openCourse',$_POST); 
?>