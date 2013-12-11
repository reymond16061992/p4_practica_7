<html>
  <head>
  
  
  </head>
  <body>
    
<?php
   
    $Codigo = $_POST['txtCodigo'];
    $Password = $_POST['txtPassword'];
if( ($Codigo == 100 && $Password == "udg") ||
     ($Codigo == 110 && $Password == "tonala")||
      ($Codigo==1 && $Password=="root")){
	session_start();
	$_SESSION["codigo"] = $Codigo;
	header("Location: http://localhost/Directorio.php");
      }else{
	header("Location: http://localhost/Sesion.php");
	}
?>
 
   	
</body>

</html>
