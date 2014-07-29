<?php
$sendgrid = new SendGrid('azure_f3f37998d2f5a64574cdaeb953fc8c5f@azure.com', '13iBnTLjSIQ3X1F');
$mail = new SendGridMail();
$mail->addTo('mriveras@gmail.com')->
       setFrom('c20024070@hotmail.com')->
       setSubject('Subject goes here')->
       setText('Hello World!')->
       setHtml('<strong>Hello World!</strong>');
$sendgrid->smtp->send($mail);
?>
<html>
<head></head>
<body>hola prueba 10</body>
</html>