<?php
$uploads_dir = '/home2/hpssa/public_html/img/packages';
	if (isset($_POST['agregar_paquete'])) {

		$nombrepaquete = $_POST['nombrepaquete'];
		$aeropuerto = $_POST['aeropuerto'];
		$fechasalida = $_POST['fechasalida'];
		$incluye = $_POST['incluye'];
		$paises = $_POST['paises'];
		$visita = $_POST['visita'];
		$precio = $_POST['precio'];
		$disclosure = $_POST['disclosure'];

		$img = $_FILES['img']['name'];
		$tmp_img = $_FILES['img']['tmp_name'];
		move_uploaded_file($tmp_img, "$uploads_dir/$img");

		if ($nombrepaquete=="" || $aeropuerto=="" || $fechasalida=="" || $incluye=="" || $paises=="" || $visita=="" || $precio=="") {
			echo "<p style=\"color: red; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small>No se pudo agregar el paquete. Intenta de nuevo.</small></a></p>";
		}
		else {
			$query = "INSERT INTO paquetes(nombrepaquete, fechasalida, incluye, visita, precio, disclosure, aeropuerto, img, paises) VALUES('{$nombrepaquete}', '{$fechasalida}', '{$incluye}', '{$visita}', '{$precio}', '{$disclosure}', '{$aeropuerto}', '{$img}', '{$paises}')";

			echo "<p style=\"color: green; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> $nombrepaquete se ha agregado con éxito. <a href=\"paquetes.php\"><small>Volver a Paquetes</small></a></p>";

			$nuevo_paquete = mysqli_query($connection,$query);

			if (!$nuevo_paquete) {
				die("Query Failed");
			}
		}
	}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="nombrepaquete">Paquete</label>
		<input type="text" class="form-control" name="nombrepaquete">
	</div>

	<div class="form-group">
		<label for="aeropuerto">Aeropuerto</label>
		<input  type="text" class="form-control" name="aeropuerto">
	</div>

	<div class="form-group">
		<label for="fechasalida">Fecha de salida</label>
		<input  type="text" class="form-control" name="fechasalida">
	</div>

	<div class="form-group">
		<label for="incluye">Incluye</label>
		<textarea type="text" class="form-control" name="incluye"></textarea>
	</div>

	<div class="form-group">
		<label for="disclosure">Paises</label> <small>Solo países.</small>
		<textarea type="text" class="form-control" name="paises"></textarea>
	</div>

	<div class="form-group">
		<label for="visita">Visita</label> <small>Solo ciudades o lugares.</small>
		<textarea type="text" class="form-control" name="visita"></textarea>
	</div>

	<div class="form-group">
		<label for="precio">Precio</label> <small>Solo números, no incluir signos.</small>
		<input type="text" class="form-control" name="precio">
	</div>

	<div class="form-group">
		<label for="disclosure">Notas</label> <small>Precios para clientes regulares cuando los paquetes son destinados a personas jubíladas (incluir $) o notas referentes a los impuestos/propinas/abono.</small>
		<textarea type="text" class="form-control" name="disclosure"></textarea>
	</div>

	<div class="form-group">
		<label for="img">img</label> <small>Aségurate de que la imágen sea de buena calidad y de un formato válido.</small>
		<input type="file" name="img" >
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="agregar_paquete" value="Agregar paquete">
	</div>
</form>
