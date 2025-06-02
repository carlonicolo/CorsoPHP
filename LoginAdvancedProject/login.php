<?php
session_start();
require "config.php";

// TODO: inserire la colonna password nel database
// in questo esampio si considera il cognome come password 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM utenti WHERE nome = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();
        var_dump($user);
        print($user["cognome"]);
        // if (password_verify($password, $user["cognome"])) {
        if ( $password == $user["cognome"] ) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $user["nome"];
            header("Location: protected.php");
            exit();
        } else {
            $error = "Password errata.";
        }
    } else {
        $error = "Utente non trovato.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head><title>Login MySQL</title></head>
<body>
<h2>Login</h2>
<form method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Accedi">
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
