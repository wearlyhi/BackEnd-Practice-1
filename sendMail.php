<?php

$firstName = "Марко";
$lastName = "Бойко";
$group = "529";

$subject = "Практична робота №1";

$message =
    "Ім'я: " . $firstName . "\n" .
    "Прізвище: " . $lastName . "\n" .
    "Група: " . $group . "\n";

$headers = "From: markboiko2018@gmail.com";

if (mail(
    "markboiko2018@gmail.com",
    $subject,
    $message,
    $headers
)) {
    echo "Лист успішно відправлено!";
} else {
    echo "Помилка відправлення листа!";
}
?>