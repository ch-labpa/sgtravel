<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h4 style="margin-bottom: 5px;" class="page-header">
                            Galeria inicio
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small><br>
                            <small>Aquí puedes modificar y ver las imágenes de la galería en la página de inicio de SG.</small>
                        </h4>
                        <p style="font-size: 15px; margin: 0 0 5px 0;"><a href="galeria.php?source=agregar_galeria">&#43; Nueva imágen</a></p>
                        <?php

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'agregar_galeria':
                                include "includes/agregar_imagen.php";
                                break;

                            case 'actualizar-galeria':
                                include "includes/actualizar_galeria.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>img</th>
                                        <th>Título</th>
                                        <th>Subtítulo 1</th>
                                        <th>Subtítulo 2</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                        $query = "SELECT *  FROM  slideshow ORDER BY id ASC";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $galeria_id = $row['id'];
                                            $img = $row['img'];
                                            $titulo = $row['title'];
                                            $subtitulo1 = $row['stitle1'];
                                            $subtitulo2 = $row['stitle2'];
                                            $precio = $row['price'];

                                     ?>
                                    <tr>
                                        <td><?php echo $galeria_id ?></td>
                                        <td><?php echo '<img style="height: 100px;" src="../../img/slideshow/'.$img.'">' ?></td>
                                        <td><?php echo $titulo ?></td>
                                        <td><?php echo $subtitulo1 ?></td>
                                        <td><?php echo $subtitulo2 ?></td>
                                        <td><?php echo $precio ?></td>
                                        <?php echo "<td><a href='galeria.php?source=actualizar-galeria&galeria_id=$galeria_id'>Actualizar/Cambiar</a></td>"; ?>
                                        <?php echo "<td><a href='galeria.php?eliminar=$galeria_id'><small>Eliminar</small></a></td>"; ?>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                </table><?php
                                break;
                        }

                        ?>


                        <?php

                        if (isset($_GET['eliminar'])) {

                            $galeria_id = $_GET['eliminar'];
                            // echo "$bus_idd";
                            $query = "DELETE FROM slideshow WHERE id = {$galeria_id} ";

                            $eliminar_galeria = mysqli_query($connection,$query);
                            if(!$eliminar_galeria) {
                                die("Query Failed" . mysqli_error($eliminar_galeria));
                            }
                            header("Location: galeria.php");
                        }

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>
