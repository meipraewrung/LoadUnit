<?php
    $sql = "DELETE FROM opencourse WHERE openCourse_ID = $_GET[$OC_id] ";
    $result = mysqli_query($connect, $sql);

    if($result) {
        echo "COMPLETE";
    }
?>
