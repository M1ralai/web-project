<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $userLine = "$username&$password&|$email" . PHP_EOL;
    $file = '../kullanicilar/kullanicilar.txt';

    // Aynı kullanıcı adı varsa reddet
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
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '<h2>Kayıt Formu doğrudan çalıştırılamaz. Lütfen kayıt sayfasından gönderin.</h2>';
} else {
    echo 'Geçersiz istek.';
}