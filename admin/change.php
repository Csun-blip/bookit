<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if (isset($_SESSION['password']))
    {

    }
    else
    {
        header('location:login.php');
    }
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> Admin panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li class="divider"></li>
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewhotel.php"><i class="fa fa-fw fa-bar-chart-o"></i> View Hotels</a>
                    </li>
                    <li class="active">
                        <a href="add_hotel.php"><i class="fa fa-fw fa-table"></i> Add Hotels</a>
                    </li>
                    
                    <li>
                        <a href="roomcat.php"><i class="fa fa-fw fa-desktop"></i>Room Categories</a>
                    </li>

                    <li>
                        <a href="viewroom.php"><i class="fa fa-fw fa-desktop"></i> View Rooms</a>
                    </li>

                    <li>
                        <a href="reservation.php"><i class="fa fa-fw fa-desktop"></i>Reservation</a>
                    </li>

                     <li>
                        <a href="add_room.php"><i class="fa fa-fw fa-desktop"></i>Booking</a>
                    </li>

                    <li>
                        <a href="feedback.php"><i class="fa fa-fw fa-desktop"></i> Feedback</a>
                    </li>
                

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">

            <div class="container-fluid">






<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Edit Hotel

</h1>
</div>


  <?php
    include "connection.php";


        $id=$_GET['id'];
        //prepare the sql statement
        $sql = "SELECT * FROM hoteldetails where SN='$id'";

    //parse and execute the statement
    $query = mysqli_query($connect,$sql);
    $data = array();
    while($row = mysqli_fetch_assoc($query))
    {
        array_push($data, $row);
    }



        foreach ($data as $key=>$value){
            $name=$value['Title'];
            $des=$value['Description'];
            $img=$value['Image'];
    ?>


<form action="insertchange.php" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Hotel Name </label>
        <input type="text"  name="hname" value="<?php echo $name;?>" class="form-control">
       
    </div>



    <div class="form-group">
           <label for="product-title">Hotel Description</label>
       <input type="text"  name="hdes" class="form-control" value="<?php echo$des;?>" placeholder="Location">
    </div>



    <!-- Hotel Image -->
    <div class="form-group">
        <label for="product-title">Hotel Image</label>
        <input type="file" name="image" id="image" value="<?php echo $img?>" accept="image/*">
      
    </div>


    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <a href="insertchange.php?del=<?php echo $id; ?>"><input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish"></a>
    </div>


<!--</aside>-->
    <!--SIDEBAR-->
</div>

    
</form>

<?php
}
?>

                



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php

/*
if (isset($_POST['id']))
{
    include "connection.php";

    $hid=$_POST['id'];
    $name = $_POST['hname'];
    $description = $_POST['hdes'];

    //images file
    $tmpname = $_FILES['image']['tmp_name'];
    $original_name=$_FILES['image']['name'];
    $date = date('yyyy-mm-dd-hh-ii-ss').$original_name;
    $folder="../images/upload/".$date;
    $forimg ="../images/upload/".$date;
    move_uploaded_file($tmpname, $folder);

    $sql = "UPDATE  hoteldetails (Title, Description, image,img)
    VALUES ('$name', '$description','$folder','$forimg') where SN=$hid";

    mysqli_query($connect,$sql);
    
    echo "sucess";
    header('location:hotel.php');
}    
*/
?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
