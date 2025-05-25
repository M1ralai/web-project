<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): {
    $isimsoyisim = htmlspecialchars(trim($_POST['isimsoyisim'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $baslik = htmlspecialchars(trim($_POST['baslik'] ?? ''));
    $mesaj = htmlspecialchars(trim($_POST['mesaj'] ?? ''));
    if ($isimsoyisim && $email && $baslik && $mesaj) {
    echo"<p>Verdiğin isim soyisim: $isimsoyisim</p><br>";
    echo"<p>Verdiğin e mail: $email</p><br>";
    echo"<p>Verdiğin baslik: $baslik</p><br>";
    echo"<p>Verdiğin mesaj: $mesaj</p>";
    echo"<a href='../index.html'>geri dön</a>";
    }
}endif;
?>