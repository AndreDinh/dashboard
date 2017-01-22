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
               <?php include('includes/project-row-one.php') ?>   
               <?php include('includes/project-row-two.php') ?>
               <?php include('includes/project-row-three.php') ?>   
               <div class="clearfix"></div>
            </div>
            <!-- Page Footer -->
            <?php include('includes/dash-footer.php') ?>
         </div>
      </div>
      <!-- Bootstrap -->
      <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- bootstrap-wysiwyg -->
      <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
      <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
      <script src="../vendors/google-code-prettify/src/prettify.js"></script>
      <!-- Autosize -->
      <script src="../vendors/autosize/dist/autosize.min.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="../build/js/custom.min.js"></script>
   </body>
</html>