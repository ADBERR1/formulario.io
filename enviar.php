<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Enviar correo electrónico</title>
  </head>
  <body>
    <h1>Enviar correo electrónico</h1>
    <form method="post" action="enviar.php">
      <label for="destinatario">Destinatario:</label>
      <input type="email" id="destinatario" name="destinatario"><br><br>
      <label for="asunto">Asunto:</label>
      <input type="text" id="asunto" name="asunto"><br><br>
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje"></textarea><br><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $destinatario = $_POST["destinatario"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];
  
  $cabecera = "From: oscarpitufo86@gmail.com";
  
  if (mail($destinatario, $asunto, $mensaje, $cabecera)) {
    echo "Correo electrónico enviado con éxito";
  } else {
    echo "Error al enviar el correo electrónico";
  }
}
?>
