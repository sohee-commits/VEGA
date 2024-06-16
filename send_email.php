<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = htmlspecialchars(trim($_POST["fullname"]));
  $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
  $inn = htmlspecialchars(trim($_POST["inn"]));
  $service = htmlspecialchars(trim($_POST["service"]));
  $where_from = htmlspecialchars(trim($_POST["where-from"]));
  $where_to = htmlspecialchars(trim($_POST["where-to"]));

  $mail = new PHPMailer(true);

  try {
    // Настройки сервера
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'zorro25915@gmail.com';
    $mail->Password = 'vfxe ryge svoi vgpt';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Установка кодировки UTF-8
    $mail->CharSet = 'UTF-8';

    // Режим отладки
    $mail->SMTPDebug = 2; // 0 = off (for production use), 1 = client messages, 2 = client and server messages
    $mail->Debugoutput = 'html';

    // Получатель
    $mail->setFrom('zorro25915@gmail.com', 'Mailer');
    $mail->addAddress('zorina.olga.73@mail.ru');

    // Содержание письма
    $mail->isHTML(false);
    $mail->Subject = 'Заявка на рассчет стоимости';
    $mail->Body = "Контактное лицо: $fullname\nТелефон: $phonenumber\nИНН: $inn\nУслуга: $service\nОткуда: $where_from\nКуда: $where_to";

    $mail->send();
    echo 'Email has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
} else {
  echo "Invalid request.";
}
