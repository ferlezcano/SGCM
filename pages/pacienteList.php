<?php
$title = "Listado de pacientes";
include '../source/app/session.php';
include '../source/app/auth.php';
include 'inc/header.php';
?>

<div class="col-md-12">
	<div class="page-header">
		<h1>Listado de pacientes</h1>
	</div>
</div>

<div class="col-md-12">
	<form
		action='http://demo.codeofaninja.com/tutorials/bootstrap-tutorial-for-beginners/'
		method='post'>

		<table class='table table-hover table-responsive table-bordered'>

			<tr>
				<td>Nombre:</td>
				<td><input type='text' name='nombre' class='form-control'></td>
			</tr>

			<tr>
				<td>Apellido:</td>
				<td><input type='text' name='apellido' class='form-control'></td>
			</tr>

			<tr>
				<td>Tipo Doc.:</td>
				<td><select name='list_id2' class='form-control'>
						<option value='1'>Seleccione un tipo</option>
						<option value='2'>C. I.</option>
						<option value='3'>Pasaporte</option>
				</select></td>
			</tr>

			<tr>
				<td>Nro. Documento:</td>
				<td><input type='text' name='doc' class='form-control'></td>
			</tr>

			<tr>
				<td>Estado:</td>
				<td><select name='list_id' class='form-control'>
						<option value='1'>Seleccione un estado</option>
						<option value='2'>Activo</option>
						<option value='3'>Inactivo</option>
				</select></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" class="btn btn-primary">Filtrar</button>
					<button type="submit" class="btn btn-primary">Limpiar</button>
				</td>
			</tr>

		</table>
	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Tipo Doc.</th>
				<th>Nro. Doc.</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Juan</td>
				<td>González</td>
				<td>C. I.</td>
				<td>3.123.122</td>
				<td><a href="#">Ver detalles</a></td>
			</tr>
		</tbody>
	</table>
	<nav aria-label="Page navigation">
		<ul class="pagination">
			<li><a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span>
			</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span>
			</a></li>
		</ul>
	</nav>
</div>

<?php
include 'inc/footer.php';
?>