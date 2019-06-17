<?php include"includes/header.php"; ?>
<?php include"includes/navigation.php"; ?>

<div class="container">
    <h3 class="page-header">
        Reservas pendientes
        <small><?php echo ucfirst($_SESSION['s_username']);   ?></small><br>
        <small>Cuando termines de trabajar con una reserva basta presionar <i class="fa fa-check"></i> para eliminarla.</small>
    </h3>
    <?php if (isset($_GET['source'])) {
            $source = $_GET['source'];
        } else {
            $source = "";
        }

    switch ($source) {
        case 'agregar_reserva':
            include "includes/agregar_reserva.php";
            break;

        case 'actualizar':
            include "includes/actualizar.php";
            break;

        default: ?>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fechas</th>
                    <th>Clase</th>
                    <th>Ida y vuelta</th>
                    <th>Hotel</th>
                    <th>Carro</th>
                    <th>Adultos</th>
                    <th>Niños</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    $query = "SELECT *  FROM  reservavuelo order by ID desc";
                    $select_posts = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_posts)) {
                        $reserva_id = $row['id'];
                        $origen = $row['origen'];
                        $destino = $row['destino'];
                        $fechas = $row['fechas'];
                        $clase = $row['clase'];
                        $twoway = $row['twoway'];
                        $hotel = $row['hotel'];
                        $carro = $row['carro'];
                        $adultos = $row['adultos'];
                        $ninos = $row['ninos'];
                        $nombre = $row['nombre'];
                        $apellido = $row['apellido'];
                        $email = $row['email'];
                        $telefono = $row['telefono'];


                    ?>
                <tr>
                    <td><?php echo $origen ?></td>
                    <td><?php echo $destino ?></td>
                    <td><?php echo $fechas ?></td>
                    <td><?php echo $clase ?></td>
                    <td><?php echo $twoway ?></td>
                    <td><?php echo $hotel ?></td>
                    <td><?php echo $carro ?></td>
                    <td><?php echo $adultos ?></td>
                    <td><?php echo $ninos ?></td>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $apellido ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $telefono ?></td>
                    <?php echo "<td><a href='reservas.php?eliminar=$reserva_id'><i class=\"fa fa-check\"></i></a></td>"; ?>
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

    $reserva_id = $_GET['eliminar'];
    $query = "DELETE FROM reservavuelo WHERE id = {$reserva_id}";

    $eliminar_reserva = mysqli_query($connection,$query);
    if(!$eliminar_reserva) {
        die("Query Failed" . mysqli_error($eliminar_reserva));
    }
    header("Location: reservas.php");
    echo "Eliminada con éxito.";
}

    ?>

</div>
