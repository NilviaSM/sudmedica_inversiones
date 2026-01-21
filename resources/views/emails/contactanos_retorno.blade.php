<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <img src="{{ $message->embed(public_path('img/email-header.jpeg'))}}">

    <p>
        Recibimos su consulta. La derivamos para entregarle una orientación clara y completa.
        Un/a especialista de nuestro equipo se pondrá en contacto con usted.
    </p>

    <p>Gracias por su mensaje.</p>

<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin:0; padding:0; border-collapse:collapse;">
  <tr>
    <td style="margin:0; padding:0;">
      <a href="https://ejemplo.com/00" style="display:block; margin:0; padding:0;">
        <img src="{{ $message->embed(public_path('img/email_footer_00.png'))}}" 
             width="100%" style="display:block; margin:0; padding:0; border:0; width:100%; height:auto;">
      </a>
    </td>
    <td style="margin:0; padding:0;">
      <a href="https://ejemplo.com/01" style="display:block; margin:0; padding:0;">
        <img src="{{ $message->embed(public_path('img/email_footer_01.png'))}}" 
             width="100%" style="display:block; margin:0; padding:0; border:0; width:100%; height:auto;">
      </a>
    </td>
    <td style="margin:0; padding:0;">
      <a href="https://ejemplo.com/02" style="display:block; margin:0; padding:0;">
        <img src="{{ $message->embed(public_path('img/email_footer_02.png'))}}" 
             width="100%" style="display:block; margin:0; padding:0; border:0; width:100%; height:auto;">
      </a>
    </td>
    <td style="margin:0; padding:0;">
      <a href="https://ejemplo.com/03" style="display:block; margin:0; padding:0;">
        <img src="{{ $message->embed(public_path('img/email_footer_03.png'))}}" 
             width="100%" style="display:block; margin:0; padding:0; border:0; width:100%; height:auto;">
      </a>
    </td>
    <td style="margin:0; padding:0;">
      <a href="https://ejemplo.com/04" style="display:block; margin:0; padding:0;">
        <img src="{{ $message->embed(public_path('img/email_footer_04.png'))}}" 
             width="100%" style="display:block; margin:0; padding:0; border:0; width:100%; height:auto;">
      </a>
    </td>
    <td style="margin:0; padding:0;">
      <a href="https://ejemplo.com/05" style="display:block; margin:0; padding:0;">
        <img src="{{ $message->embed(public_path('img/email_footer_05.png'))}}" 
             width="100%" style="display:block; margin:0; padding:0; border:0; width:100%; height:auto;">
      </a>
    </td>
  </tr>
</table>

</html>

