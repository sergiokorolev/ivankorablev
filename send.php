<?php
/* получатели */
$to = "betobidcom@gmail.com";

/* тема/subject */
$subject = "ЗАЯВКА С САЙТА KORABLEV";

/* сообщение */
$message = '
<html>
<head>
<title>ЗАЯВКА С САЙТА KORABLEV</title>
</head>
<body>
<table>
<tr>
<td>Телефон:</td>
<td>'.$_POST['phone'].'</td>
</tr>
</table>
</body>
</html>
';

/* Для отправки HTML-почты вы можете установить шапку Content-type. */
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

/* дополнительные шапки */
// $headers .= "From: LED <elka.rnd1@gmail.com>\r\n";
// $headers .= "Cc: elka.rnd1@gmail.com\r\n";
// $headers .= "Bcc: elka.rnd1@gmail.com\r\n";

/* и теперь отправим из */
mail($to, $subject, $message, $headers);
header("Location: thanks.php");
// header("Refresh:0; url=thanks.html");
exit;
?>