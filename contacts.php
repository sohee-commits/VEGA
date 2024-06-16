<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вега.Логистика - Контакты</title>
    <link rel="shortcut icon" href="./assets/logotype-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/contacts.css">
    <script src="./scripts/contacts.js" defer></script>
  </head>

  <body>
    <?php require_once ('./header.php'); ?>

    <main>
      <div class="contact-form">
        <p>
          <span class="bold">Оставьте заявку на рассчет стоимости</span>
          <br>
          Мы вам перезвоним
        </p>
        <?php require_once './form.php' ?>
      </div>
      <section class="contacts-con">
        <div class="contact">
          <p>НОМЕР ТЕЛЕФОНА</p>
          <hr>
          <button class="copyBtn">8 967 903 95 97</button>
        </div>
        <div class="contact">
          <p>ЭЛЕКТРОННАЯ ПОЧТА</p>
          <hr>
          <button class="copyBtn">zorina.olga.73@mail.ru</button>
        </div>
        <div class="contact">
          <p>ГРАФИК РАБОТЫ</p>
          <hr>
          <button>Круглосуточно</button>
        </div>
        <div class="contact">
          <p>РЕКВИЗИТЫ</p>
          <hr>
          <button class="copyBtn">ООО «Вега»</button>
        </div>
        <div class="contact">
          <p>ИНН</p>
          <hr>
          <button class="copyBtn">59 04 01077 0</button>
        </div>
        <div class="contact">
          <p>ОГРН</p>
          <hr>
          <button class="copyBtn">1155958000032</button>
        </div>
      </section>
    </main>

    <?php require_once ('./footer.php'); ?>
  </body>

</html>