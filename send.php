<?php 
 
$nombre = $_POST['nombre']; 
$correo_electronico= $_POST['email']; 
$poblacion = $_POST['poblacion']; 
$sexo=$_POST['GrupoOpciones1']; 
$aficiones=$_POST['comentarios']; 
$radio= $_POST['GrupoOpciones2']; 
$opinion=$_POST['opinion']; 
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain";
$mensaje = "
	Este mensaje fue enviado por " . $nombre . " \r\n" 
	Su e-mail es: " . $mail . " \r\n"
	sexo" . $_POST['GrupoOpciones1'] . " \r\n"
	aficiones " . $_POST['comentarios'] . " \r\n"
	que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n"
	danos tu opinion".$_POST['opinion'] . " \r\n"
	Enviado el " . date('d/m/Y', time())
; 

$para = 'danymarina.tic.bc2@gmail.com; 
$asunto = 'lol'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 
