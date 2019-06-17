<?php include"includes/header.php"; ?>
<?php include"includes/navigation.php"; ?>

<div class="container">
    <h1 class="page-header">
        Lista del staff
        <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
    </h1>


    <?php

    if (isset($_GET['source'])) {
        $source = $_GET['source'];
    }
    else {
        $source = "";
    }

    switch ($source) {
        case 'update_user':
            include "includes/update_user.php";
            break;

        default: ?>
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Ext.</th>
                    <th>Role</th>

                </tr>
            </thead>

            <tbody>

                <?php

                    $query = "SELECT *  FROM  users";
                    $select_users = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_users)) {
                        $username = $row['username'];
                        $user_firstname = $row['user_firstname'];
                        $user_lastname = $row['user_lastname'];
                        $user_email = $row['user_email'];
                        $user_phoneno = $row['user_phoneno'];
                        $user_role = $row['user_role'];

                    ?>
                <tr>
                    <td><?php echo $username ?></td>
                    <td><?php echo $user_firstname ?></td>
                    <td><?php echo $user_lastname ?></td>
                    <td><?php echo $user_email ?></td>
                    <td><?php echo $user_phoneno ?></td>
                    <td><?php echo $user_role ?></td>

                </tr>
                <?php } ?>
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

 </div>