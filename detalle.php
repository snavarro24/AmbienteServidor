<h1> Detalles de la cita médica </h1>
<?php

$db= new mysqli("localhost","root","","citasmedicas");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$consulta=$db->prepare("select * from citas where id=?");
	
	$consulta->bind_param("i",$id);
	$consulta->execute();
	$filas =$consulta->get_result();
	
	$miFila = $filas->fetch_assoc();
	
	echo "<h2>".$miFila['paciente']."</h2>";
	echo "Medico: ".$miFila['medico']." </br>";
	echo "Fecha de cita: ".$miFila['fechacita']." </br>";	
	echo "Costo: ".$miFila['costo']." </br>";
	echo "Sucursal: ".$miFila['sucursal']." </br>";
	echo "<hr><a href='index.php'>Regresar</a>";
	
}
else echo "<hr><a href='index.php'>Regresar</a>";
?>