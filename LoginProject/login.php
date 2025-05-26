<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Credenziali fisse per esempio
    $user = "Kevin";
    $pass = "12345";

    if ($username === $user && $password === $pass) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: protected.php");
        exit();
    } else {
        $error = "Username o password errati";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form method="post">
    <label>Username: <input type="text" name="username" required></label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <input type="submit" value="Accedi">
</form>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
