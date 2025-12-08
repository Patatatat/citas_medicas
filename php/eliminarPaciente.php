<?php

include("conexion.php");
$idPaciente = $_GET['id'];
$sql="DELETE FROM registro WHERE ID_Cita = '$idPaciente'";
$respuesta = Database::ejecutar_sql($sql);
?>
<a href="../templates/editar.php"><button>Regresar</button></a>
