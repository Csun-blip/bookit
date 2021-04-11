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
                  
                     <li class="active">
                        <a href="booking.php"><i class="fa fa-fw fa-desktop"></i>Booking</a>
                    </li>

                     <li class="">
                        <a href="reviewbook.php"><i class="fa fa-fw fa-desktop"></i>Review Reservation</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">

            <div class="container-fluid">






<div class="col-md-12">
<br>
<div class="row">
<h1 class="page-header">
   Add User booking Detail

</h1>
</div>

<form action="insertreservationclient.php" method="post">


<div class="col-md-8">

    <div class="form-group">
    <label for="product-title">Username</label>
        <input type="text"  name="name" class="form-control">
       
    </div>

<div class="form-group">
    <label for="product-title">Hotel Name</label>
        <select name="title">
            <option value="everest">Everest</option>
            <option value="kutumba">Kutumba</option>
            <option value="goodwill">Goodwill</option>
        </select>
       
    </div>


    <div class="form-group">
           <label for="product-title">Room</label>
       <input type="select"  name="room" class="form-control">
    </div>

    <div class="form-group">
           <label for="product-title">Check in</label>
       <input type="date"  name="checkin" class="form-control">
    </div>

    <div class="form-group">
           <label for="product-title">Check out</label>
       <input type="date"  name="checkout" class="form-control">
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
