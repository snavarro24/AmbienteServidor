<h2>Registro de la información de cita médica</h2>
<form action="insert.php" method="post">
	Paciente: <input type="text" name="paciente"><br><br>
	Médico:  <input type="text" name="medico"><br><br>
	Fecha de cita: (AAA-MM-DD) <input type="text" name="fechacita"><br><br>
	Costo: <input type="text" name="costo"><br><br>
	Sucursal: <input type="text" name="sucursal"><br><br>
<button type="submit">Crear cita médica</button>
</form> 

<?php

$db= new mysqli("localhost","root","","citasmedicas");

if(isset($_POST['paciente']))
{
	$paciente=$_POST['paciente'];
	$medico=$_POST['medico'];
	$fechacita=$_POST['fechacita'];
	$costo=$_POST['costo'];
	$sucursal=$_POST['sucursal'];
	$consulta=$db->prepare("insert into citas(paciente,medico,fechacita,costo,sucursal) values(?,?,?,?,?)");
	
	$consulta->bind_param("issss",$paciente,$medico,$fechacita,$costo,$sucursal);
	$consulta->execute();
	
	if($consulta->affected_rows>0)
	{
		echo "<h2>Inserción exitosa</h2>";
		echo "<a href='index.php'>Regresar</a>";
	}else{
		echo "<h2>Falló al insertar</h2>";
		echo "<h3>".$db->error."</h3>";
		echo "<a href='index.php'>Regresar</a>";
	}
}
else echo "<a href='index.php'>Regresar</a>";


$db->close();
?>
