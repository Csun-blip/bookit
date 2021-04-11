<?php
    include "connection.php";

    //$hid=$_GET['del'];
    //echo $hid;
    $id=$_POST['id'];
    $name = $_POST['hname'];
    $description = $_POST['hdes'];

    echo$id."  ".$name."  ".$description;

    //images file
    $tmpname = $_FILES['image']['tmp_name'];
    $original_name=$_FILES['image']['name'];
    $date = date('yyyy-mm-dd-hh-ii-ss').$original_name;
    $folder="../images/upload/".$date;
    $forimg ="../images/upload/".$date;
    move_uploaded_file($tmpname, $folder);

     $sql = "UPDATE hoteldetails 
            SET Title='$name',Description='$description',Image='folder',img='$forimg'
            where SN='$id'";

    $query=mysqli_query($connect,$sql);
            if($query)
            {
                echo "data sucessfully updated";
                    
            }
            else
            {
                echo "fail";               
            }
    ?>