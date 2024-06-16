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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
  </head>

  <body>
    <section class="contacts">
      <small class="contact">zorina.olga.73@mail.ru</small>
      <small class="contact">8 967 903 95 97</small>
    </section>
    <header class="desktop-header">
      <img src="./assets/logotype-title.svg" alt="логотип">
      <nav>
        <ul>
          <li><a href="./index.php" <?= $classAttributes['Главная'] ?>>Главная</a></li>
          <li><a href="./company.php" <?= $classAttributes['Компания'] ?>>Компания</a></li>
          <li><a href="./for-partners.php" <?= $classAttributes['Партнерам'] ?>>Партнерам</a></li>
          <li><a href="./news.php" <?= $classAttributes['Новости'] ?>>Новости</a></li>
          <li><a href="./services.php" <?= $classAttributes['Услуги'] ?>>Услуги</a></li>
          <li><a href="./contacts.php" <?= $classAttributes['Контакты'] ?>>Контакты</a></li>
        </ul>
      </nav>
      <div class="btn-con">
        <a href="./contacts.php">Заказать</a>
      </div>
    </header>

    <header class="mobile-header">
      <img src="./assets/logotype-title.svg" alt="логотип">

      <nav>
        <ul>
          <li><a href="./index.php" <?= $classAttributes['Главная'] ?>>Главная</a></li>
          <li><a href="./company.php" <?= $classAttributes['Компания'] ?>>Компания</a></li>
          <li><a href="./for-partners.php" <?= $classAttributes['Партнерам'] ?>>Партнерам</a></li>
          <li><a href="./news.php" <?= $classAttributes['Новости'] ?>>Новости</a></li>
          <li><a href="./services.php" <?= $classAttributes['Услуги'] ?>>Услуги</a></li>
          <li><a href="./contacts.php" <?= $classAttributes['Контакты'] ?>>Контакты</a></li>
        </ul>
      </nav>
      <div class="right-con">
        <!-- иконка: открыть меню -->
        <div class="open-menu">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256"
            width="20px" height="20px">
            <g fill="#fdfdfd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
              stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
              font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
              <g transform="scale(5.12,5.12)">
                <path
                  d="M5,8c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,23c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175zM5,38c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h40c0.72127,0.0102 1.39216,-0.36875 1.75578,-0.99175c0.36361,-0.623 0.36361,-1.39351 0,-2.01651c-0.36361,-0.623 -1.0345,-1.00195 -1.75578,-0.99175z">
                </path>
              </g>
            </g>
          </svg>
        </div>
        <div class="btn-con">
          <a href="./contacts">Заказать</a>
        </div>
      </div>
    </header>
    <!-- open-close menu script -->
    <script src="./scripts/header.js"></script>
  </body>

</html>