<?php
try {
  $dsn ="mysql:host=localhost:3306;dbname=test;
  charset=utf8mb4";

  $username = "root";
  $password = "";
  $pdo = new PDO($dsn,$username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
  echo "Connessione riuscita! <br>";
} catch (PDOException $e) {
  echo "Connessione fallita: " . $e->getMessage();
}

$stmt = $pdo->query("SELECT * FROM utenti");
echo "<br>Eseguo query 'SELECT * FROM utenti' <br>";
while ($row = $stmt->fetch()) {
  echo $row['nome'] . " " . $row['cognome'] . "<br>";
}

?>
