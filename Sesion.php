<?php
session_start();
if(isset($_SESSION['codigo'])){
header("Location: http://localhost/Directorio.php");
}
?>
<html>
  <head>
<title>Practica 6: Sesion</title>
  </head>
  <body>
    <h2>Sesion</h2>
    <form method="post" action="Iniciar.php">
      
<label for="txtCodigo">Codigo </label><br/>
      <input type="text" name="txtCodigo" /> <p/>
      
<label for="txtCodigo">Password</label><br/>
      <input type="password" name="txtPassword" /> <p/>

<input type="submit" value="Iniciar" />
   
 </form>
  	
  </body>

</html>
