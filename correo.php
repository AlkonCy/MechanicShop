<?php
$destionario = 'teste@mechanichop.com';
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];
 
$header = "Formulario de contacto";
$mensajeCompleto = $mensaje . "\nContacto" . $nombre . $apellido;

mail($destionario, $nombre, $apellido, $email, $mensaje, $header);
echo "<script>"('correo enviado exitosamente')"</script>";
echo "<script>setTimeout("\"location.href='index.php'\",1000)</script>";
?>