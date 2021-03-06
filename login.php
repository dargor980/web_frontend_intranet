<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="static/img/logo_size.jpg" class="icon-pestaña">
	<title>Login</title>

	<!--JQUERY-->
		<script src="static/jquery/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap framework loading-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<!--Font awesome icons -->

	<!--css-->
	<link rel="stylesheet" type="text/css" href="static/css/index.css">
</head>



<div class="container">
		<br>
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
		<div class="container">
			<a href="index.html" class="navbar-left"><img src="static/img/logo_size.jpg"></a>
			<a href="index.html" class="navbar-brand">TecniData</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
					<li class="nav-item"><a href="login.php" class="nav-link">Acceso Intranet</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">Acerca de</a></li>
					
				</ul>
			</div>
		</div>
	</nav>
	</div>
<body>
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="static/img/avatar.png">
				</div>
				<form class="col-12" name="login_usuario" method="POST" action="log_user.php">
					<div class="form-group" id="user-group">
						<input type="text" class="form-control" placeholder="Nombre de usuario" name="usuario" >
					</div>
					<div class="form-group" id="contrasena-group">
						<input type="password" class="form-control" placeholder="Contraseña" name="password">
					</div>
					<button type="submit" class="btn btn-primary"><img src="static/img/sign-in-alt-solid.svg" style="width: 22px;height: 37px;">  Ingresar</button>
				</form>
				<div class="col-12 forgot"><a href="">He olvidado mi contraseña</a>
				</div>
			</div>
		</div>
	</div>
	
	<!--footer-->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-5">
					<!--footer bottom-->
					<p class="text-center">&copy; Copyright 2020 TecniData. Todos los derechos reservados </p>
					<a href="https://www.github.com/dargor980/web_frontend_intranet"><img src="static/img/redes-sociales.svg" style="width: 30px;height: 30px; display: block;margin: auto;"></a>
				</div>
			</div>
		</div>
	</footer>
	<script src="static/popper/popper.min.js"></script>
</body>
</html>