<?php include"includes/header.php"; ?>

        <!-- Navigation -->
    <?php include"includes/navigation.php"; ?>

    <div class="container">
        <h1 class="page-header">
            Hola,
            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
        </h1>
        <h4>En este sitio se pueden controlar todos los listados del sitio. Paquetes, destinos, destinos populares, nuevas reservas, etc...</h4>

        <section class="section-cchome">
            <div class="grid">
                <div id="paquetes" class="item item--medium">
                    <div class="item__details">
                        <p>Paquetes</p>
                    </div>
                </div>
                <div id="reservas" class="item item--medium">
                    <div class="item__details">
                        <p>Reservas pend.</p>
                    </div>
                </div>
                <div id="galeria" class="item item--medium">
                    <div class="item__details">
                        <p>Galería</p>
                    </div>
                </div>
                <div id="destinos" class="item item--medium">
                    <div class="item__details">
                        <p>Destinos</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById("paquetes").setAttribute('onclick', 'location.href = "paquetes.php"');
        document.getElementById("reservas").setAttribute('onclick', 'location.href = "reservas.php"');
        document.getElementById("galeria").setAttribute('onclick', 'location.href = "galeria.php"');
        document.getElementById("destinos").setAttribute('onclick', 'location.href = "destinos.php"');
    </script>