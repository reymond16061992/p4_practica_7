<?php
session_start();
if(!isset($_SESSION['codigo'])){
	header("Location: http://localhost/Sesion.php");
}
session_destroy();
header("Location: http://localhost/Sesion.php");

?>
