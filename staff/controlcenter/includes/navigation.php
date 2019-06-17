<header>
    <div class="container main-menu">
	    <div class="align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="./"><img src="../../img/logo.png" alt="SG Travel" title=""> Centro de Control</a>
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
                <?php
                    if (isset($_SESSION['s_username'])) { ?>
						<li class="controlcenter-navmenu"><a href="paquetes.php"> Paquetes</a></li>
						<li class="controlcenter-navmenu"><a href="reservas.php"> Reservas pendientes</a></li>
						<li class="controlcenter-navmenu"><a href="galeria.php"> Galería</a></li>
						<li class="controlcenter-navmenu"><a href="destinos.php"> Destinos</a></li>
						<li class="controlcenter-navmenu"> | </li>
                        <li><a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a></li>

				<?php } else { ?>
					<meta http-equiv="refresh" content="0;url=../index.php">
				<?php } ?>
                        <li><a href="../inicio"><i class="fa fa-chevron-left"></i>&nbsp; Volver al sitio de SG</a></li>
				</ul>
			</nav>
	    </div>
    </div>  
</header>
        
