<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";  // Sostituisci con il nome del tuo DB

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>
