<?php
header("Refresh: 5;  url=index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Заявка на бесплатное предоставление интересов</title>
</head>

<div id="content" style="margin-top: 100px;">

	<div class="container">

	<?php

if (empty($_POST)) {
	exit ("<p class='lead' style='text-align:center;'>Ошибка создания заявки. Возможно, введены не все данные. Вернитесь назад и введите данные еще раз</p>");	
} else {

$name = trim(strip_tags($_POST['name']));
$mail = trim(strip_tags($_POST['email']));
$phone = trim(strip_tags($_POST['phone']));


$to = 'khmao@bk.ru';
$from = 'khmao@bk.ru';
$subject = "=?utf-8?B?" . base64_encode("Заявка на бесплатное предоставление интересов {$_SERVER['HTTP_HOST']}") . "?=";
$message = "<p>Заявка на бесплатное предоставление интересов</p>
<h1>Данные заказчика:</h1>	
<ul style=\"margin:0; padding:0;\">
  	<li style=\"list-style:none;\"><b>Имя: </b>".$name."</li>
  	<li style=\"list-style:none;\"><b>E-mail: </b>".$mail."</li>
  	<li style=\"list-style:none;\"><b>Телефон: </b>".$phone."</li>
</ul>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From:"."=?utf-8?B?" . base64_encode("Правоведы") . "?=". "<$from>\r\n";


if(mail($to, $subject, $message, $headers)) {

	//header('Refresh:6; URL=http://www.nlsite.ru/');
	echo "<p style='color: dodgerblue; font-family: arial, helvetica, sans-serif; text-align:center;font-size: 25px; margin-top: 100px;'>Спасибо за сообщение! <br> Письмо успешно отправлено.";
} else {
	echo "<div class=\"alert alert-danger\" role=\"alert\">Письмо не отправлено</div>";
}

}

?>
</div>
</div>



</body>
</html>