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
  <meta name="keywords" content="sg, sgtravel, sgtravel group, sg group, agencia sg, sg agencia, viaje, travel, agencia de viajes, agency, viajes, cruceros, vuelos, carros">
  <meta charset="UTF-8">
  <title>SG Travel Group</title>

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
  <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
  <script>
  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#000"
      },
      "button": {
        "background": "#f1d600"
      }
    },
    "theme": "edgeless",
    "content": {
      "message": "Utilizamos cookies propias y de terceros para mejorar nuestros servicios.",
      "dismiss": "Acepto",
      "link": null
    }
  })});
  </script>
</head>
<body>
	<header id="header">
		<?php include('includes/header.php'); ?>
	</header>

	<!-- start banner Area -->
<div class="container">
<section class="hot-deal-area">
<div class="row justify-content-center">
<div class="active-hot-deal-carusel">
  <?php
	try {
	$mysqli->select_db(DB);
	$result = $mysqli->query("SELECT `slideshow`.`title` AS `title`, `slideshow`.`stitle1` AS `stitle1`, `slideshow`.`stitle2` AS `stitle2`, `slideshow`.`price` AS `price`, `slideshow`.`img` AS `img` FROM `slideshow` ORDER BY `id` ASC");
	if($mysqli->errno){
		throw new Exception('Estamos actualizando nuestros paquetes! '.$mysqli->error);
	}
	$i = 1;
	while($data = $result->fetch_array()){
	echo '<div class="single-carusel">
		<div class="thumb relative">
			<div class="overlay overlay-bg"></div>
			<img class="owl-lazy img-fluid" data-src="img/slideshow/'.$data['img'].'" alt="">
		</div>
		<div class="details">
			<h3>'.$data['title'].'</h3>
			<h4>
				'.$data['stitle1'].'
			</h4>
      <p>'.$data['stitle2'].'</p>
      <a href="reservar" class="price-btn"> <span>Desde</span>$'.$data['price'].'</a>
      <a class="button primary-btn" href="reservar">Reservar ahora</a>
		</div>
	</div>';
		$i++;
	}
} catch (Exception $e){
	echo '<div class="msg error">'.$e->getMessage().'</div>';
}

?>
</div>
  </div>
</section>
</div>

	<!-- End banner Area -->
	<section class="canjeapuntos">
	<div class="container">
		<div class="leftpuntos">
			<h1>Canjea tus puntos.</h1>
            <p>Paga tus boletos con los puntos que has acúmulado.</p>
		</div>
		<div class="rightpuntos">
			<ul>
				<li><img src="img/icons/baccredomatic.png"></li>
				<li><h1 class="mobile">|</h1></li>
				<li><img src="img/icons/stgeorgesbank.png"></li>
			</ul>
		</div>
	</div>
	</section>
  <section class="home-about-area" style="background: linear-gradient(-300deg, #c92284, #cd201d);">
  <?php include('includes/reservarad.php'); ?>
  </section>
	<!-- Start popular-destination Area -->
	<section class="popular-destination-area">
	<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="menu-content col-lg-8">
			<div class="title text-center">
				<h1>Destinos Populares</h1>
				<p>Saliendo desde Panamá</p>
			</div>
		</div>
	</div>
	<div class="single-destination-active">
			<?php
	try {
	$mysqli->select_db(DB);
	$result = $mysqli->query("SELECT `destinos`.`destino` AS `destino`, `destinos`.`precio` AS `precio`, `destinos`.`img` AS `img` FROM `destinos` ORDER BY `id` ASC");
	if($mysqli->errno){
		throw new Exception('Estamos actualizando nuestros destinos! '.$mysqli->error);
	}
	$i = 1;
	while($data = $result->fetch_array()){
	echo '<div class="single-destination">
				<div class="thumb relative">
					<img class="img-fluid1" src="img/destinos/'.$data['img'].'" alt="">
				</div>
				<div class="desc">
					<h4>'.$data['destino'].'</h4>
					<a href="masdestinos" class="price-btn"><span>Desde</span> $'.$data['precio'].' <i class="fas fa-chevron-right"></i></a>
				</div>
		</div>';
		$i++;
	}
} catch (Exception $e){
	echo '<div class="msg error">'.$e->getMessage().'</div>';
}

?>
      </div>
	</div>
	</section>
	<!-- End popular-destination Area -->
	<!-- Start testimonial Area -->
	<section class="testimonial-area">
	<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-8">
			<div class="title text-center">
				<h1>Síguenos</h1>
				<a href="https://wwww.facebook.com/viajasiempremasbarato"><i class="fab fa-facebook"></i></a>
				<a href="https://wwww.instagram.com/sgtravelpanama"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
		<div class="active-testimonial">
			<div class="single-testimonial item d-flex flex-row">
				<div class="desc">
					<p>
						"Buenisima agencia la atención y dedicación en el tour a Tierra Santa es fenomenal."
					</p>
					<h4>Roger Trujillo</h4>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>
				</div>
			</div>
			<div class="single-testimonial item d-flex flex-row">
				<div class="desc">
					<p>
						"Si sus pasajes quiere comprar , a la agencia de viajes S&G travel group debe llamar"
					</p>
					<h4>M Tulio Ulloa Calix</h4>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
			</div>
			<div class="single-testimonial item d-flex flex-row">
				<div class="desc">
					<p>
						"Excelente la atención y los precios"
					</p>
					<h4>Edilberto Tapiero</h4>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- End testimonial Area -->

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
	<script src="js/jquery-ui.js"></script>
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
