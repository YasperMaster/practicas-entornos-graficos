Funcion mail()

bool mail ( string $to, string $subject, string $message, [, string $additional_headers [, string $additional_parameters ]])

<?php
$to="xx@xx.com";
$subject="Ejercicio 1";
$additional_headers='MIME-Version: 1.0' . "\r\n";
$additional_headers='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message="
<html>
<head>
<title>Ejemplo email HTML con php</title>
</head>
<p>Este email contiene etiquetas HTML!</p>
</html>
";
if(mail($to, $subject, $message, $additional_headers)) {
    echo "Email enviado correctamente";
} else{
    echo "Ocurrió un error";
}
?>