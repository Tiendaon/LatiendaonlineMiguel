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
							<a href="#" title="#">Tiendas</a>
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
							<li class="active">Tiendas</li>
							<li class="backFecha">10 de Octubre del 2015</li>
						</ol>
					</div>
				</div>
				
				<section id="back-tiendas">
					<div class="statsBar">
						<div class="row">
							<div class="col-xs-12 col-md-4 i panelTienda1">
								<a href="#" class="c">
									<h3 class="title">Número de tiendas</h3>
									<div class="num">1 / 1</div>
								</a>
							</div>
							<div class="col-xs-12 col-md-4 i panelTienda1">
								<a href="#" class="c">
									<h3 class="title">Sucursales</h3>
									<div class="num">0 / 1</div>
								</a>
							</div>
							<div class="col-xs-12 col-md-4 i panelTienda1">
								<a href="#" class="c">
									<h3 class="title">Plan</h3>
									<div class="num">Gratis</div>
								</a>
							</div>
						</div>
					</div>
				</section><!--/#back-tiendas-->

				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<h2 class="boxHeadline">Crea tu Tienda Online</h2>
							<h3 class="boxHeadlineSub">Haz click en <b>Crear Teinda</b> y comienza a disfrutar</h3>

							<div class="row">
								
								
								<div class="col-xs-12 col-sm-6 col-md-4">
								<?php /*
								***************************************************
								CREAR TIENDA
								Si el usuario no tiene ninguna tienda creada, debe
								aparecer este item (Crear Tienda) - Si el usuario
								llego a la máxima capacidad de tiendas, debe
								aparece (Bloquear Tienda)
								***************************************************
								*/ ?>
								<a href="#">
									<div class="tiendas">
									  <div class="tiendasPerfil">
									    <img src="img/back-tienda-plus.jpg" alt="" class="img-responsive img-circle center-block">
									  </div>
									  <div class="tiendasTecho"></div>
									  <div class="tiendasPortada">
									    <img class="" src="img/back-tienda-cuadrado.jpg" alt="">
									  </div>
									  <div class="tiendasValidada">
									    <img class="img-responsive img-circle center-block" src="img/validar-off.png" alt="">
									  </div>
									  <div class="tiendasTitulo" style="background-color: #8ac349">
									    <h5>Crear Tienda</h5>
									  </div>
									  <div class="tiendasCategoria" style="background-color:#7DB63C; color: #fff">
									    Sucursal
									  </div>
									</div><!--/.tiendas-->
								</a>
								</div><!--/.col-->

								<div class="col-xs-12 col-sm-6 col-md-4">
								<?php /*
								***************************************************
								BLOQUEAR TIENDA
								Si el usuario no tiene ninguna tienda creada, debe
								aparecer este item (Crear Tienda) - Si el usuario
								llego a la máxima capacidad de tiendas, debe
								aparece (Bloquear Tienda)
								***************************************************
								*/ ?>
								<a href="#">
									<div class="tiendas">
									  <div class="tiendasPerfil">
									    <img src="img/back-tienda-less.jpg" alt="" class="img-responsive img-circle center-block">
									  </div>
									  <div class="tiendasTecho"></div>
									  <div class="tiendasPortada">
									    <img class="" src="img/back-tienda-cuadrado.jpg" alt="">
									  </div>
									  <div class="tiendasValidada">
									    <img class="img-responsive img-circle center-block" src="img/validar-off.png" alt="">
									  </div>
									  <div class="tiendasTitulo" style="background-color: #D06157">
									    <h5>Alcanzó el límite</h5>
									  </div>
									  <div class="tiendasCategoria" style="background-color:#AE4D44; color: #fff">
									    ¿Quienes más sucursales?
									  </div>
									</div><!--/.tiendas-->
								</a>
								</div><!--/.col-->
								

								<?php /*
								***************************************************
								TIENDAS / SUCURSALES
								***************************************************
								*/ ?>
								<div class="col-xs-12 col-sm-6 col-md-4">

								  <div class="tiendas">
								    <div class="tiendasPerfil">
								      <img src="img/back-tienda-user.jpg" alt="" class="img-responsive img-circle center-block">
								    </div>
								    <div class="tiendasTecho"></div>
								    <div class="tiendasPortada">
								      <img class="" src="img/back-tienda-cuadrado.jpg" alt="">
								    </div>
								    <div class="tiendasValidada">
								      <img class="img-responsive img-circle center-block" src="img/validar-off.png" alt="">
								    </div>
								    <div class="tiendasTitulo">
								      <h5>Eduardo Fotografía Pro</h5>
								      <small>VII Región del Maule</small>
								    </div>
								    <div class="tiendasCategoria">
								      Veterinaria / Accesorios
								    </div>
								  </div><!--/.tiendas-->
								</div><!--/.col-->

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