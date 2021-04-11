<?php

include "connection.php";

$name = $_POST['name'];
$room = $_POST['rooms'];
$price = $_POST['price'];


//images file
$tmpname = $_FILES['image']['tmp_name'];
$original_name=$_FILES['image']['name'];
$date = date('yyyy-mm-dd-hh-ii-ss').$original_name;
$folder="../images/upload/".$date;
$forimg ="../images/upload/".$date;
move_uploaded_file($tmpname, $folder);


$sql = "INSERT INTO room (title, rname, price, image)
VALUES ('$name', '$room','$price','$folder')";

mysqli_query($connect,$sql);
header('location:viewroom.php');

?>