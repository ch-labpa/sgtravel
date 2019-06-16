<?php
$servername = "gator3205.hostgator.com";
$username = "hpssa_sgtravel";
$password = "sgtravel12";
$dbname = "hpssa_sgtravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO reservavuelo (nombre, apellido, telefono, email, origen, destino, fechas, adultos, ninos, clase, twoway, hotel, carro)
VALUES ('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["telefono"]."','".$_POST["email"]."','".$_POST["origen"]."','".$_POST["destino"]."','".$_POST["dates"]."','".$_POST["adultos"]."','".$_POST["ninos"]."','".$_POST["clase"]."','".$_POST["option1"]."','".$_POST["option2"]."','".$_POST["option3"]."')";

if ($conn->query($sql) === TRUE) {
    header('Location: tysg');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
