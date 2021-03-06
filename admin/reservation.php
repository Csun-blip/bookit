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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel</title>

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
                <a class="navbar-brand" href="#"> Admin Panel</a>
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
                    <li>
                        <a href="add_hotel.php"><i class="fa fa-fw fa-table"></i> Add Hotels</a>
                    </li>
                    
                    <li>
                        <a href="roomcat.php"><i class="fa fa-fw fa-desktop"></i>Room Categories</a>
                    </li>

                    <li>
                        <a href="viewroom.php"><i class="fa fa-fw fa-desktop"></i> View Rooms</a>
                    </li>

                    <li class="active">
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

             <div class="row">

<h1 class="page-header">
   All Hotels

</h1>
<table class="table table-hover">


    <thead>
      <tr>
           <th>SN</th>
           <th>Username</th>
           <th>Hotel name</th>
           <th>Room no</th>
           <th>Check in</th>
            <th>Check out</th>
            <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>

    
<?php

    include "connection.php";

    //prepare the sql statement
    $sql = "SELECT * FROM record";

    //parse and execute the statement
    $query = mysqli_query($connect,$sql);
    $data = array();
    while($row = mysqli_fetch_array($query))
    {
        array_push($data, $row);
    }

    foreach ($data as $key=>$value){
    ?>

      <tr>
            <td><?php echo $value['SN']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['room']; ?></td>
            <td><?php echo $value['checkin']; ?></td>
            <td><?php echo $value['checkout']; ?></td>
            <td>
                <a href="change_detail.php?id=<?php echo $value['SN'];?>" data-toggle="tooltip" title="change">Change</a><Br>
                <a href="delete_detail.php?del_booking=<?php echo $value['SN']; ?>" title="delete">Delete</a>
            </td>
           
        </tr>
      <?php } ?>


</tbody>
</table>







             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->







    </div>
    <!-- /#wrapper -->

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
