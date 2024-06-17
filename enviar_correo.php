<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    $destinatario = "pruebanakamasmovistar2024@hotmail.com";
    $asunto = "Nuevo formulario completado";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Apellidos: $apellidos\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Fecha de Nacimiento: $fechaNacimiento\n";

    // Enviar correo
    mail($destinatario, $asunto, $mensaje);

    // Redireccionar a una página de confirmación
    header("Location: confirmacion.html");
}
?>