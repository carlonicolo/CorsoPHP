<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: login.php");
    exit();
}
?>
<h2>Benvenuto, <?php echo $_SESSION["username"]; ?>!</h2>
<a href="logout.php">Esci</a>
