<?php
$uploads_dir = '/home2/hpssa/public_html/img/slideshow';
	if (isset($_POST['agregar_imagen'])) {

		$titulo = $_POST['title'];
		$subtitulo1 = $_POST['stitle1'];
		$subtitulo2 = $_POST['stitle2'];
		$precio = $_POST['price'];

		$img = $_FILES['img']['name'];
		$tmp_img = $_FILES['img']['tmp_name'];
		move_uploaded_file($tmp_img, "$uploads_dir/$img");

		if ($titulo=="" || $subtitulo1=="" || $subtitulo2=="" || $precio=="") {
			echo "<p style=\"color: red; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> No se pudo agregar la imágen. Intenta de nuevo.</small></a></p>";
		}
		else {
			$query = "INSERT INTO slideshow(img, title, stitle1, stitle2, price) VALUES('{$img}', '{$titulo}', '{$subtitulo1}', '{$subtitulo2}', '{$precio}')";

			echo "<p style=\"color: green; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> $nombrepaquete se ha agregado con éxito. <a href=\"galeria.php\"><small>Volver a Galeria</small></a></p>";

			$nueva_imagen = mysqli_query($connection,$query);

			if (!$nueva_imagen) {
				die("Query Failed");
			}
		}
	}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="img">img</label> <small>Aségurate de que la imágen sea de buena calidad y de un formato válido.</small>
		<input type="file" name="img" >
	</div>

	<div class="form-group">
		<label for="titulo">Titulo</label>
		<input type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="subtitulo1">Subtitulo 1</label>
		<input type="text" class="form-control" name="stitle1">
	</div>

	<div class="form-group">
		<label for="subtitulo1">Subtitulo 2</label>
		<textarea type="text" class="form-control" name="stitle2"></textarea>
	</div>

	<div class="form-group">
		<label for="price">Precio</label> <small>Solo números, no incluir signos.</small>
		<input type="text" class="form-control" name="price">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="agregar_imagen" value="Agregar imagén">
	</div>

</form>
