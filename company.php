<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вега.Логистика - О компании</title>
    <link rel="shortcut icon" href="./assets/logotype-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/company.css">
  </head>

  <body>
    <?php require_once ('./header.php'); ?>

    <main>
      <section class="company">
        <section class="about">
          <div class="summ">
            <h2>О компании</h2>
            <p>
              Дата основания нашей компании -
              <span class="bold">2015 год</span>.
            </p>
            <p>
              ООО “ВЕГА” - компания <span class="bold">логистики</span>.
              ВЕГА специализируется на <span class="bold">грузоперевозках</span>: тентовые, бортовые, изотермические,
              рефрижераторные перевозки; а также на экспедировании. Мы перевозим
              грузы по всей <span class="bold">России</span> и <span class="bold">по городу</span>.
            </p>
          </div>
          <section class="pros-con">
            <div class="pro">
              <img src="./assets/wombo-pro-1.svg"
                alt="иконка часов или времени, символизирующая бесперебойную круглосуточную работу">
              <h3>Десять лет развития и опыта в нашей сфере</h3>
            </div>
            <div class="pro">
              <img src="./assets/wombo-pro-0.svg" alt="иконка числа 10, символизирующая 10 лет работы нашей компании">
              <h3>На связи 24 часа в сутки и 7 дней в неделю</h3>
            </div>
          </section>
        </section>
        <section class="services-con">
          <?php
          require './config.php';

          $sql = "SELECT name, id FROM services";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo "
            <a href='./services.php?id=" . $row['id'] . "' class='service'>
              <div>
                <img src='./assets/icons/icons8-truck-100.png' alt='иконка грузовика'>
              </div>
              <p>" . $row['name'] . "</p>
            </a>
            ";
          }

          $conn->close();
          ?>
        </section>
      </section>

      <?php require_once './form.php' ?>

    </main>

    <?php require_once ('./footer.php'); ?>
  </body>

</html>