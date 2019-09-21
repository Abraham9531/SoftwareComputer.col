<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Abraham">
  
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/assets/images/Logos/01.png">
    
    <title>SoftComp.col</title>
   
    <link href="vistas/Plugins/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="vistas/Plugins/css/style.css" rel="stylesheet">
    
    <link href="vistas/Plugins/css/colors/red-dark.css" id="theme" rel="stylesheet">
   
</head>
<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>    

<div id="main-wrapper">

<?php 

/*========================= Header ====================*/
include"modulos/Header.php";

/*========================= Menu ====================*/
include"modulos/Menu.php";

/*========================= Body ====================*/
include"modulos/Body.php";

/*========================= Footer ====================*/
include"modulos/Footer.php";

/*========================= Copyright ====================*/
include"modulos/Copyright.php";

 ?>

</div>
</body>

<script src="vistas/plugins/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="vistas/plugins/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="vistas/plugins/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="vistas/plugins/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="vistas/plugins/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="vistas/plugins/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="vistas/plugins/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="vistas/plugins/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="vistas/plugins/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</html>