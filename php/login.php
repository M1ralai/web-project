<?php
    session_start();
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $file = '../kullanicilar/kullanicilar.txt';
    $found = false;
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($storedUserName,$storedPassword,$storedEmail) = explode('&', $line);
            if ($storedUserName === $username && $storedPassword === $password) {
                $_SESSION['username'] = $storedUserName;
                $found = true;
                break;
            }
        }

    if ($found) {
        header('Location: ../index.html');
        exit;
    } else {
        echo '<h2>Geçersiz kullanıcı adı veya şifre</h2>';
    }
?>