<?php
  include("sesion.php");
  ?>
  Bienvenido:
  <?php echo $_SESSION["usuario"];?>
  Estas en una pagina segura con sesiones en PHP.
  <br><br>
  <a href="archivo-protegido2.php">Ir a otra pagina segura</a>
  <br><br>
  <a href="salir.php">Salir</a>