<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BookIt!</title>

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
                <a class="navbar-brand" href="home.php"> BookIt!</a>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                  
                     <li class="">
                        <a href="booking.php"><i class="fa fa-fw fa-desktop"></i>Booking</a>
                    </li>

                     <li class="active">
                        <a href="reviewbook.php"><i class="fa fa-fw fa-desktop"></i>Review Reservation</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="row">
                <br><br>

<h1 class="page-header">
   Your Reservation sheet

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
            <th>Modify/Delete</th>
           
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
