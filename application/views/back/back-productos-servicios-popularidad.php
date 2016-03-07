<!doctype html>
<html class="no-js" lang="">

<!-- HEAD -->
<?php include("back-head.php"); ?>

<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<!-- HEADER -->
	<?php include("back-header.php"); ?>
	
	<!-- MENU -->
	<?php include("back-menu.php"); ?>
	
	<!--/////////////////////////////////////
	CONTENIDO
	//////////////////////////////////////-->

	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<div class="boxHeader pageBoxHeader clearfix">
					<div class="pull-left">
						<h1 class="pageTitle">
							<a href="#" title="#">Productos</a>
						</h1>
						<ol class="breadcrumb">
							<?php /*
							***************************************************
							BreadCrumbs
							El último TAG <li> es la fecha, este item
							fue custimizado para la tienda onlie.
							***************************************************
							*/ ?>
							<li><a href="dashboard.html">Escritorio</a></li>
							<li class="active">Productos</li>
							<li class="backFecha">10 de Octubre del 2015</li>
						</ol>
					</div>
				</div>
				
				<section id="back-tiendas">
					<div class="statsBar">
						<div class="row">
							<div class="col-xs-12 col-md-4 i panelTienda1">
								<a href="#" class="c">
									<h3 class="title">Número de Productos</h3>
									<div class="num">3 / 9</div>
								</a>
							</div>
							<div class="col-xs-12 col-md-4 i panelTienda1">
								<a href="#" class="c">
									<h3 class="title">Popularidad Productos</h3>
									<div class="num">128</div>
								</a>
							</div>
							<div class="col-xs-12 col-md-4 i panelTienda1">
								<a href="#" class="c">
									<h3 class="title">Consultas</h3>
									<div class="num">2</div>
								</a>
							</div>
						</div>
					</div>
				</section><!--/#back-tiendas-->

				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<h2 class="boxHeadline">Sube tus productos</h2>
							<h3 class="boxHeadlineSub">Haz click en <b>Crear Producto</b> y comienza a disfrutar</h3>

							<div class="row">
								
								<?php /*
								***************************************************
								CREAR PRODUCTO
								***************************************************
								*/ ?>
								<div class="col-xs-12 col-sm-6 col-md-4">
								  <div class="productos">
								    <div class="productosTecho" style="background-color:#8ac349">
								      <i class="fa fa-plus fa-1x"></i>
								    </div>
								    <div class="productosPortada">
								      <img class="" src="img/back-producto-cuadrado.jpg" alt="">
								    </div>
								    <div class="productosTitulo" style="background-color:#8ac349">
								      <?php /*
								        ATENCIÓN SEÑOR PROGRAMADOR
								        Los titulo de los productos deben estar validados
								        para que puedan contenter o recibir hasta 60 Caracteres.
								        Si el contentedor tiene más de 60 caracteres, este se romperá
								        y todos los productos de desalinearán.
								      */ ?>
								      <h5>Crear Producto</h5>
								    </div>
								    <div class="productosCategoria" style="background-color: #7DB63C; color: #fff">
								      Lorem Ipsum
								    </div>
								  </div><!--/.tiendas-->
								</div><!--/.col-->
								
								<?php /*
								***************************************************
								BLOQUEAR PRODUCTO
								***************************************************
								*/ ?>
								<div class="col-xs-12 col-sm-6 col-md-4">
								  <div class="productos">
								    <div class="productosTecho" style="background-color:#D06157">
								      <i class="fa fa-ban fa-1x"></i>
								    </div>
								    <div class="productosPortada">
								      <img class="" src="img/back-producto-cuadrado.jpg" alt="">
								    </div>
								    <div class="productosTitulo" style="background-color:#D06157">
								      <?php /*
								        ATENCIÓN SEÑOR PROGRAMADOR
								        Los titulo de los productos deben estar validados
								        para que puedan contenter o recibir hasta 60 Caracteres.
								        Si el contentedor tiene más de 60 caracteres, este se romperá
								        y todos los productos de desalinearán.
								      */ ?>
								      <h5>Alcanzó el límite</h5>
								    </div>
								    <div class="productosCategoria" style="background-color: #AE4D44; color: #fff">
								      Lorem Ipsum
								    </div>
								  </div><!--/.tiendas-->
								</div><!--/.col-->

								<?php /*
								***************************************************
								PRODUCTOS
								***************************************************
								*/ ?>
								<div class="col-xs-12 col-sm-6 col-md-4">
								  <div class="productos">
								    <div class="productosTecho">
								      $ 135.000
								    </div>
								    <div class="productosPortada">
								      <img class="" src="http://www.blogcdn.com/www.engadget.com/media/2013/09/iphone5sroundupreview.jpeg" alt="">
								    </div>
								    <div class="productosTitulo">
								      <?php /*
								        ATENCIÓN SEÑOR PROGRAMADOR
								        Los titulo de los productos deben estar validados
								        para que puedan contenter o recibir hasta 60 Caracteres.
								        Si el contentedor tiene más de 60 caracteres, este se romperá
								        y todos los productos de desalinearán.
								      */ ?>
								      <h5>Iphone 5C Nuevo</h5>
								    </div>
								    <div class="productosCategoria">
								      Disponible
								    </div>
								  </div><!--/.tiendas-->
								</div><!--/.col-->

							</div>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Search modal -->
	<div class="modal fade in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<input type="text" class="form-control" placeholder="Type search term...">
						<button type="submit" class="btn">Go</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- //////// END CONTENIDO ///////// -->
	

	<?php include("back-script.php"); ?>

	<div class="visible-xs visible-sm extendedChecker"></div>
</body>
</html>