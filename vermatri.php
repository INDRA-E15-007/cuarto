<!DOCTYPE html>
<html>
<head>
	<title>visualizar</title>
</head>
<body bgcolor="black"><font color="violet">
<?php
$ma=$_REQUEST['Matricula'];
if ($con = @mysqli_connect('localhost','root','')) {
	echo " ";
if ($bas = @mysqli_select_db($con, 'cbtis')){
$sql="select * from contactos where Matricula = '$ma'"; 
if($eje= @mysqli_query($con, $sql)){
	echo "<br>";
	echo "<br><br><a href= 'menu.html'><font size=5 px>REGRESAR</font></a>";
	echo "<h1><font size=50 px>Alumos del CBTIS 218</font><h1>";
	echo "<table border=10><tr><th>Matrícula</th><th>Semestre</th><th>Grupo</th><th>Nombre del alumno</th><th>Nombre del tutor</th><th>Numero del alumno</th><th>Numero del tutor</th><th>Correo electrónico del alumno</th><th>Numero de emergencia</th><th>Domicilio</th><th>Tipo de sangre</th><th>Alergias</tr>";
while ($ren=mysqli_fetch_row($eje)) {
	echo "<tr><th>",$ren[0],"</th><th>",$ren[1],"</th><th>",$ren[2],"</th><th>",$ren[3],"</th><th>",$ren[4],"</th><th>",$ren[5],"</th><th>",$ren[6],"</th><th>",$ren[7],"</th><th>",$ren[8],"</th><th>",$ren[9],"</th><th>",$ren[10],"</th><th>",$ren[11],"</th><th>";
}
echo "</table>";
}else{
	echo "<br>Fallo en la consulta";
}
}
else{
	echo "<br>Base de datos no encontrada";
}
}else{
	echo "Servidor no encontrado";
}
?>
</body>
</html>
