
<?php

if (isset($_GET['destinos_id'])) {
	$actualizar_destino_id = $_GET['destinos_id'];
}

$query = "SELECT *  FROM  destinos WHERE id=$actualizar_destino_id";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
	$destinos_id = $row['id'];
	$img = $row['img'];
	$destino = $row['destino'];
	$pais = $row['pais'];
	$precio = $row['precio'];
}

if (isset($_POST['actualizar_destino'])) {

	$destinos_id = $_POST['id'];
	$img = $_POST['img'];
	$destino = $_POST['destino'];
	$pais = $_POST['pais'];
	$precio = $_POST['precio'];

	$query = "UPDATE destinos SET img='{$img}', destino='{$destino}', pais='{$pais}', precio='{$precio}' WHERE id=$actualizar_destino_id ";

	echo "<p style=\"color: green; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> $nombrepaquete se ha actualizado con éxito. <a href=\"destinos.php\"><small>Volver a Destinos</small></a></p>";

	$actualizar_destino = mysqli_query($connection,$query);

	if (!$actualizar_destino) {
		die("Query Failed" . mysqli_error($connection));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="img">img</label> <small>Incluir nombre de una ciudad seguido del formato .jpg. Ej. panama.jpg</small>
		<input value="<?php echo $img; ?>" type="text" class="form-control" name="img">
	</div>

	<div class="form-group">
		<label for="destino">Ciudad (Destino)</label>
		<input value="<?php echo $destino; ?>" type="text" class="form-control" name="destino">
	</div>

	<div class="form-group">
		<label for="pais">País</label>
		<input value="<?php echo $pais; ?>" type="text" class="form-control" name="pais">
	</div>

	<div class="form-group">
		<label for="precio">Precio</label>
		<textarea type="text" class="form-control" name="precio"><?php echo $precio ?></textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="actualizar_destino" value="Actualizar destino">
	</div>
</form>
