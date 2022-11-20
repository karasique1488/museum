<?php 
// Извлекаем данные из формы
$name = htmlspecialchars ($_POST['name']);
$email = htmlspecialchars ($_POST['email']);
$tel = htmlspecialchars ($_POST['tel']);
$message = htmlspecialchars ($_POST['message']);

// Формируем заголовки письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8 \r\n";
$headers .= "From: jakha <farhadyunusalievv@gmail.com.info>\r\n";
$headers .= "Reply-To: farhadyunusalievv@gmail.com.info\r\n";

// Составл¤ем текст письма админу
$message = "<p>Привет админ, новая заявка</p>
<p>Имя: $name</p>
<p>Тел: $tel</p>
<p>E-mail: $email</p>
<p>Сообщение: $message</p>";

// отсылаем письмо админу
mail( "ВАШ_ЕМЕЙЛ", "тема письма", $message, $headers );

// Отправл¤ем пользователя на страницу "Спасибо"
header( "Location: thank.html");
?>