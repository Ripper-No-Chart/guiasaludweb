<?php
if (isset($_GET['enviar'])) {
    $nombre = "Nombre: ". $_GET['nombre'];
    $apellido = "Apellido: ". $_GET['apellido'];
    $tel = "Telefono: ". $_GET['tel'];
    $option = "Obra social o prepaga: ". $_GET['option'];
    $cadena = '<h3>'. $nombre. '<br>' .$apellido. '<br>' .$tel. '<br>' .$option. '</h3>';
    $mensaje = '
    <html>
    <head>
    </head>
    <body>
        <h1>¡Nuevo dato recibido desde la web!</h1>
        '.$cadena.'
    </body>
    </html>
    ';
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $mail = @mail("celpro57357.ssalud@gmail.com", "Enviado desde la pagina", $mensaje, $cabeceras);
    if ($mail) {
        echo '<script language="javascript">alert("Tu consulta se envió correctamente, se contactarán con vos a la brevedad");</script>'; 
    }
    else {
        echo '<script language="javascript">alert("Hubo un error en el envío de tu consulta, por favor reintentar");</script>'; 
    }
}
?>