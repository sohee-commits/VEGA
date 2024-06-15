<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вега.Логистика - Услуги</title>
    <link rel="shortcut icon" href="./assets/logotype-icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./css/services.css">
  </head>

  <body>
    <?php require_once ('./header.php'); ?>

    <main>
      <?php
      require './config.php';

      if (isset($_GET['id'])) {
        $id = intval($_GET['id']); // Convert id to integer for safety
      
        $sql = "SELECT name, description, src, id FROM services WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        echo "<div class='service-con'>";

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

          echo '<section class="description">';
          echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
          echo "<p>" . htmlspecialchars($row['description']) . ".</p>";
          echo "
          <div class='slider-wrapper'>
            <!-- slides -->
            <div class='slider'>
          ";

          for ($i = 1; $i < 5; $i++) {
            $imgPath = './assets/services/' . htmlspecialchars($row['src']) . '/' . $i . '.jpg';
            if (file_exists($imgPath)) {
              echo "<img src='" . $imgPath . "' alt='" . htmlspecialchars($row['name']) . "'>";
            } else {
              continue;
            }
          }

          echo "
            </div>
          </div>";
          echo "
          <button id='close-popup' onclick='history.back()'>
            <img src='./assets/icons/icons8-close.svg' alt='X'>
          </button>
          ";
          echo "</section>";

          require_once './form.php';

          echo '</div>';
        } else {
          echo "Service not found.";
        }

        $stmt->close();
      } else {
        $sql = "SELECT name, description, src, id FROM services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo '
          <section class="services">
            <div class="title bold">Подробно изучите все наши
              <span class="yellow">услуги</span> и
              <span class="yellow">условия</span>
            </div>
          ';

          while ($row = $result->fetch_assoc()) {
            echo "<section class='service' service-index='" . htmlspecialchars($row['id']) . "'>";
            echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "<a href='./services.php?id=" . htmlspecialchars($row['id']) . "' id='open-popup'>Подробнее</a>";
            echo "</section>";
          }

          echo "</section>";
          require_once './form.php';
        } else {
          echo "No services available.";
        }
      }

      $conn->close();
      ?>
    </main>

    <?php require_once ('./footer.php'); ?>
  </body>

</html>