<?php session_start(); ?>
<?php if (isset($_SESSION['username'])): ?>
        <a href="php/logout.php">Çıkış yap</a>
<?php else: ?>
        <a href="giris.html">Giriş yap</a>
<?php endif; ?>