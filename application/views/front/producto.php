<!DOCTYPE html>
<html lang="es">

<?php include("head.php") ?>

<body>

<!-- CONTENEDOR SUPERIOR -->
<div id="contenedor-superior">
  
<?php include("header.php"); ?>

<!-- Style en linea -->
<style>#slider section {padding: 0; margin-bottom: 10px}</style>

<?php include("producto-slider.php"); ?>
  
</div><!--/.contenedor-superior-->

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <img class="img-responsive" src="holder.js/1366x150/auto" alt="">
      </div>
    </div>
  </div>
</section>

<?php include("ads.php"); ?>


<div class="container-fluid">
  <div class="row">

    <!-- LEFT -->
    <div id="columna-left" class="col-xs-12 col-sm-3">
      <?php include("sidebar.php"); ?>
    </div>
    
    <!-- RIGTH -->
    <div id="columna-right" class="col-xs-12 col-sm-9">
      <?php include("tienda-productos.php"); ?>
    </div>

  </div><!--/.row-->
</div><!--/.container-->

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


<script>
$(function(){
    $('[rel="popover"]').popover({
        container: 'body',
        html: true,
        placement: 'bottom',
        content: function () {
            var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
            return clone;
        }
    }).click(function(e) {
        e.preventDefault();
    });
});
</script>
</body>

</html>