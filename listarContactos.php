<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
        echo '<tr>';
        echo '<th>ID</th>';
	echo '<th>Nombre</th>';
	echo '<th>Tel&eacute;fono</th>';
	echo '<th>Celular</th>';
	echo '<th>Direcci&oacute;n</th>';
        echo '<th>Colonia</th>';
	echo '<th>CP</th>';
	echo '<th>OPCIONES</th>';
               
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['id']. '</td>';
		    echo '<td>'.$contacto['nombre'].'</td>';
                    echo '<td>'.$contacto['telefono'].'</td>';
                    echo '<td>'.$contacto['celular'].'</td>';
                    echo '<td>'.$contacto['direccion'].'</td>';
                    echo '<td>'.$contacto['colonia'].'</td>';
                    echo '<td>'.$contacto['cp'].'</td>';
	    	    echo '<td><a href="eliminar.php?id='.$contacto['id'].'"> Eliminar</a><a href=" editar.php?id='.$contacto['id'].'"> Editar</a><a href="ver.php?id='.$contacto['id'].'"> Ver</a></td>';
                    
                    
                echo '</tr>';
            }
        echo '<table>';
    }
} 
?>
