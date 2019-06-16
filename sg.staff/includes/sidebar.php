            <div class="col-md-4">

                <!-- Login -->
                <?php

                    if (!isset($_SESSION['s_username'])) {
                        ?>
                            <div class="well">
                                <h4>Login</h4>
                                <form action="includes/login.php" method="post">


                                        <input name="username" type="text" class="form-control" placeholder="Usuario">
                                        <input name="password" type="password" class="form-control" placeholder="Contraseña" style="margin-top: 10px;">

                                        <button class="btn btn-primary" name="login" style="margin-left: 130px; margin-top: 10px;">Ingresar</button>

                                </form>
                                <!-- /.input-group -->
                            </div>

                <?php } ?>


                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>
