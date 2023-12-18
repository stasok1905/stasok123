<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Заказ товара</title>
</head>
<body>
<?php 
$name = ($_POST['firstname']);
$city = ($_POST['city']);
$email = ($_POST['email']);
$to = ($_POST['email']);
$subject = "Заказ";
$mess="Здравтвуйте, $name! Поздравляем ваc с приобретением нового товара! Доставка будет в город $city
Проверка данных в случае чего: ваша почта $to";
$from = "test@test.ru";
if(mail($to, $subject, $mess,'From:' .$from)) {
echo "Здравтвуйте, $name! <br>Поздравляем ваc с приобретением нового товара! <br>Доставка будет в город <br>$city
<br>Данные о заказе были отправлены на почту $email";
}
?>
</body>
</html>