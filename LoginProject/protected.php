<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head><title>Pagina Protetta</title></head>
<body>
<h2>Benvenuto, <?php echo $_SESSION["username"]; ?>!</h2>
<p>Questa è una pagina protetta da sessione.</p>
<a href="logout.php">Esci</a>
</body>
</html>
