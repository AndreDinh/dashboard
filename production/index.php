<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Krowdspace </title>
      <!-- Dashboard CSS -->
      <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="../build/css/custom.min.css" rel="stylesheet">
      <!-- Fonts --> 
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <!-- jQuery -->
      <script src="../vendors/jquery/dist/jquery.min.js"></script>
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <!-- Left Hand Navigation -->
            <?php include('includes/dashboard-left.php') ?>
            <!-- Top Navigation -->
            <?php include('includes/dashboard-nav-top.php') ?>
            <!-- Page Content -->
            <div class="right_col" role="main">
               <?php include('includes/dash-row-one.php') ?>
               <?php include('includes/dash-row-two.php') ?>
               <br/>
               <?php include('includes/dash-row-three.php') ?>
               <br/>
               <?php include('includes/dash-row-four.php') ?>
               <div class="clearfix"></div>
            </div>
            <!-- Page Footer -->
            <?php include('includes/dash-footer.php') ?>
         </div>
      </div>
      <!-- Bootstrap -->
      <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- bootstrap-progressbar -->
      <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="../vendors/moment/min/moment.min.js"></script>
      <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
      <!-- Flot -->
      <script src="../vendors/Flot/jquery.flot.js"></script>
      <script src="../vendors/Flot/jquery.flot.pie.js"></script>
      <script src="../vendors/Flot/jquery.flot.time.js"></script>
      <script src="../vendors/Flot/jquery.flot.stack.js"></script>
      <script src="../vendors/Flot/jquery.flot.resize.js"></script>
      <!-- Flot plugins -->
      <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="../build/js/custom.min.js"></script>
   </body>
</html>