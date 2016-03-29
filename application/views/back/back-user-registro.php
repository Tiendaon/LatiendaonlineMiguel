<!doctype html>
<html class="no-js" lang="">
<!-- HEAD -->
<?php include("back-head.php"); ?>
<script>
function formulario(f) { 
if (f.password.value   != f.password2.value) { alert ('Las calves no coinciden');
f.password.value= "";
f.password2.value="";
f.password.focus(); return false; }
return true; }

 </script>
<body class="page-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<div class="loginContentWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
					<h1>REGISTRATE ACÁ</h1>
                                        <form data-parsley-validate onsubmit="return formulario(this)" action="<?php echo base_url()?>index.php/Welcome/back_index" method="post">
						<div class="form-group">
                                                    <input name="nombre" type="text" class="form-control simple-form-control" placeholder="Nombre" required data-parsley-error-message="Wrong e-mail format">
							<i class="fa fa-user"></i>
						</div>
						<div class="form-group">
                                                    <input name="email" type="email" class="form-control simple-form-control" placeholder="Email" required data-parsley-error-message="Wrong e-mail format">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="form-group">
                                                    <input name="password" type="password" class="form-control simple-form-control" placeholder="Contraseña" required data-parsley-error-message="Wrong password">
							<i class="fa fa-lock"></i>
						</div>
						<div class="form-group">
                                                    <input name="password2" type="password" class="form-control simple-form-control" placeholder="Repetir Contraseña" required data-parsley-error-message="Wrong password">
							<i class="fa fa-lock"></i>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-orange submit">REGISTRAR</button>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-orange submit" style="background: #3A589E">FACEBOOK</button>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-orange submit" style="background: #d34734">GOOGLE+</button>
						</div>
					</form>
					<ul class="more">
						<li><a href="<?php echo base_url()?>index.php/welcome/index"><i class="fa fa-home"></i> Home</a></li>
					</ul>
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