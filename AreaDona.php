<?php
echo "<h1>Area para cubrir de azucar una dona</h1>";

$R = 10;
$r = 3;

$area = pow(M_PI,2)*($R+$r)*($R+$r);


echo "El área es de :".number_format($area,2)."</br>";

?>