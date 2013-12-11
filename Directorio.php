<?php
session_start();
if(!isset($_SESSION['codigo'])){
	header("Location: http://localhost/Sesion.php");
}
require_once('contacto.php');
require_once('listarContactos.php');

?>


<html>
  <head>
  

  </head>
  <body>

<a href="Cerrar.php"><h4>Cerrar Sesion</h4></a>
   <form method="post" action="Nuevo.php">
      
<input type="submit" value="Nuevo" />
<h1>Mostrar los elementos</h1>
        <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
   
 </form>	
</body>

</html>
