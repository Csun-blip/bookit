<?php

include "connection.php";

$uname=$_POST['user'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$review=$_POST['review'];

$sql = "INSERT * INTO feedback
VALUES('$uname','$email','$subject','$review')"

mysqli_query($connect, $sql);
header('location:../contact.php');

?>