<?php include"db.php" ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SG Staff</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    if(isset($_SESSION['s_username'])) {
                        if ($_SESSION['s_role']=='admin') {
                            ?>
                            <li>
                                <a href="admin/index.php"><i class="fa fa-fw fa-child"></i>Admin</a>
                            </li>
                    }
                    <?php } } ?>

                    <?php
                        if (isset($_SESSION['s_username'])) {
                            # code...
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php

                                if(isset($_SESSION['s_username']))
                                echo ucfirst($_SESSION['s_username']); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a>
                                    </li>
                                </ul>
                            </li>

                    <?php    }
                    ?>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
