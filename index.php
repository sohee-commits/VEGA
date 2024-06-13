<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вега.Логистика - Доставка грузов по всей России</title>
    <link rel="shortcut icon" href="./assets/logotype-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css">
  </head>

  <body>
    <?php require_once ('./header.php'); ?>

    <main>
      <section class="summ">
        <div class="text">
          <h1>Доставка грузов <span class="yellow">по всей России</span></h1>
          <p>Мы верим в силу бесперебойной транспортировки,
            позволяющей соединять людей, товары и возможности через
            границы регионов.
            <span class="bold">Доставка от 10 тонн</span>.
          </p>
          <a href="#services">Подробнее</a>
        </div>
        <img src="./assets/logotype-icon.svg" alt="логотип ВЕГА">
      </section>

      <img src="./assets/icons/action.svg" alt="иконка грузовика в пути" class="action">

      <section class="services" id="services">
        <h2>
          Индивидуальные решения <br> для <span class="yellow">вашего бизнеса</span>
        </h2>
        <div class="services-con">
          <!-- card -->
          <a href="./services.php" class="service">
            <div class="title">
              <div>
                <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
              </div>
              <h4>Тентовые перевозки</h4>
            </div>
            <div class="line">
              <small>ТОННАЖ</small>
              <hr>
              <p class="bold">От 10 до 20 тонн</p>
            </div>
            <div class="line">
              <small>ОБЪЕМ</small>
              <hr>
              <p class="bold">От 35 м³ до 92 м³</p>
            </div>
          </a>
          <!-- card -->
          <a href="./services.php" class="service">
            <div class="title">
              <div>
                <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
              </div>
              <h4>Изотермические перевозки</h4>
            </div>
            <div class="line">
              <small>ТОННАЖ</small>
              <hr>
              <p class="bold">От 10 до 20 тонн</p>
            </div>
            <div class="line">
              <small>ОБЪЕМ</small>
              <hr>
              <p class="bold">33 европаллет</p>
            </div>
          </a>
          <!-- card -->
          <a href="./services.php" class="service">
            <div class="title">
              <div>
                <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
              </div>
              <h4>Рефрижераторные перевозки</h4>
            </div>
            <div class="line">
              <small>ТОННАЖ</small>
              <hr>
              <p class="bold">От 10 до 20 тонн</p>
            </div>
            <div class="line">
              <small>ОБЪЕМ</small>
              <hr>
              <p class="bold">33 европаллет</p>
            </div>
          </a>
          <!-- card -->
          <a href="./services.php" class="service">
            <div class="title">
              <div>
                <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
              </div>
              <h4>Экспедирование и Логистика</h4>
            </div>
            <div class="line">
              <small>СТРАНА</small>
              <hr>
              <p class="bold">Россия</p>
            </div>
            <div class="line">
              <small>ГДЕ</small>
              <hr>
              <p class="bold">По стране и по городу</p>
            </div>
          </a>
          <!-- card -->
          <a href="./services.php" class="service">
            <div class="title">
              <div>
                <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
              </div>
              <h4>Бортовые перевозки</h4>
            </div>
            <div class="line">
              <small>ТОННАЖ</small>
              <hr>
              <p class="bold">20 тонн</p>
            </div>
            <div class="line">
              <small>ДЛИНА</small>
              <hr>
              <p class="bold">13,6 м³</p>
            </div>
          </a>
        </div>
      </section>
      <section class="pros">
        <div class="pro">
          <img src="./assets/wombo-pro-0.svg"
            alt="иконка часов или времени, символизирующая бесперебойную круглосуточную работу">
          <h4>Работаем непрерывно и оперативно</h4>
          <p>24 часа в сутки, 7 дней в неделю</p>
        </div>
        <div class="pro">
          <img src="./assets/wombo-pro-1.svg" alt="иконка числа 10, символизирующая 10 лет работы нашей компании">
          <h4>Многолетний опыт в нашей сфере</h4>
          <p>Тенденция к совершенству уже 10 лет</p>
        </div>
      </section>
      <section class="trusted">
        <h2>
          Нам <span class="yellow">доверяют</span> свои грузы
        </h2>
        <div class="companies">
          <img src="./assets/logos/monetka.svg" alt="логотип магазна монетка">
          <img src="./assets/logos/magnit.svg" alt="логотип магазна магнит">
          <img src="./assets/logos/pyatorochka.svg" alt="логотип магазна пятерочка">
          <img src="./assets/logos/lenta.svg" alt="логотип магазна лента">
          <img src="./assets/logos/lab-industries.png" alt="логотип магазна lab industries (henkel)">
        </div>
      </section>
      <section class="news">
        <div class="heading-con">
          <h2>Последние новости</h2>
          <a href="./news.php" class="bold">
            Смотреть все&nbsp;&nbsp;<span class="arrow-right">></span>
          </a>
        </div>
        <section class="news-con">
          <?php
          require './config.php';

          $sql = "SELECT name, date, id FROM news";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo "<a href='./news.php?id={$row['id']}' class='new'>";
            echo '<h3>' . $row["name"] . '</h3>';
            echo '<small class="bold">' . $row["date"] . '</small>';
            echo '</a>';
          }
          ?>
        </section>
      </section>

      <?php require_once './form.php' ?>

    </main>

    <?php require_once ('./footer.php'); ?>
  </body>

</html>