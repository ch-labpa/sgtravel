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
                            Destinos
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small><br>
                            <small>Aquí puedes modificar los destinos.</small>
                        </h4>
                        <p style="font-size: 15px; margin: 0 0 5px 0;"><a href="destinos.php?source=agregar_destino">&#43; Nuevo destino</a></p>
                        <?php

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'agregar_destino':
                                include "includes/agregar_destino.php";
                                break;

                            case 'actualizar-destino':
                                include "includes/actualizar_destino.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>img</th>
                                        <th>Ciudad (Destino)</th>
                                        <th>País</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                        $query = "SELECT *  FROM  destinos ORDER BY id ASC";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $destinos_id = $row['id'];
                                            $img = $row['img'];
                                            $destino = $row['destino'];
                                            $pais = $row['pais'];
                                            $precio = $row['precio'];

                                     ?>
                                    <tr>
                                        <td><?php echo $destinos_id ?></td>
                                        <td><?php echo '<img style="height: 100px;" src="../../img/destinos/'.$img.'">' ?></td>
                                        <td><?php echo $destino ?></td>
                                        <td><?php echo $pais ?></td>
                                        <td><?php echo $precio ?></td>
                                        <?php echo "<td><a href='destinos.php?source=actualizar-destino&destinos_id=$destinos_id'>Actualizar/Cambiar</a></td>"; ?>
                                        <?php echo "<td><a href='destinos.php?eliminar=$destinos_id'><small>Eliminar</small></a></td>"; ?>
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
                            $query = "DELETE FROM destinos WHERE id = {$destinos_id} ";

                            $eliminar_destino = mysqli_query($connection,$query);
                            if(!$eliminar_destino) {
                                die("Query Failed" . mysqli_error($eliminar_destino));
                            }
                            header("Location: destinos.php");
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
