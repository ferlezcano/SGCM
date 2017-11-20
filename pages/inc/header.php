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
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Inicio</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Personas</a></li>
					<li><a href="#">Citas</a></li>
					<li><a href="#">Cobros</a></li>
					<li><a href="#">Administración</a></li>
					<li><a href="logout.php">Cerrar Sesión</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
			<div class="container">