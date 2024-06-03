<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ВЕГА - О компании</title>
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
          <a href="./services.php" class="service">
            <div>
              <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
            </div>
            <p>Тентовые перевозки</p>
          </a>
          <a href="./services.php" class="service">
            <div>
              <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
            </div>
            <p>Изотермические перевозки</p>
          </a>
          <a href="./services.php" class="service">
            <div>
              <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
            </div>
            <p>Рефрижераторные перевозки</p>
          </a>
          <a href="./services.php" class="service">
            <div>
              <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
            </div>
            <p>Экспедирование и Логистика</p>
          </a>
          <a href="./services.php" class="service">
            <div>
              <img src="./assets/icons/icons8-truck-100.png" alt="иконка грузовика">
            </div>
            <p>Бортовые перевозки</p>
          </a>
        </section>
      </section>
      <section class="form-con">
        <section class="details-con">
          <p>
            <span class="bold">
              Оставьте заявку на рассчет стоимости<br>
              -----------------------------------
            </span>
            <span class="arrow-right">></span><br>
            Мы вам перезвоним
          </p>
          <img src="./assets/sample.png" alt="шаблон фотографии">
        </section>
        <form action="" method="POST">
          <!-- full name -->
          <div class="input-group">
            <label for="fullname">КОНТАКТНОЕ ЛИЦО <span class="bold">*</span></label>
            <hr>
            <input type="text" name="fullname" id="fullname" placeholder="Фамилия Имя Отчество">
          </div>
          <!-- number, inn -->
          <div class="group">
            <div class="input-group">
              <label for="phonenumber">НОМЕР ТЕЛЕФОНА <span class="bold">*</span></label>
              <hr>
              <input type="text" name="phonenumber" id="phonenumber" placeholder="+ 7">
            </div>
            <div class="input-group">
              <label for="inn">ИНН <span class="bold">*</span></label>
              <hr>
              <input type="text" name="inn" id="inn" placeholder="00 00 00000 0">
            </div>
          </div>
          <!-- service -->
          <div class="input-group">
            <label for="service">УСЛУГА <span class="bold">*</span></label>
            <hr>
            <select name="service" id="service">
              <option value="Другое" selected>Другое</option>
              <option value="Тентовые перевозки">Тентовые перевозки</option>
              <option value="Изотермические перевозки">Изотермические перевозки</option>
              <option value="Рефрижераторные перевозки">Рефрижераторные перевозки</option>
              <option value="Экспедирование и Логистика">Экспедирование и Логистика</option>
              <option value="Бортовые перевозки">Бортовые перевозки</option>
            </select>
          </div>
          <!-- where -->
          <div class="group conc">
            <p>НАПРАВЛЕНИЕ <span class="bold">*</span></p>
            <hr>
            <div class="input-group">
              <!-- where from -->
              <label for="where-from"></label>
              <input type="text" name="where-from" id="where-from" placeholder="Откуда">
              <!-- where to -->
              <label for="where-to"></label>
              <input type="text" name="where-to" id="where-to" placeholder="Куда">
            </div>
          </div>
          <button type="submit">
            <span class="bold">Рассчитать</span>
            <span>----------<span class="arrow-right">></span></span>
          </button>
        </form>
      </section>
    </main>

    <?php require_once ('./footer.php'); ?>
  </body>

</html>