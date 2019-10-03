<?php
$ordername = $_POST['order-name'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$ordername = htmlspecialchars($ordername;
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$ordername = urldecode($ordername;
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$ordername = trim($ordername;
$name = trim($name);
$email = trim($email);
$message = trim($message);

mail("amakeit@list.ru", "Заявка с сайта", "Имя:".$name". E-mail: ".$email "Сообщение: ".$message "Cфера заказа: ".$ordernaeme \r\n");
?>
