<?php
$db_host = 'localhost';
$db_name = 'vega';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $pdo = new PDO($dsn, $db_user, $db_pass, $options);
} catch (PDOException $e) {
  echo 'Ошибка подключения: ' . $e->getMessage();
}

try {
  $stmt = $pdo->query('SELECT 1');
  echo "Подключение успешно!";
} catch (PDOException $e) {
  echo 'Ошибка подключения: ' . $e->getMessage();
}
