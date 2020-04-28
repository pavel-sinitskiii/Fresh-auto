<?php
$fio = $_POST['fio'];
$car = $_POST['car'];
$phone = $_POST['phone'];

$fio = htmlspecialchars($fio);
$car = htmlspecialchars($car);
$phone = htmlspecialchars($phone);

$fio = urldecode($fio);
$car = urldecode($car);
$phone = urldecode($phone);

$fio = trim($fio);
$car = trim($car);
$phone = trim($phone);

mail("...@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Марка машины: ".$car.". Телефон: ".$phone,"From: ...@gmail.com \r\n");

if (mail("...@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Марка машины: ".$car.". Телефон: ".$phone,"From: ...@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
