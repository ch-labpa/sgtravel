<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                    if (isset($_POST['submit_query'])) {
                        $user_name = ucfirst($_SESSION['s_username']) ;
                        if($user_name == "") {
                            $user_name = "(unknown)";
                        }
                        $user_email = $_POST['user'];
                        $user_query = $_POST['user_query'];

                        $query = "INSERT INTO query(user, query_user) VALUES ('$user', '$user_query')";

                        $query_insert = mysqli_query($connection, $query);
                        if(!$query_insert) {
                            die("Query Failed" . mysqli_error($connection));
                        }
                    }

                ?>



                <!-- Comments Form -->
                <div class="well">
                    <h4>Aqui puedes reportar problemas/sugerencias con la página</h4>
                    <form action="reservas.php?newquery" method="post" role="form">

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input disabled type="text" value="<?php echo ucfirst($_SESSION['s_username']);   ?>" class="form-control" name="user"></textarea>
                        </div>

                        <div class="form-group">
                            <label> Reportar un problema</label>
                            <textarea class="form-control" rows="3" name="user_query"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit_query">Enviar</button>
                    </form>
                </div>

                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"; ?>
