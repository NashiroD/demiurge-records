<?php

$conex = mysqli_connect("localhost","root","root","test");

if (isset($_POST['register'])) {
	
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Telefono']) >= 1 && strlen($_POST['Tipo']) >= 1 && strlen($_POST['Mensaje']) >= 1) {
	    $Nombre = trim($_POST['Nombre']); 
        $Correo = trim($_POST['Correo']);
        $Telefono = trim($_POST['Telefono']) ;
        $Tipo = trim($_POST['Tipo']);
        $Mensaje = trim($_POST['Mensaje']);
	    $consulta = "INSERT INTO contacto(Nombre, Correo, Telefono, Tipo, Mensaje) VALUES ('$Nombre','$Correo','$Telefono','$Tipo','$Mensaje')";
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Se a enviado el comunicado</h3>
           <?php
	    } else {
	    	echo $consulta ?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>