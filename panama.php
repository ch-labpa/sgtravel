<?php
date_default_timezone_set('America/Panama');
setlocale(LC_ALL, 'en_US');
define('DB', 'hpssa_sgtravel');
$mysqli = new mysqli('gator3205.hostgator.com', 'hpssa_sgtravel', 'sgtravel12');
$mysqli ->set_charset('utf8');
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120498835-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-120498835-1');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/fav.ico">
  <meta name="author" content="SG Travel Group">
  <meta name="description" content="SG es una agencia de viajes con más de 30 años de experiencia ofrecemos las mejores ofertas de viajes, hoteles , alquiler de autos,
excursiones, paquetes, tramites de Visas, cruceros. Somos tu mejor opción para organizar el viaje soñado.">
  <meta name="keywords" content="tips, sg, sgtravel, sgtravel group, sg group, agencia sg, sg agencia, viaje, travel, agencia de viajes, agency, viajes, cruceros, vuelos, carros">
  <meta charset="UTF-8">
  <title>Panamá | SG Travel Group</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/jquery-ui.css">

  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header id="header">
  	<?php include('includes/header.php'); ?>
  </header>
<div class="message container">
  Para poder disfrutar de la experiencia completa deberás descargar la ultima versión de tu navegador de internet. <span>El sitio de SG funciona mejor con Google Chrome y Safari.</span> 😅
</div>

<section class="section-enpanama">
<div class="container">
  <div class="mains">
  <div class="mains-page">
    <div class="mains-header">
  	<h1>Panamá</h1>
      <h3>Las maravillas de tu país</h3>
    </div>
  <div class="grid">
    <div class="item item--full">
      <div class="item__details">
        <p>La ciudad</p>
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
        <p>La ciudad</p>
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
      <p>La ciudad</p>
      </div>
    </div>
    <div class="item item--large">
      <div class="item__details">
        <p>La ciudad</p>
      </div>
    </div>
    <div class="item item--medium">
      <div class="item__details">
        <p>La ciudad</p>
      </div>
    </div>
    <div class="item item--medium">
      <div class="item__details">
        <p>La ciudad</p>
      </div>
    </div>
  </div>
  </div>
  <div class="mains-sidebar">
      <?php include('includes/sidebar.php'); ?>
  </div>
  </div>
  </div>
</section>
<!-- start footer Area -->
<footer class="footer-area">
	<div class="container">
		<?php include('includes/footer.php'); ?>
	</div>
</footer>
<!-- End footer Area -->

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>