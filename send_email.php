<?php
if (isset($_POST['submit'])) {
  $to = "mintopiate@gmail.com";
  $subject = "Заявка на рассчет стоимости";

  $fullname = $_POST['fullname'];
  $phonenumber = $_POST['phonenumber'];
  $inn = $_POST['inn'];
  $service = $_POST['service'];
  $where_from = $_POST['where-from'];
  $where_to = $_POST['where-to'];

  $message = "Данные заявки:\n\n";
  $message .= "Контактное лицо: $fullname\n";
  $message .= "Номер телефона: $phonenumber\n";
  $message .= "ИНН: $inn\n";
  $message .= "Услуга: $service\n";
  $message .= "Откуда: $where_from\n";
  $message .= "Куда: $where_to\n";

  $headers = "From: cherepanova.so04@gmail.com";


  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
  } else {
    echo "<script>alert('Ошибка при отправке заявки. Пожалуйста, попробуйте позже.');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
  }
}
