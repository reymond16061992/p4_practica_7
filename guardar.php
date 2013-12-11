<?php
require_once('contacto.php');

if($_POST['txtNombre']!="" && $_POST['txtTelefono']!=""){
$Nombre = $_POST['txtNombre'];
$Telefono = $_POST['txtTelefono'];
$Celular = $_POST['txtCelular'];
$Domicilio = $_POST['txtDomicilio'];
$Colonia = $_POST['txtColonia'];
$CP = $_POST['txtCP'];

$contacto = new Contacto();
$contacto->nombre = $Nombre;
$contacto->telefono = $Telefono;
$contacto->celular = $Celular;
$contacto->domicilio = $Domicilio;
$contacto->colonia = $Colonia;
$contacto->cp = $CP;
$contacto->nuevo();
echo "Agregado Correctamente"
?>

 <form method="post" action="Directorio.php">
      
<input type="submit" value="Volver Al Directorio" /></br>
<?php

}else{
	echo "Faltan Campos Obligatorios";
	
}
?>

<form method="post" action="nuevo.php">
      
<input type="submit" value="Volver a Nuevo" /></br>
