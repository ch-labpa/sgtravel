<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Reservas pendientes
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small><br>
                            <small>Aquí puedes ver las reservas que han realizado los clientes.</small><br>
                            <small>Al terminar de trabajar en una reserva podemos eliminarla presionando &#10004; Listo (Ten cuidado cuando uses &#10004; Listo ya que TODA la información del cliente/reserva es eliminada.)</small>
                        </h3>
                                <table class="table table-bordered table-hover">
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

                                        $query = "SELECT *  FROM  reservavuelo ORDER BY id desc";
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
                                        <?php echo "<td><a href='reservas.php?eliminar=$reserva_id'>&#10004; Listo</a></td>"; ?>
                                    </tr>
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

                            $query_idd = $_GET['eliminar'];
                            // echo "$bus_idd";
                            $query = "DELETE FROM reservavuelo WHERE id = {$reserva_id} ";

                            echo "<p style=\"color: red; font-size: 17px;\"> <small>$_SESSION[s_firstname]</small> La reserva se ha marcado como &#10004; Listo y ha sido eliminada.</p>";

                            $delete_reserva = mysqli_query($connection,$query);
                            header("Location : reservas.php?eliminado");
                            if(!$delete_reserva) {
                                die("Query Failed" . mysqli_error($connection));
                            }
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
