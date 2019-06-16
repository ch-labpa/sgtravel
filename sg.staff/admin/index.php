<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenid@
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
                        </h1>
                        <h4>En este sitio se pueden controlar todos los listados del sitio. Paquetes, destinos, destinos populares, nuevas reservas, etc...</h4>
                        <h4>Para iniciar navega desde el menu a tu mano izquierda <<<
                        <h4>Es importante cerrar la sesión cada vez que terminamos de trabajar en esta plataforma.</h4>
                        <h5>Si necesitas reportar un problema puedes hacerlo <a href="../ayuda.php">aquí</h5>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>
