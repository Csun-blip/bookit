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
   Add Hotel

</h1>
</div>
               

<form action="insertfile.php" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Hotel Name </label>
        <input type="text"  name="hname" class="form-control">
       
    </div>


    <div class="form-group">
           <label for="product-title">Hotel Description</label>
       <input type="text"  name="hdes" class="form-control" placeholder="Location">
    </div>



    <!-- Hotel Image -->
    <div class="form-group">
        <label for="product-title">Hotel Image</label>
        <input type="file" name="image" id="image" accept="image/*">
      
    </div>

    <div class="form-group">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>



<!--</aside>-->
    <!--SIDEBAR-->
</div>

    
</form>



                



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
