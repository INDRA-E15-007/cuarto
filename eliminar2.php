<!DOCTYPE html>
<html>
<head>
	<title>eliminar</title>
	 <link rel="stylesheet" type="text/css" href="css/gen.css">
</head>
<body>
<?php
$conexion = mysqli_connect("localhost","root","","cbtis") or die ("problemas con la conexion");
$nom=$_REQUEST['Nombre'];

$sql = "DELETE FROM contactos WHERE Nombre_del_alumno = '$nom'";

if (mysqli_query($conexion, $sql)) {
	echo "Registro borrado exitosamente";
}else{
	echo "Error al borrar el registro" .mysqli_error($conexion);
}
mysqli_close($conexion);
echo "<br><br><a href=' menu.html'>Inicio</a>";
?>
</body>
</html>