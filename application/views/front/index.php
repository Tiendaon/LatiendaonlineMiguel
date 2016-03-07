<!DOCTYPE html>
<html lang="es">

<?php include("head.php") ?>

<body>

<!-- CONTENEDOR SUPERIOR -->
<div id="contenedor-superior">

<?php include("header.php"); ?>

<?php include("slider.php"); ?>
  
</div><!--/.contenedor-superior-->

<?php include("ads.php"); ?>

<div class="container-fluid">
  <div class="row">

    <!-- LEFT -->
    <div id="columna-left" class="col-xs-12 col-sm-3">
        
      <?php 
            
      include("sidebar.php"); ?>
    </div><!--/#columna-left-->

    <!-- RIGTH -->
    <div id="columna-right" class="col-xs-12 col-sm-9">
      <?php include("view-home.php"); ?>
    </div>

  </div><!--/.row-->
</div><!--/.container-fluid-->



<footer class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      
    </div>
  </div>
</footer>


<!-- SCRIPT  -->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/holder.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>