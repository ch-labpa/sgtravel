<?php include"includes/header.php"; ?>
<?php include"includes/navigation.php"; ?>

<div class="container">
    <h4 style="margin-bottom: 5px;" class="page-header">
        Paquetes en SG
        <small><?php echo ucfirst($_SESSION['s_username']);   ?></small><br>
        <small>Aqui puedes encontrar los paquetes que aparecen en el sitio de SG. Selecciona una de la opiones en caso de que sea necesario. </small>
    </h4>
    <p style="font-size: 15px; margin: 0 0 5px 0;"><a href="paquetes.php?source=agregar_paquete">&#43; Nuevo paquete</a></p>
    <?php

    if (isset($_GET['source'])) {
        $source = $_GET['source'];
    }
    else {
        $source = "";
    }

    switch ($source) {
        case 'agregar_paquete':
            include "includes/agregar_paquete.php";
            break;

        case 'actualizar':
            include "includes/actualizar.php";
            break;

        default: ?>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paquete</th>
                    <th>Sale el</th>
                    <th>Incluye</th>
                    <th>Países</th>
                    <th>Visita</th>
                    <th>Precio</th>
                    <th>Notas</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    $query = "SELECT *  FROM  paquetes ORDER BY id ASC";
                    $select_posts = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_posts)) {
                        $paquete_id = $row['id'];
                        $nombrepaquete = $row['nombrepaquete'];
                        $fechasalida = $row['fechasalida'];
                        $incluye = $row['incluye'];
                        $paises = $row['paises'];
                        $visita = $row['visita'];
                        $precio = $row['precio'];
                        $disclosure = $row['disclosure'];

                    ?>
                <tr>
                    <td><?php echo $paquete_id ?></td>
                    <td><?php echo $nombrepaquete ?></td>
                    <td><?php echo $fechasalida ?></td>
                    <td><?php echo $incluye ?></td>
                    <td><?php echo $paises ?></td>
                    <td><?php echo $visita ?></td>
                    <td><?php echo $precio ?></td>
                    <td><?php echo $disclosure ?></td>
                    <?php echo "<td><a href='paquetes.php?source=actualizar&paquete_id=$paquete_id'><i class=\"fa fa-edit\"></i></a></td>"; ?>
                    <?php echo "<td><a href='paquetes.php?eliminar=$paquete_id'><i class=\"fa fa-trash\"></i></a></td>"; ?>
                </tr>
                <?php }?>
            </tbody>
            </table><?php
            break;
        }
        // if ($source = 'add_bus') {
        //        include "includes/add_bus.php";
        // }
        // elseif ($source = '') {
        //
        // }
        ?>


        <?php

        if (isset($_GET['eliminar'])) {

            $paquete_id = $_GET['eliminar'];
            // echo "$bus_idd";
            $query = "DELETE FROM paquetes WHERE id = {$paquete_id}";

            $eliminar_paquete = mysqli_query($connection,$query);
            if(!$eliminar_paquete) {
                die("Query Failed" . mysqli_error($eliminar_paquete));
            }
            header("Location: paquetes.php");
        }

        ?>


</div>
</div>
</div>
