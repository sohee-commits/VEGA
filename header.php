<?php
$currentFileName = basename($_SERVER['PHP_SELF']);
$expectedFileNames = [
  'index.php' => 'Главная',
  'company.php' => 'Компания',
  'for-partners.php' => 'Партнерам',
  'news.php' => 'Новости',
  'services.php' => 'Услуги',
  'contacts.php' => 'Контакты',
];
$classAttributes = [];

foreach ($expectedFileNames as $fileName => $label) {
  if ($currentFileName === $fileName) {
    $classAttributes[$label] = 'class="active"';
  } else {
    $classAttributes[$label] = '';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
  </head>

  <body>
    <section class="contacts">
      <small class="contact">zorina.olga.73@mail.ru</small>
      <small class="contact">8 967 903 95 97</small>
    </section>
    <header>
      <img src="./assets/logotype-title.svg" alt="логотип">
      <nav>
        <ul>
          <li><a href="./index.php" <?= $classAttributes['Главная'] ?>>Главная</a></li>
          <li><a href="./company.php" <?= $classAttributes['Компания'] ?>>Компания</a></li>
          <li><a href="./for-partners.php"> <?= $classAttributes['Партнерам'] ?>Партнерам</a></li>
          <li><a href="./news.php"> <?= $classAttributes['Новости'] ?>Новости</a></li>
          <li><a href="./services.php"> <?= $classAttributes['Услуги'] ?>Услуги</a></li>
          <li><a href="./contacts.php"> <?= $classAttributes['Контакты'] ?>Контакты</a></li>
        </ul>
      </nav>
      <a href="./contacts">Заказать</a>
    </header>
  </body>

</html>