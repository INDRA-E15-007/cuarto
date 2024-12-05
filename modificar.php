<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/gen.css">
</head>
<body> 
<?php
$conexion = mysqli_connect("localhost", "root", "", "cbtis") or die("problemas de conexion");

$Matricula=$_POST['Matricula'];
$Semestre=$_POST['Semestre'];
$Grupo=$_POST['Grupo'];
$Nombre_del_alumno=$_POST['Nombre_del_alumno']; 
$Nombre_del_tutor=$_POST[ 'Nombre_del_tutor'];
$Telefono_del_alumno=$_POST['Telefono_del_alumno'];
$Telefono_del_tutor=$_POST['Telefono_del_tutor'];
$Correo_electronico=$_POST['Correo_electronico'];
$Numero_de_emergencia=$_POST['Numero_de_emergencia']; 
$Domicilio=$_POST['Domicilio'];
$Tipo_de_sangre=$_POST['Tipo_de_sangre'];
$Alergias=$_POST['Alergias'];

$sql="UPDATE contactos SET Semestre='$Semestre', Grupo= '$Grupo',Nombre_del_alumno='$Nombre_del_alumno', Nombre_del_tutor= '$Nombre_del_tutor', Telefono_del_alumno='$Telefono_del_alumno', Telefono_del_tutor='$Telefono_del_tutor', Correo_electronico='$Correo_electronico', Domicilio='$Domicilio', Numero_de_emergencia='$Numero_de_emergencia', Tipo_de_sangre='$Tipo_de_sangre',Alergias='$Alergias' WHERE Matricula='$Matricula'";

if (mysqli_query($conexion, $sql)) {
echo "Se ha conecto el formulario con la base de datos <br>";
 echo "Modificacion Exitosa";
echo "<br><br><a href='menu.html'>Inicio</a>";
echo "<br>";
} else{
 echo "Error al modificar el registro: ", mysqli_error($conexion);
}
 mysqli_close($conexion);
 echo "<br><br><a href='modificar.html'>Regresar</a>";
?>
</body>
</html>
