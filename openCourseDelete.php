<?php
    $sql = "DELETE FROM openCourse WHERE openCourse_ID = $_GET[$OC_id] ";
    $result = mysqli_query($connect, $sql);

    if($result) {
        echo "Success";
        mysqli_close($db); // Close connection
        header("location:openCourse.php"); // redirects to all records page
        exit;	
    }
    else
    {
        header("location:openCourse.php");// display error message if not delete
    }
?>