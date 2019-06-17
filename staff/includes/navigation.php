<header>
    <div class="container main-menu">
	    <div class="align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="../inicio"><img src="../img/logo.png" alt="SG Travel" title=""></a>
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
                <?php
                    if (isset($_SESSION['s_username'])) { ?>
                        <li><a href="controlcenter/index.php"><i class="fa fa-user"></i> Centro de control</a></li>
                        <li><a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesión</a></li>

                <?php } ?>
                        <li><a style="font-size=15px;" href="../inicio"><i class="fa fa-chevron-left"></i>&nbsp; Volver al sitio de SG</a></li>
				</ul>
			</nav>
	    </div>
    </div>  
</header>
        
