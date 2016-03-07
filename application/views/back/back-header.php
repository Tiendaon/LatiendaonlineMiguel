<!-- Header -->
<header id="header">
	<h1 class="logo">
		<a href="#" title="#" class="js-nav-toggler">
			<i class="icon icon-close"></i>
		</a>
		<a href="#" title="#">La Tienda<span> Online</span></a>
	</h1>

	<div class="pageContent">
		<div class="container">
			<ul class="topNavigation">

				<?php /* 
				***************************************************
				En caso que el usuario quiero tenga que recibir
				mensajes, podemos habilitar este item que está
				comentado.
				***************************************************

				<li>
					<div class="btn-group simpleList simpleListLighten messages">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="zmdi zmdi-email zmdi-hc-fw icon"></i>
							<span class="badge">6</span>
						</button>
						
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#" title="#" class="clearfix">
									<img src="tmp/44x44-3.jpg" alt="#" width="44" height="44" class="pull-left">
									<span class="pull-left">
										<strong class="text-gray">John Doe</strong><br />
										<span class="text-gray">Proin vel sapien at risus...</span>
									</span>
									<span class="pull-right">22 sec. ago</span>
								</a>
							</li>
							<li>
								<a href="#" title="#" class="clearfix">
									<img src="tmp/44x44-1.jpg" alt="#" width="44" height="44" class="pull-left">
									<span class="pull-left">
										<strong class="text-gray">Jane Doe</strong><br />
										<span class="text-gray">Aliquam non accumsan...</span>
									</span>
									<span class="pull-right">19 min. ago</span>
								</a>
							</li>
							<li>
								<a href="#" title="#" class="clearfix">
									<img src="tmp/44x44-4.jpg" alt="#" width="44" height="44" class="pull-left">
									<span class="pull-left">
										<strong class="text-gray">Nick Doe</strong><br />
										<span class="text-gray">Praesent non hendrerit...</span>
									</span>
									<span class="pull-right">1 hour ago</span>
								</a>
							</li>
							<li>
								<a href="#" title="#" class="clearfix">
									<img src="tmp/44x44-5.jpg" alt="#" width="44" height="44" class="pull-left">
									<span class="pull-left">
										<strong class="text-gray">Andrew Doe</strong><br />
										<span class="text-gray">Aliquam ligula ante magna...</span>
									</span>
									<span class="pull-right">21.09.2015</span>
								</a>
							</li>
							<li>
								<a href="#" title="#" class="clearfix text-center">
									<i class="zmdi zmdi-plus-square icon"></i> <strong class="text-gray">See all</strong>
								</a>
							</li>
						</ul>
					</div>
				</li>
				*/ ?>
				
				<li>
					<div class="btn-group simpleList list-sm">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="zmdi zmdi-settings zmdi-hc-fw icon"></i>
							<?php /*
							***************************************************
							En caso que querer colocar Badge, puede
							descomentar el siguiente TAG

							<span class="badge">1</span>
							***************************************************
							*/ ?>		
						</button>

						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#" class="clearfix">
									<span class="pull-left"><i class="zmdi zmdi-account zmdi-hc-fw icon"></i> Mi Perfil</span>
									<span class="pull-right info">username</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<span class="pull-left"><i class="zmdi zmdi-collection-item-1 zmdi-hc-fw icon"></i> Consultas</span>
									<span class="pull-right info">3</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<span class="pull-left"><i class="zmdi zmdi-collection-item-2 zmdi-hc-fw icon"></i> Productos</span>
									<span class="pull-right info">9 / 9</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<span class="pull-left"><i class="zmdi zmdi-collection-item-3 zmdi-hc-fw icon"></i> Sucursales</span>
									<span class="pull-right info">1 / 1</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<span class="pull-left"><i class="zmdi zmdi-collection-item-4 zmdi-hc-fw icon"></i> Visitas</span>
									<?php /*
									*****************************************************
									Las visitas corresponden a la suma total de
									personas que visitaron;
										1.- La tienda del usuario (vista perfil)
										2.- Un producto asociado a la tienda del usuario
										(vista producto)
									*****************************************************
									*/ ?>
									<span class="pull-right info">1.230</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<span class="pull-left"><i class="zmdi zmdi-bookmark zmdi-hc-fw icon"></i> Plan</span>
									<?php /*
									***************************************************
									Dependiendo del plan que la persona tenga
									contratado, este valor cambia. Los planes Son:
									1.- Gratis
									2.- Emprendedor
									3.- Profesional
									***************************************************
									*/ ?>
									<span class="pull-right info">Gratis</span>

								</a>
							</li>
							<li>
								<a href="#" title="#" class="clearfix text-center">
									<i class="zmdi zmdi-run icon"></i> Salir
								</a>
							</li>
						</ul>
					</div>
				</li>
				

				<li>
					<a href="#" title="#" data-toggle="modal" data-target="#searchModal">
						<i class="zmdi zmdi-search zmdi-hc-fw icon"></i>
					</a>
				</li>

			</ul>
		</div>
	</div>
</header>