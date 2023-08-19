<?php
// Datos del correo
$destinatario = "destinatario@example.com";
$asunto = "Prueba de correo electrónico";
$mensaje = "Hola, esto es una prueba de envío de correo electrónico desde PHP.";

// Cabeceras del correo
$headers = "From: remitente@example.com" . "\r\n" .
    "Reply-To: remitente@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// Envío del correo
if (mail($destinatario, $asunto, $mensaje, $headers)) {
    echo "El correo ha sido enviado correctamente.";
} else {
    echo "Hubo un problema al enviar el correo.";
}
?>
