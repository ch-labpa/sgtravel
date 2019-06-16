<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include"includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container main">
  <div class="login-container">
    <?php
      if (!isset($_SESSION['s_username'])) { ?>
        <h3>Aquí puedes ingresar</h3>
        <p>El centro de control SG te permite manejar todos los aspectos del sitio en un solo lugar. Inicia sesión aquí abajo.</p>
        <div class="login-form">
            <form action="includes/login.php" method="post">
              <input name="username" type="text" class="form-control" placeholder="Usuario">
              <input name="password" type="password" class="form-control" placeholder="Contraseña">

              <button class="btn btn-primary" name="login" style="margin-left: 130px; margin-top: 10px;">Ingresar</button>
            </form>
        </div>
    <?php } else { ?>
      <meta http-equiv="refresh" content="0;url=controlcenter/index.php">
    <?php } ?>
  </div>
</div>

<!-- <?php include "includes/navigation.php"; ?> -->
