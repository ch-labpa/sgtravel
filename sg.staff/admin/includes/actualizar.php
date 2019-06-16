
<?php

if (isset($_GET['paquete_id'])) {
	$actualizar_paquete_id = $_GET['paquete_id'];
}

$query = "SELECT *  FROM  paquetes WHERE id=$actualizar_paquete_id";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
		$paquete_id = $row['id'];
		$nombrepaquete = $row['nombrepaquete'];
		$aeropuerto = $row['aeropuerto'];
		$fechasalida = $row['fechasalida'];
		$incluye = $row['incluye'];
		$paises = $row['paises'];
		$visita = $row['visita'];
		$precio = $row['precio'];
		$disclosure = $row['disclosure'];
		$img = $row['img'];
}

if (isset($_POST['actualizar'])) {

	$nombrepaquete = $_POST['nombrepaquete'];
	$aeropuerto = $_POST['aeropuerto'];
	$fechasalida = $_POST['fechasalida'];
	$incluye = $_POST['incluye'];
	$paises = $_POST['paises'];
	$visita = $_POST['visita'];
	$precio = $_POST['precio'];
	$disclosure = $_POST['disclosure'];
	$img = $_POST['img'];

	$query = "UPDATE paquetes SET nombrepaquete='{$nombrepaquete}', aeropuerto='{$aeropuerto}', fechasalida='{$fechasalida}', incluye='{$incluye}', paises='{$paises}', visita='{$visita}', precio='{$precio}', disclosure='{$disclosure}', img='{$img}' WHERE id=$actualizar_paquete_id ";

	echo "<p style=\"color: green; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> $nombrepaquete se ha actualizado con éxito. <a href=\"paquetes.php\"><small>Volver a Paquetes</small></a></p>";

	$actualizar_paquete = mysqli_query($connection,$query);

	if (!$actualizar_paquete) {
		die("Query Failed" . mysqli_error($connection));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="nombrepaquete">Paquete</label>
		<input value="<?php echo $nombrepaquete; ?>" type="text" class="form-control" name="nombrepaquete">
	</div>

	<div class="form-group">
		<label for="aeropuerto">Aeropuerto</label>
		<input value="<?php echo $aeropuerto; ?>" type="text" class="form-control" name="aeropuerto">
	</div>

	<div class="form-group">
		<label for="fechasalida">Fecha de salida</label>
		<input value="<?php echo $fechasalida; ?>" type="text" class="form-control" name="fechasalida">
	</div>

	<div class="form-group">
		<label for="incluye">Incluye</label>
		<textarea type="text" class="form-control" name="incluye"><?php echo $incluye ?></textarea>
	</div>

	<div class="form-group">
		<label for="disclosure">Paises</label> <small>Solo países.</small>
		<textarea type="text" class="form-control" name="paises"><?php echo $paises ?></textarea>
	</div>

	<div class="form-group">
		<label for="visita">Visita</label> <small>Solo ciudades o lugares.</small>
		<textarea type="text" class="form-control" name="visita"><?php echo $visita ?></textarea>
	</div>

	<div class="form-group">
		<label for="precio">Precio</label> <small>Solo números, no incluir signos.</small>
		<input value="<?php echo $precio; ?>" type="text" class="form-control" name="precio">
	</div>

	<div class="form-group">
		<label for="disclosure">Notas</label> <small>Precios para clientes regulares cuando los paquetes son destinados a personas jubíladas (incluir $) o notas referentes a los impuestos/propinas/abono.</small>
		<textarea type="text" class="form-control" name="disclosure"><?php echo $notas ?></textarea>
	</div>

	<div class="form-group">
		<label for="img">img</label> <small>Incluir nombre de una ciudad seguido del formato .jpg. Ej. panama.jpg</small>
		<textarea type="text" class="form-control" name="img"><?php echo $img ?></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar paquete">
	</div>
</form>
