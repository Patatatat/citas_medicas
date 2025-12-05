<?php 
include("conexion.php"); //conexion de proceso.php a la base de datos
$email = $_POST['email'];
$contra = $_POST['contra'];
if($email != "" || $contra != ""){
  $sql = "SELECT * FROM usuario WHERE Correo = '$email' AND Contrasena = '$contra'";
  $resultado = Database::get_rows($sql);
  $verificacion = mysqli_fetch_assoc($resultado);
  if(isset($verificacion["Correo"]) == $email && isset($verificacion["Contrasena"]) == $contra) {
    ?>
    <a href="../templates/menu.php"><button>Ingresar</button></a>
  <?php }  
  else{ ?>
  <a href="../templates/index.php"><button>Regresar</button></a>
<?php }
}
else{ ?>
  <a href="../templates/index.php"><button>Regresar</button></a>
<?php }
?>