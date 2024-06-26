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
    <img src="./assets/logotype.png" alt="одна из форм логотипа веги: только грузовая машина">
  </section>
  <form action="send_email.php" method="POST">
    <!-- full name -->
    <div class="input-group">
      <label for="fullname">КОНТАКТНОЕ ЛИЦО <span class="bold">*</span></label>
      <hr>
      <input type="text" name="fullname" id="fullname" placeholder="Имя" minlength="2" maxlength="120" required>
    </div>
    <!-- number, inn -->
    <div class="group">
      <div class="input-group">
        <label for="phonenumber">НОМЕР ТЕЛЕФОНА <span class="bold">*</span></label>
        <hr>
        <input type="tel" name="phonenumber" id="phonenumber" placeholder="+ 7" minlength="7" required>
      </div>
      <div class="input-group">
        <label for="inn">ИНН <span class="bold">*</span></label>
        <hr>
        <input type="number" name="inn" id="inn" placeholder="00 00 00000 0" minlength="10" required>
      </div>
    </div>
    <!-- service -->
    <div class="input-group">
      <label for="service">УСЛУГА <span class="bold">*</span></label>
      <hr>
      <select name="service" id="service" required>
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
        <input type="text" name="where-from" id="where-from" placeholder="Откуда" minlength="2" required>
        <!-- where to -->
        <label for="where-to"></label>
        <input type="text" name="where-to" id="where-to" placeholder="Куда" minlength="2" required>
      </div>
    </div>
    <button type="submit">
      <span class="bold">Рассчитать</span>
      <span>----------<span class="arrow-right">></span></span>
    </button>
  </form>
</section>