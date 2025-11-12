<?php 
include("conexion.php"); //conexion de proceso.php a la base de datos
$nomPaciente = $_POST['paciente'];
$nomMedico = $_POST['medico'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora']; #Variables del index.html
$especialidad = $_POST['profecion'];

//conexion en base de datos, formulario html y proceso
if ($nomPaciente =="" || $nomMedico == "" || $fecha == "" || $hora == "" || $especialidad == "") {
	echo "Faltan llenar campos";
}
else{
	$sql = 'INSERT INTO usuario(nombreUsuario, edadUsuario, correoUsuario, passUsuario) VALUES ("'.$nomPaciente.'","'.$nomMedico.'","'.$fecha.'","'.$hora.'","'.$especialidad.'")';

	//Ejecutar SQL de insercion a la BD
	$resultado = DataBase::ejecutar_sql($sql);

	echo "Respuesta del servidor:".$resultado;
}
