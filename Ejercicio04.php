<?php
$diametro = $_POST['diametro'];
$pi = pi();

$circun = ($diametro*$pi);

$area = ($pi*$diametro);

echo "El resultado del area es :  $area y  la circunferencia del circulo es: $circun <br><br>";

echo "<a  href='Ejercicio4.html'>Regresar</a>";

?>