<?php
    $connect = mysqli_connect('localhost','root','','loadunitplan');
                mysqli_query($connect,"set character set utf8");
 
    // if(!$connect) {
    //     die(' Please Check Your Connection'.mysqli_error($connect));
    // }

    if(mysqli_connect_error()) {
        echo "Failed to connect to MySQL :".mysqli_connect_error();
    }
?>