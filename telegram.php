<?php

/* https://api.telegram.org/bot1058710114:AAFrk3XHRPy-Yd2CVIgkvE8iQewxfZsgkuo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "1058710114:AAFrk3XHRPy-Yd2CVIgkvE8iQewxfZsgkuo";
$chat_id = "-381635827";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: +' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt.= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: Thanks.html');
} else {
  echo "Error";
}
