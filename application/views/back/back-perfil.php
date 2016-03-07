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
							<a href="#" title="#">Perfil</a>
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
							<li class="active">Perfil</li>
							<li class="backFecha">10 de Octubre del 2015</li>
						</ol>
					</div>
				</div>
				
				<section id="back-perfil">
					<div class="row">
						<div class="col-xs-12 col-md-4 col-lg-3">
							<div class="userProfileInfo">
								<div class="image">
									<img src="tmp/eduardojorque.jpg" alt="#" class="img-responsive">
									<a href="#" title="#" class="editImage">
										<i class="fa fa-camera"></i>
									</a>
								</div>

								<div class="box">
									<div class="name"><strong>Eduardo Jorquera</strong></div>
									<div class="info">
										<span><i class="fa fa-fw fa-phone"></i> <a href="tel:+4210555888777" title="#">+569 94161572</a></span>
										<span><i class="fa fa-fw fa-list-alt"></i> <a href="#" title="#">contacto@eduardojorquera.cl</a></span>
									</div>
									<?php /*
									***************************************************
									DESACTIVADO: REDES SOCIALES

									<div class="socialIcons clearfix">
										<a href="#" title="#" class="fb">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" title="#" class="twitter">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" title="#" class="google-plus">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
									***************************************************
									*/ ?>
									
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-8 col-lg-9">
							<div class="box">
								<h2 class="boxHeadline">Mi Perfil</h2>
								<h3 class="boxHeadlineSub">Bienvenido, Ya estás registrado en la tienda Online</h3>

								<!-- Tabs -->
								<ul class="nav nav-tabs userProfileTabs" role="tablist">
									<li role="presentation" class="active"><a href="#tab-item-1" aria-controls="tab-item-1" role="tab" data-toggle="tab" aria-expanded="true">Información Personal</a></li>
								</ul>

								<div class="tab-content">

									<!-- About -->
									<div role="tabpanel" class="tab-pane fade active in" id="tab-item-1">

										<form action="">
											<div class="row customSelectWrap" style="position:relative">
												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<label for="basicInput">Nombre</label>
														<input type="text" class="form-control" id="basicInput" placeholder="Placeholder">
														<small class="alertform">Debe introducir los dtos correctos</small>
													</div>
												</div>
												<div class="col-xs-12 col-sm-5">
													<div class="form-group">
														<label for="basicInput">Apellido</label>
														<input type="text" class="form-control" id="basicInput" placeholder="Placeholder">
													</div>
												</div>
												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<label for="basicInput">Vacio</label>
														<input type="text" class="form-control" id="basicInput" placeholder="Placeholder">
													</div>
												</div>
												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<label for="basicInput">Vacio</label>
														<input type="text" class="form-control" id="basicInput" placeholder="Placeholder">
														<small class="alertform">Este campo es requerido</small>
													</div>
												</div>

												<!-- Custom select -->

												<div class="col-xs-12 col-sm-7 i">
													<div class="form-group">
														<label>Vacio</label>
														<select class="js-select">
															<option disabled selected>- Select country -</option>
															<option>Slovakia</option>
															<option>Czech Republic</option>
															<option>Russia</option>
															<option>United Kingdom</option>
															<option>Spain</option>
															<option>France</option>
															<option>Austria</option>
															<option>Germany</option>
															<option>Italy</option>
															<option>USA</option>
															<option>Norway</option>
															<option>Denmark</option>
															<option>Iceland</option>
															<option>Croatia</option>
														</select>
													</div>
												</div>

												<div class="col-xs-12 col-sm-7 i">
													<div class="form-group">
														<label>Vacio</label>
														<select class="js-select">
															<option disabled selected>- Select country -</option>
															<option>Slovakia</option>
															<option>Czech Republic</option>
															<option>Russia</option>
															<option>United Kingdom</option>
															<option>Spain</option>
															<option>France</option>
															<option>Austria</option>
															<option>Germany</option>
															<option>Italy</option>
															<option>USA</option>
															<option>Norway</option>
															<option>Denmark</option>
															<option>Iceland</option>
															<option>Croatia</option>
														</select>
													</div>
												</div>

												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
													</div>
												</div>


											</div>
										</form>

									</div><!-- END About -->

									
								</div>
							</div>
						</div>
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