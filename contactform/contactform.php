<?php 

$para = 'taboadaobhuaura@gmail.com'; 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];


$header = 'Eviado desde  de mi web tabaoada';

$mensajecompleto = $mensaje . "\n Atentamente" . $nombre;

mail($para,$asunto,$mensajecompleto,$header);
echo "<script>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000);</script>";


 ?>