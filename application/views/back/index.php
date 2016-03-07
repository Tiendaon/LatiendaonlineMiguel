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
							<a href="#" title="#">Escritorio</a>
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
							<li class="active">Escritorio</li>
							<li class="backFecha">10 de Octubre del 2015</li>
						</ol>
					</div>
				</div>
				
				<section id="">
					<div class="row">
						<!-- COLUMN RIGHT -->
						<div class="col-xs-12 col-sm-7">
							<div class="box">
								<h2 class="boxHeadline">¡Muy bien Eduardo!</h2>
								<h3 class="boxHeadlineSub">Bienvenido, Ya estás registrado en la tienda Online</h3>

								<div class="alert alert-success alert-dismissible" role="alert">
									<strong>PASO 1</strong> - Verifica que todos tus datos estén OK
								</div>
								<div class="alert alert-success alert-dismissible" role="alert">
									<strong>PASO 2</strong> - Presiona el botón <b>Tiendas</b> Ubicado en el menú lateral izquierdo para crear una nueva tienda. Procura seguir los pasos indicados.
								</div>
								<div class="alert alert-success alert-dismissible" role="alert">
									<strong>PASO 3</strong> - Presiona el botón <b>Productos/Servicios</b> Ubicado en el menú lateral izquierdo para crear una nueva tienda. Procura seguir los pasos indicados.
								</div>
							</div>

							<div class="box">
								<div class="box box-without-padding">
									<div class="clearfix boxHeader boxHeaderBorders">
										<h2 class="boxHeadline">Noticias La Tienda Online</h2>
										<h3 class="boxHeadlineSub">Entérate de todos las novedades</h3>

										<?php /*
										***************************************************
										DESACTIVADO / MENU PANEL DESPLEGABLE
										- Si usted quiere ordenar o hacer un sort
										- Si quiere ver la publicación más antigua
										- Si desea filtrar u otro que se considere

										<div class="btn-group pull-right boxHeaderOptions">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="zmdi zmdi-more-vert"></i>
											</button>
											<ul class="dropdown-menu">
												<li><a href="#" title="#"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i> Time span</a></li>
												<li><a href="#" title="#"><i class="zmdi zmdi-chart zmdi-hc-fw"></i> Chart type</a></li>
												<li><a href="#" title="#"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Refresh</a></li>
											</ul>
										</div>
										***************************************************
										*/ ?>
											
									</div>

									<div class="simpleList simpleListImages">
										<ul>
											<li>
												<a href="#">
													<i class="zmdi zmdi-chevron-right arrow"></i>
													<div class="image">
														<img src="tmp/iphone.png" alt="#" width="81" height="66">
													</div>
													En Enero 2015 Se lanzará la APP de la Tienda Online.
													<span class="info">Publicado el 4 Octubre del 2015</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-chevron-right arrow"></i>
													<div class="image">
														<img src="tmp/macbook.png" alt="#" width="96" height="60">
													</div>
													Estamos optimizando para todo tipo de dispositivos.
													<span class="info">Publicado el 8 Septiembre del 2015</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-chevron-right arrow"></i>
													<div class="image">
														<img src="tmp/samsung.png" alt="#" width="65" height="73">
													</div>
													Conoce las 10 tiendas destacadas del 2014.
													<span class="info">Publicado el 10 Agosto del 2015</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="zmdi zmdi-chevron-right arrow"></i>
													<div class="image">
														<img src="tmp/iphone.png" alt="#" width="81" height="66">
													</div>
													Promociones para clientes profesionales
													<span class="info">Publicado el 19 Agosto del 2015</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div><!-- END COLUMN RIGHT -->

						
						<!-- COLUMN LEFT -->
						<div class="col-xs-12 col-sm-5">

							<div class="box">

								<h2 class="boxHeadline">Estadísticas</h2>
								<h3 class="boxHeadlineSub">Resumen de la información general</h3>

								<div class="box box-without-padding">
									<div class="bgTitle">
										<h3 class="boxTitle">Nombre Tienda</h3>
									</div>
									<div class="simpleList simpleListLighten">
										<ul>
											<?php /*
											*****************************************************
											VISITAS
											Las visitas corresponden a la suma total de
											personas que visitaron;
												1.- La tienda del usuario (vista perfil)
												2.- Un producto asociado a la tienda del usuario
												(vista producto)

											Visitas Perfil + Producto = Total Visitas
											*****************************************************
											*/ ?>
											<li>
												<a href="#" class="clearfix">
													<span class="pull-left"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw icon"></i> Visitas</span>
													<span class="pull-right info">1.230</span>
												</a>
											</li>

											<?php /*
											***************************************************
											CONSULTAS
											Las consultas corresponden a la cantidad de veces
											que el usuario hace preguntas a través de
											(Producto) o la vista (Tienda Perfil)
											***************************************************
											*/ ?>
											<li>
												<a href="#" class="clearfix">
													<span class="pull-left"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw icon"></i> Consultas</span>
													<span class="pull-right info">3</span>
												</a>
											</li>

											<?php /*
											***************************************************
											SUCURSALES
											Una sucursal corresponde a la duplcación de la
											tienda en otra región determinada. Ej: Usted tiene
											una tienda en la región del Maule, pero también
											desea que esa tienda apareza en la región del
											Bio Bio (Como sucursal) - Usted debe agregar
											una nueva sucursal.

											Una sucursal indica que usted tiene entrega 
											física del producto en la localidad indicada.
											***************************************************
											*/ ?>
											<li>
												<a href="#" class="clearfix">
													<span class="pull-left"><i class="zmdi zmdi-collection-item-3 zmdi-hc-fw icon"></i> Sucursales</span>
													<span class="pull-right info">1 / 1</span>
												</a>
											</li>

											<?php /*
											***************************************************
											PRODUCTOS
											Los usuarios que re registran GRATIS, tendrán por
											defecto:
											- 1 Sucursal
											- 9 Productos Máximo
											- 1 Categoría
											***************************************************
											*/ ?>
											<li>
												<a href="#" class="clearfix">
													<span class="pull-left"><i class="zmdi zmdi-collection-item-4 zmdi-hc-fw icon"></i> Productos</span>
													<span class="pull-right info">9 / 9</span>
												</a>
											</li>

											<?php /*
											***************************************************
											PRODUCTOS MÁS VISITADOS
											Este item muestra la cantidad de visitas que tiene
											el producto más visitado. (No muestra el producto
											En si, solo el número de visitas que tiene el 
											más visitado)
											***************************************************
											*/ ?>
											<li>
												<a href="#" class="clearfix">
													<span class="pull-left"><i class="zmdi zmdi-collection-item-5 zmdi-hc-fw icon"></i> Producto Más Visitado</span>
													<span class="pull-right info">980</span>
												</a>
											</li>

											<?php /*
											*****************************************************
											Las visitas corresponden a la suma total de
											personas que visitaron;
												1.- La tienda del usuario (vista perfil)
												2.- Un producto asociado a la tienda del usuario
												(vista producto)

											Visitas = VisitasPerfil + VisitasProductos
											*****************************************************
											*/ ?>
											<li>
												<a href="#" class="clearfix">
													<span class="pull-left"><i class="zmdi zmdi-bookmark zmdi-hc-fw icon"></i> Plan</span>
													<span class="pull-right info">Gratis</span>
												</a>
											</li>
										</ul>
									</div>
								</div>

							</div><!--/.box-->

							<div class="box">
								<h2 class="boxHeadline">¿Todo Bien?</h2>
								<h3 class="boxHeadlineSub">Dudas, consultas y sugenrencias acá</h3>
								
								<form action="">
									<div class="form-group">
										<textarea id="textarea1" class="form-control" rows="8" placeholder="Si tienes dudas respecto al servicio, presenta un error en la plataforma o quieres hacernos una consulta directa, puedes utilizar este campo de formulario para enviarnos un mensaje directo"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Enviar</button>
								</form>
							
							</div><!--/.box-->
						</div><!-- END COLUMN LEFT -->
					</div>
				</section>
				
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