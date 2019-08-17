<?php
if(!isset($_POST['formulario']))
{

$destinatario = "correo@bmabogados.com";
$asunto = $_POST['contacto'];
$carta = "De: ".$_POST['nombre']."<br>";
$carta .= "Correo: ".$_POST['correo']."<br>";
$carta .= "Teléfono: ".$_POST['telefono']."<br>";
$carta .= "Mensaje: ".$_POST['situacion'];

mail($destinatario, $asunto, $carta);
header('location:index.php?enviado=1');
}else{
	header('location:index.php?enviado=0');
}

?>