<?php
// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Enviar los datos al Web App de Google Apps Script
$url = 'https://script.google.com/macros/s/AKfycbz8sJfECnrzOEXHO7ZwQXa5d7YqKEhIlvCP8F_1hFM73OMIEF3Ys6syfjKwehDCBJv0Dw/exec';
$data = array('name' => $name, 'email' => $email, 'message' => $message);

$options = array(
  'http' => array(
    'method' => 'POST',
    'header' => 'Content-Type: application/x-www-form-urlencoded',
    'content' => http_build_query($data)
  )
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Lógica para manejar la respuesta del Web App si es necesario

// Redireccionar al usuario de vuelta a la página principal utilizando JavaScript
echo '<script>window.location.href = "index.html";</script>';
?>
