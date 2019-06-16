
<?php

if (isset($_GET['galeria_id'])) {
	$actualizar_galeria_id = $_GET['galeria_id'];
}

$query = "SELECT *  FROM  slideshow WHERE id=$actualizar_galeria_id";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
	$galeria_id = $row['id'];
	$img = $row['img'];
	$titulo = $row['title'];
	$subtitulo1 = $row['stitle1'];
	$subtitulo2 = $row['stitle2'];
	$precio = $row['price'];
}

if (isset($_POST['actualizar_galeria'])) {

	$galeria_id = $_POST['id'];
	$img = $_POST['img'];
	$titulo = $_POST['title'];
	$subtitulo1 = $_POST['stitle1'];
	$subtitulo2 = $_POST['stitle2'];
	$precio = $_POST['price'];

	$query = "UPDATE slideshow SET img='{$img}', title='{$titulo}', stitle1='{$subtitulo1}', stitle2='{$subtitulo2}', price='{$precio}' WHERE id=$actualizar_galeria_id ";

	echo "<p style=\"color: green; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> $nombrepaquete se ha actualizado con éxito. <a href=\"galeria.php\"><small>Volver a Galeria</small></a></p>";

	$actualizar_galeria = mysqli_query($connection,$query);

	if (!$actualizar_galeria) {
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
		<label for="titulo">Titulo</label>
		<input value="<?php echo $titulo; ?>" type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="subtitulo1">Subtitulo 1</label>
		<input value="<?php echo $subtitulo1; ?>" type="text" class="form-control" name="stitle1">
	</div>

	<div class="form-group">
		<label for="subtitulo2">Subtitulo 2</label>
		<textarea type="text" class="form-control" name="stitle2"><?php echo $subtitulo2 ?></textarea>
	</div>

	<div class="form-group">
		<label for="precio">Precio</label> <small>Solo números, no incluir signos.</small>
		<input value="<?php echo $precio; ?>" type="text" class="form-control" name="price">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="actualizar_galeria" value="Actualizar la imagén">
	</div>
</form>
