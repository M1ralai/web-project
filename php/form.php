<?php 
    $isimsoyisim = htmlspecialchars(trim($_POST['isimsoyisim'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $baslik = htmlspecialchars(trim($_POST['baslik'] ?? ''));
    $mesaj = htmlspecialchars(trim($_POST['mesaj'] ?? ''));
    echo "<p class="paragraph">Ad Soyad: $isimsoyisim</p>";
    echo "<p class="paragraph">E-posta: $email</p>";
    echo "<p class="paragraph">Baslik: $baslik</p>";
    echo "<p class="paragraph">Mesaj: $mesaj</p>";
    echo "<p class="paragraph"> $mesaj</p>";
    echo "<a href="index.html">geri dön</a>";
?>