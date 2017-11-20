<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="../style/bootstrap-3.3.6/css/bootstrap.min.css">
<script src="../style/jquery/jquery.min.js"></script>
<script src="../style/bootstrap-3.3.6/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

<title>
<?php
if (isset($title) && ! empty($title)) {
    echo $title;
} else {
    echo "SGCM";
}
?>
</title>

</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-slide-dropdown">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Inicio</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-slide-dropdown">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Personas<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="pacienteList.php">Pacientes</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Citas<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Opción 1</a></li>
							<li><a href="#">Opción 2</a></li>
							<li><a href="#">Opción 3</a></li>
							<li class="divider"></li>
							<li><a href="#">Opción 4</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Administración<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Configuraciones</a></li>
							<li><a href="#">Opciones</a></li>
							<li><a href="#">Permisos</a></li>
							<li><a href="#">Roles</a></li>
							<li><a href="#">Usuarios</a></li>
						</ul></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>
				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<div class="container">