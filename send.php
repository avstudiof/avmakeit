<?php
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $fio = htmlspecialchars($fio);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);
        $fio = urldecode($fio);
        $email = urldecode($email);
        $message = urldecode($message);
        $fio = trim($fio);
        $email = trim($email);
        $message  = trim($message);
        if (mail("amakeit@list.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email." Сообщение: ".$message ,"From: info@avmakeit.ru \r\n")){
        echo "Сообщение успешно отправлено";
        } else {
        echo "При отправке сообщения возникли ошибки";
        }
?>
