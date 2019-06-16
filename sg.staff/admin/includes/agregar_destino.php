<?php
$uploads_dir = '/home2/hpssa/public_html/img/destinos';
	if (isset($_POST['agregar_destino'])) {

		$destino = $_POST['destino'];
		$pais = $_POST['pais'];
		$precio = $_POST['precio'];

		$img = $_FILES['img']['name'];
		$tmp_img = $_FILES['img']['tmp_name'];
		move_uploaded_file($tmp_img, "$uploads_dir/$img");

		if ($destino=="" || $precio=="") {
			echo "<p style=\"color: red; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> No se pudo agregar el destino. Intenta de nuevo.</small></a></p>";
		}
		else {
			$query = "INSERT INTO destinos(destino, pais, precio, img) VALUES('{$destino}', '{$pais}', '{$precio}', '{$img}')";

			echo "<p style=\"color: green; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> $nombrepaquete se ha agregado con éxito. <a href=\"destinos.php\"><small>Volver a Destinos</small></a></p>";

			$nuevo_destino = mysqli_query($connection,$query);

			if (!$nuevo_destino) {
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
		<label for="destino">Ciudad (Destino)</label>
		<input type="text" class="form-control" name="destino">
	</div>

	<div class="form-group">
		<label for="pais">Pais</label>
		<input  type="text" class="form-control" name="pais">
	</div>

	<div class="form-group">
		<label for="precio">Precio</label>
		<input  type="text" class="form-control" name="precio">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="agregar_destino" value="Agregar destino">
	</div>
</form>
