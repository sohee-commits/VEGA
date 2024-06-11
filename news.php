<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вега.Логистика - Новости</title>
    <link rel="shortcut icon" href="./assets/logotype-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/news.css">
  </head>

  <body>
    <?php require_once ('./header.php'); ?>

    <main>
      <section class="news">
        <h2>Новости</h2>
        <div class="news-con">
          <?php
          require './config.php';

          $sql = "SELECT content, date, id FROM news";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            $title_arr = explode(" ", $row["content"]);
            $title = implode(" ", array_slice($title_arr, 0, 7));

            echo '<a href="./news.php?id=$id" class="new">';
            echo '<h3>' . $title . '...</h3>';
            echo '<small>' . $row["date"] . '</small>';
            echo '</a>';
          }
          ?>
        </div>
        <div class="pag">
          <div class="arrow-right arrow-left">&lt;</div>
          <p>1</p>
          <div class="arrow-right">&gt;</div>
        </div>
      </section>
      <section class="banner">
        <img src="./assets/logotype-icon.svg" alt="логотип Веги">
        <div class="text">
          <img src="./assets/logotype-title.svg" alt="ВЕГА.ЛОГИСТИКА">
          <p>Доставка грузов по всей России</p>
        </div>
      </section>
    </main>

    <?php require_once ('./footer.php'); ?>
  </body>

</html>