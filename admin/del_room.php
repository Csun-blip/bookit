<?php

include"connection.php";

$title =$_GET['del'];
$sql ="DELETE FROM room WHERE title='$title'";

$query = mysqli_query($connect,$sql);

	header('location:viewroom.php');

?>