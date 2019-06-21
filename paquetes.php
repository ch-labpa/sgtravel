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

      function gtag() {
          dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-120498835-1');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/fav.ico">
  <meta name="author" content="SG Travel Group">
  <meta name="description" content="SG es una agencia de viajes con más de 30 años de experiencia ofrecemos las mejores ofertas de viajes, hoteles , alquiler de autos,
excursiones, paquetes, tramites de Visas, cruceros. Somos tu mejor opción para organizar el viaje soñado.">
  <meta name="keywords" content="paquetes, sg, sgtravel, sgtravel group, sg group, agencia sg, sg agencia, viaje, travel, agencia de viajes, agency, viajes, cruceros, vuelos, carros">
  <meta charset="UTF-8">
  <title>Paquetes | SG Travel Group</title>

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
  <!-- #header -->

  <section class="destinations-area">
      <div class="container">
          <div class="mains">
              <div class="mains-page">
                  <div class="mains-header">
                      <h1>Paquetes del momento</h1>
                      <h3>Saliendo desde Panamá</h3>
                  </div>
                  <div class="paquetes">
                    <div class="card-columns">
                      <?php
                          try {
                          $mysqli->select_db(DB);
                          $result = $mysqli->query("SELECT `paquetes`.`nombrepaquete` AS `nombrepaquete`, `paquetes`.`paises` AS `paises`, `paquetes`.`fechasalida` AS `fechasalida`, `paquetes`.`visita` AS `visita`, `paquetes`.`incluye` AS `incluye`,
                            `paquetes`.`precio` AS `precio`, `paquetes`.`img` AS `img`, `disclosure` AS `disclosure` FROM `paquetes` ORDER BY `id` ASC");
                          if($mysqli->errno){
                            throw new Exception('MySQL Error: '.$mysqli->error);
                          }
                          $i = 1;
                          while($data = $result->fetch_array()){
                          echo '
                          <div style="order: '.$i.';" class="card">
                            <img class="card-img-top" src="img/packages/'.$data['img'].'" alt="Room image description">
                            <div class="card-body">
                              <div class="paquetes_title"><h2>'.$data['nombrepaquete'].'</h2></div>
                              <div class="paquetes_text">
                                <p>'.$data['fechasalida'].'</p>
                              </div>
                              <div class="paquetes_list">
                                <ul>
                                  <li class="d-flex flex-row align-items-center">
                                    <i class="fas fa-info-circle"></i>
                                    <span>'.$data['incluye'].'</span>
                                  </li>
                                  <li class="d-flex flex-row align-items-center">
                                    <i class="fas fa-location-arrow"></i>
                                    <span class="paises">'.$data['visita'].'</span>
                                  </li>
                                </ul>
                              </div>
                              <div class="paquetes_price">$'.$data['precio'].'/<span>persona</span></div>
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
          </div>

          <div class="mains-sidebar">
              <?php include('includes/sidebar.php'); ?>
          </div>

        </div>
      </div>
      <!-- end container -->

  </section>

  <!-- Start home-about Area -->
  <section class="home-about-area" style="background: #252525;">
      <?php include('includes/reservarad.php'); ?>
  </section>
  <!-- End home-about Area -->
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
