<?php
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $file = '../kullanicilar/kullanicilar';
    $found = false;

    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            list($storedUserName,$storedPassword) = explode('&', $line);
            if ($storedUserName === $username && $storedPassword === $password) {
                $_SESSION['username'] = $username;
                $_SESSION['fullname'] = $storedName;
                $found = true;
                break;
            }
        }
    }

    if ($found) {
        header('Location: index.html');
        exit;
    } else {
        echo '<h2>Geçersiz kullanıcı adı veya şifre</h2>';
    }
?>