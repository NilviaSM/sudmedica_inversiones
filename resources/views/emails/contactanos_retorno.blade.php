<!DOCTYPE html>
<html lang="es">
<body style="margin:0; padding:0; font-family: Arial, Helvetica, sans-serif;">

    <img src="{{ $message->embed(public_path('img/email-header.jpeg')) }}">

    <div style="max-width:600px; margin:0 auto; padding:20px;">
        <p style="font-size:14px; color:#333;">
            Recibimos su consulta. La derivamos para entregarle una orientación clara y completa.
            Un/a especialista de nuestro equipo se pondrá en contacto con usted.
        </p>

        <p style="font-size:14px; color:#333;">
            Gracias por su mensaje.
        </p>
    </div>

    <img src="{{ $message->embed(public_path('img/email-footer.jpeg')) }}">

</body>
</html>
