<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $userLine = "$username&$password&$fullname&$email" . PHP_EOL;
    $file = 'users.txt';
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($existingUser) = explode('|', $line);
        if ($existingUser === $username) {
            die('Bu kullanıcı adı zaten kayıtlı.');
        }
    }

    file_put_contents($file, $userLine, FILE_APPEND);
    header('Location: login.html');
    exit;
}
?>