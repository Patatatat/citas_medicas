<?php
$idPaciente = $_GET['id'];
?>

<h2>¿Seguro que quiere eliminar este registro?</h2>
<a href="eliminarPaciente.php?id=<?php echo $idPaciente;?>"><button>Si</button></a>
<a href="../templates/editar.php"><button>No</button></a>