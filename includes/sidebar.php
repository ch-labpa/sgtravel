<table>
  <h5>Top Destinos</h5>
  <?php
    try {
    $mysqli->select_db(DB);
    $result = $mysqli->query("SELECT `destinos`.`destino` AS `destino`, `destinos`.`precio` AS `precio` FROM `destinos` ORDER BY `id` ASC limit 3");
    if($mysqli->errno){
    throw new Exception('MySQL Error: '.$mysqli->error);
    }
    $i = 1;
    while($data = $result->fetch_array()){
    echo '<tr class="highlights">
    <td class="highlighthomePos">'.$i.'</td>
    <td class="highlighthomeInfo">
      <h5>'.$data['destino'].'</h5>
      <a href="masdestinos"><span>Desde</span> $'.$data['precio'].'</a>
    </td>
    </tr>';
    $i++;
    }
    } catch (Exception $e){
    echo '<div class="msg error">'.$e->getMessage().'</div>';
    }
  ?>
</table>
  <div class="vertical-menu">
    <a href="masdestinos"><i class="fa fa-plus"></i>Más destinos</a>
    <a href="reservar"><i class="fa fa-plus"></i>Reservar</a>
  </div>

<div class="terms-sidebar">
  <p>
    * Todos los precios públicados en el sitio son por persona. En caso de que sea espécificado esta condición puede variar.<br>
    * Impuestos y propinas pueden no estar incluidos. Consultar con uno de nuestros agentes para más información.<br>
    * Los abonos no son reembolsables.
  </p>
</div>
