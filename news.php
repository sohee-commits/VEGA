<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вега.Логистика - Новости</title>
    <link rel="shortcut icon" href="./assets/logotype-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/news.css">

    <?php require_once ('./header.php'); ?>

    <main>
      <section class="news">
        <h2>Новости</h2>

        <?php
        require './config.php';

        if (isset($_GET['id'])) {
          $id = intval($_GET['id']); // Преобразуем id к целому числу для безопасности
        
          $sql = "SELECT name, content, date FROM news WHERE id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param('i', $id);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<section class='new-con'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<small>" . htmlspecialchars($row['date']) . "</small>";
            echo "<p>" . $row['content'] . "</p>";
            echo "<button onclick='history.back()'>Назад</button>";
            echo "</section>";
          } else {
            echo "News not found.";
          }

          $stmt->close();
        } else {
          echo '<div class="news-con">';

          $sql = "SELECT name, date, id FROM news";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo "<a href='./news.php?id="
              . htmlspecialchars($row['id'])
              . "' class='new'>";
            echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
            echo "<small>" . htmlspecialchars($row["date"]) . "</small>";
            echo "</a>";
          }

          echo '</div>';
          echo '<div class="pag">';
          echo '<div class="arrow-right arrow-left">&lt;</div>';
          echo '<p>1</p>';
          echo '<div class="arrow-right">&gt;</div>';
          echo '</div>';
        }

        $conn->close();
        ?>

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