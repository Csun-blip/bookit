<?php
session_start();
include "connection.php";
$user=$_POST['user'];
$password=$_POST['password'];
$cpassword-=$_POST['cpass'];
$email=$_POST['email'];

if (isset($email)) {
	$sql="INSERT INTO login
	VALUES('$user','$password','$cpassword','$email')";

	mysqli_query($connect,$sql);
}

else{
	$sql="SELECT * FROM login
	WHERE Username==$user";

	$query = mysqli_query($connect,$sql);
    $data = array();
    while($row = mysqli_fetch_assoc($query))
    {
        array_push($data, $row);
    }

    foreach ($data as $key=>$value){
        $dbuser=$value['user'];
        $dbpass=$value['password'];
    }
    if ($dbuser==$user&&$dbpass==$password) {
    	$_SESSION['user']=$dbuser;
    	$_SESSION['password']=$dbpass;
    	header('location: home.php');
    }
    else{
    	echo "error session failed to start";
    }
	
}




?>