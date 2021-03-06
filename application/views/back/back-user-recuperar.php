<!doctype html>
<html class="no-js" lang="">
<!-- HEAD -->
<?php include("back-head.php"); ?>

<body class="page-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<div class="loginContentWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
					<div class="text-center">
						<h1 class="pageTitle">¡UPS!</h1>
						<p>Ingresa tu email para poder restablecer tu contraseña</p>
					</div>
					<form data-parsley-validate>
						<div class="form-group">
							<input type="email" class="form-control simple-form-control" placeholder="Email" required data-parsley-error-message="Wrong e-mail format">
							<i class="fa fa-envelope"></i>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-orange submit">Enviar Contraseña</button>
						</div>
						<ul class="more">
							<li><a href="back-registrar.php" title="#"><i class="fa fa-user-plus"></i> Registrar</a></li>
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/select2.min.js"></script>


	<div class="visible-xs visible-sm extendedChecker"></div>
</body>
</html>