<?php

$connection = mysqli_connect("gator3205.hostgator.com",'hpssa_sgtravel','sgtravel12','hpssa_sgtravel');
$connection->set_charset("utf8");

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>
