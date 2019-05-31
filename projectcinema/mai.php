<?php
$name = "Пётр Петрович"; // необязательная переменная в качестве примера вставки в сообщение

$subject = "Тема сообщения"; //тема сообщения
$message = "Здравствуйте,".$name."!\n
Просто спросить как дела!\n
С уважением, Иван Иванович";//содержание сообщения
mail($email, $subject, $message, "From: yournick@yourmail.ru\nReply-To: bezruk.lana13@mail.ru\nContent-type:text/plain; Charset=utf-8\r\n"); //отправляем сообщение
?>