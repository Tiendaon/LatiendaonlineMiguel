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
								  <div class="box box-without-padding">
		  							<div class="pricing-element to-center">

		  	                            <div class="pricing-header bg-rojo">
		  	                                <h1>GRATIS</h1>
		  	                                <div class="pricing-inheader">PEQUEÑA TIENDA</div>
		  	                            </div>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw icon"></i> Productos</span>
								  					<span class="pull-right info">Hasta 9 productos</span>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw icon"></i> Categorías</span>
								  					<span class="pull-right info">1 Asociada</span>
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
								  					<span class="pull-right info">0 </span>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-4 zmdi-hc-fw icon"></i> Publicidad</span>
								  					<span class="pull-right info">Si</span>
								  				</a>
								  			</li>

								  		</ul>
										
										<div class="pricing-element to-center">
											<div class="plan-compra bg-rojo">
												<button type="button" class="btn btn-primary btn-lg" style="background: #D06157; color:#fff; border: 3px solid #fff">Contratar</button>
											</div>
										</div>

								  	</div>
								  </div>
								</div><!--/.col-->

								<div class="col-xs-12 col-sm-6 col-md-4">
								  <div class="box box-without-padding">
		  							<div class="pricing-element to-center">
		  								<div class="corner-ribbon">
			                               <div class="corner-ribbon-text">Recomiendo</div>
			                            </div>
		  	                            <div class="pricing-header bg-verde">
		  	                                <h1>$6.000</h1>
		  	                                <div class="pricing-inheader">MEDIANA TIENDA</div>
		  	                            </div>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw icon"></i> Productos</span>
								  					<span class="pull-right info">Hasta 24 productos</span>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw icon"></i> Categorías</span>
								  					<span class="pull-right info">2 Asociada</span>
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
								  					<span class="pull-right info">3 </span>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-4 zmdi-hc-fw icon"></i> Publicidad</span>
								  					<span class="pull-right info">Si</span>
								  				</a>
								  			</li>

								  		</ul>
										
										<div class="pricing-element to-center">
											<div class="plan-compra bg-verde">
												<button type="button" class="btn btn-primary btn-lg" style="background: #8ac349; color:#fff; border: 3px solid #fff">Contratar</button>
											</div>
										</div>

								  	</div>
								  </div>
								</div><!--/.col-->

								<div class="col-xs-12 col-sm-6 col-md-4">
								  <div class="box box-without-padding">
		  							<div class="pricing-element to-center">

		  	                            <div class="pricing-header bg-celeste">
		  	                                <h1>$10.000</h1>
		  	                                <div class="pricing-inheader">GRAN TIENDA</div>
		  	                            </div>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw icon"></i> Productos</span>
								  					<span class="pull-right info">Hasta 52 productos</span>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw icon"></i> Categorías</span>
								  					<span class="pull-right info">3 Asociada</span>
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
								  					<span class="pull-right info">5 </span>
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
								  					<span class="pull-left"><i class="zmdi zmdi-collection-item-4 zmdi-hc-fw icon"></i> Publicidad</span>
								  					<span class="pull-right info">Si</span>
								  				</a>
								  			</li>

								  		</ul>
										
										<div class="pricing-element to-center">
											<div class="plan-compra bg-celeste">
												<button type="button" class="btn btn-primary btn-lg" style="background: #79bfcf; color:#fff; border: 3px solid #fff">Contratar</button>
											</div>
										</div>

								  	</div>
								  </div>
								</div><!--/.col-->
								
							</div><!--/.row-->

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