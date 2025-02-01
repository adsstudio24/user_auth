<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'auth_system');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo "✅ Користувача зареєстровано!";
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username" placeholder="Логін" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">🔐 Зареєструватися</button>
    </form>
</body>
</html>
