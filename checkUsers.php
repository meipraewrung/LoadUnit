<?php
    session_start();
    
    if(!isset($_SESSION['staff_email'])) {
        header("Location: login.php");
        exit();
    }
?>