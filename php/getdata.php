<?php 
//หน้าเล่มหลักสูตร
$conn = mysqli_connect("localhost","root", "", "loadunitplan");
$sql = "SELECT * FROM plancourse";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);

//หน้าวางเเผนเปิดรายวิชา
$conn = mysqli_connect("localhost","root", "", "loadunitplan");
$sql = "SELECT * FROM opencourse";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

echo json_encode($data);



?>