<?php

echo "<h1>Información de Citas Médicas</h1>";	

echo "<h3>Lista de citas</h3>";	
$db= new mysqli("localhost","root","","citasmedicas");

$sql="select * from citas";

$consulta=$db->query($sql);

if($consulta===FALSE)
{
	echo "<h2>Error." .$db->error."</h2>";
}

while($fila=$consulta->fetch_assoc())
{
	$link ="detalle.php?id=".$fila['id'];
	$paciente= "*Paciente: ".$fila['paciente']."  *Fecha de la cita: ".$fila['fechacita']."<br>";
	echo "<a href='$link'>$paciente</a><br>";
}

echo "<hr><a href='insert.php'>Agregar nueva cita médica</a>";
$db->close();
?>


